<?php

namespace App\Jobs;

use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\ProductCategory;
use App\Repositories\FileRepository;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class ImportProductsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public array $products) {}

    public function handle(FileRepository $fileRepo)
    {
        set_time_limit(0);
        ini_set('memory_limit', '-1');

        foreach ($this->products as $rowData) {

            // CATEGORY
            $category = null;
            if (!empty($rowData['product_type'])) {
                $category = ProductCategory::firstOrCreate(
                    ['slug' => Str::slug($rowData['product_type'])],
                    ['name' => $rowData['product_type']]
                );
            }

            // PRODUCT
            $product = Product::updateOrCreate(
                ['slug' => $rowData['handle']],
                [
                    'category_id'      => $category?->id,
                    'name'             => $rowData['title'],
                    'long_description' => $rowData['body_html'] ?? null,
                    'is_featured'      => 0,
                ]
            );

            // VARIANTS
            $importedVariantKeys = [];

            if (!empty($rowData['variants'])) {
                foreach ($rowData['variants'] as $variant) {
                    $variantModel = ProductVariant::updateOrCreate(
                        [
                            'product_id' => $product->id,
                            'color'      => $variant['option1'] ?? null,
                            'size'       => $variant['option2'] ?? null,
                        ],
                        [
                            'price'            => $variant['price'] ?? 0,
                            'discounted_price' => $variant['compare_at_price'] ?? null,
                            'stock'            => $variant['available'] ? 10 : 0,
                            'sku'              => $variant['sku'] ?? null,
                        ]
                    );

                    // Keep track of imported variants
                    $importedVariantKeys[] = $variantModel->id;
                }
            }

            // DELETE OLD VARIANTS NOT IN IMPORT
            ProductVariant::where('product_id', $product->id)
                ->whereNotIn('id', $importedVariantKeys)
                ->delete();

            // IMAGES
            if (!empty($rowData['images'])) {

                // Delete old images
                $fileRepo->deleteAll($product, 'main_image');
                $fileRepo->deleteAll($product, 'gallery');

                // Upload new images
                foreach ($rowData['images'] as $index => $img) {
                    if (!empty($img['src'])) {
                        $fileRepo->uploadFromUrl(
                            $img['src'],
                            $product,
                            $index === 0 ? 'main_image' : 'gallery'
                        );
                    }
                }
            }
        }
    }
}
