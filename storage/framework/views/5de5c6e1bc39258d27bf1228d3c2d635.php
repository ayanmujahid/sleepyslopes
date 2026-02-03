<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(isset($title) ? $title . "    | Christelle Store" : " Christelle Store"); ?></title>
    
 


    <?php echo $__env->make('layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('css'); ?>
</head>
<input type="hidden" name="" id="web_base_url" value="<?php echo e(url('/')); ?>">
<body>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('js'); ?>
    <script>
(() => {
    <?php if(session('notify_success')): ?>
        Swal.fire({
            icon: 'success',
            title: '<?php echo e(session('notify_heading', 'Success!')); ?>',
            text: '<?php echo e(session('notify_success')); ?>',
            confirmButtonText: 'OK'
        });
    <?php elseif(session('notify_error')): ?>
        Swal.fire({
            icon: 'error',
            title: '<?php echo e(session('notify_heading', 'Error!')); ?>',
            text: '<?php echo e(session('notify_error')); ?>',
            confirmButtonText: 'OK'
        });
    <?php endif; ?>
})();
</script>

</body>
<?php echo $__env->make('layouts.errorhandler', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.core.editor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="preloader" style="display:none;">
    <div class="loading">
        <span>Loading...</span>
    </div>
</div>

</html>
<?php /**PATH C:\Users\AA\Documents\GitHub\sleepyslopes\resources\views/layouts/main.blade.php ENDPATH**/ ?>