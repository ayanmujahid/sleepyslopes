<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'color',
        'size',
        'price',
        'discounted_price',
        'stock',
        'sku',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'discounted_price' => 'decimal:2',
        'stock' => 'integer',
    ];

    // Relationships
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    // Helper: Check if the variant is in stock
    public function isInStock(): bool
    {
        return $this->stock > 0;
    }

    // Helper: Get the final price (discounted or regular)
    public function getFinalPrice(): float
    {
        return $this->discounted_price ?? $this->price;
    }
}
