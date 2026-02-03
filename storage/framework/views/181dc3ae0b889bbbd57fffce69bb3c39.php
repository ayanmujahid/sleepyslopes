<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Any config settings you want to fetch you will get in $config array, -->
    <?php //echo $config['COMPANY'];
    ?>
    <title><?php echo e(isset($title) ? $title : ''); ?></title>
    <link rel="icon" type="image/png" href="<?php echo e(asset(isset($favicon) ? $favicon : '')); ?>">
    <link rel="icon" href="<?php echo e(asset(isset($logo) ? $logo->img_path : '')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php echo $__env->make('admin.layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('css'); ?>
</head>

<body class="responsive">
    <input type="hidden" id="web_base_url" value="<?php echo e(url('/')); ?>" />
    <?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('js'); ?>
    <script type="text/javascript">
        (() => {

            <?php if(session('notify_success')): ?>
                $.toast({
                    heading: 'Success!',
                    position: 'bottom-right',
                    text: '<?php echo e(session('notify_success')); ?>',
                    loaderBg: '#ff6849',
                    icon: 'success',
                    hideAfter: 2000,
                    stack: 6
                });
            <?php elseif(session('notify_error')): ?>
                $.toast({
                    heading: 'Error!',
                    position: 'bottom-right',
                    text: '<?php echo e(session('notify_error')); ?>',
                    loaderBg: '#ff6849',
                    icon: 'error',
                    hideAfter: 2000,
                    stack: 6
                });
            <?php endif; ?>

        })()
    </script>
</body>
<div id="preloader" style="display:none;">
    <div class="loading">
        <!--<span>Loading...</span>-->
    </div>
</div>

</html>
<?php /**PATH C:\Users\AA\Documents\GitHub\sleepyslopes\resources\views/admin/layouts/main.blade.php ENDPATH**/ ?>