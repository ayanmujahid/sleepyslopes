<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="main-sec">
        <div class="main-wrapper">
            <div class="primary-heading color-dark">
                <h2>Add Product</h2>
            </div>

        </div>
<div class="user-wrapper">
    <div class="primary-heading color-dark">
        <h2>Import Products via CSV</h2>
    </div>

    <form action="<?php echo e(route('admin.importProductsJson')); ?>" method="POST" enctype="multipart/form-data" class="main-form mc-b-3">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="form-group">
                    <label>Select CSV File:</label>
                    <input type="file" name="json_file" accept=".json" class="form-control" required>

                    <?php if($errors->has('csv_file')): ?>
                        <span class="error"><?php echo e($errors->first('csv_file')); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-12 d-flex align-items-end">
                <button type="submit" class="primary-btn primary-bg">
                    Import CSV
                </button>
            </div>
        </div>

        <p class="mt-2">
            <strong>Required CSV Headers:</strong>  
            <code>title, slug, price, old_price, category_id, main_image, other_images</code>
        </p>
    </form>
</div>

    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.3/css/fileinput.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/file-upload.css')); ?>" />
    <style type="text/css">
        /*in page css here*/
        .thumbnail-img {
            max-width: 288px;
            height: 113px;

        }

        .picture {
            max-width: 288px;
            height: 113px;

        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.3/js/plugins/sortable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.3/themes/fas/theme.min.js"></script>
    <script src="<?php echo e(asset('admin/js/file-upload.js')); ?>"></script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AA\Documents\GitHub\sleepyslopes\resources\views/admin/product-management/jsonbulk.blade.php ENDPATH**/ ?>