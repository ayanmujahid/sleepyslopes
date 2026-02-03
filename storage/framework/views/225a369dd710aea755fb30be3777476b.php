

<!-- Js Files -->
<script src="<?php echo e(asset('assets/js/vendor/modernizr-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vendor/jquery-3.3.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>






<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="<?php echo e(asset('dash/js/jquery.toast.js')); ?>"></script>
<?php if(Auth::guard('admin')): ?>
    <script src="<?php echo e(asset('admin/js/ckeditor/ckeditor.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('admin/js/content-management.js')); ?>"></script>
<?php endif; ?>
<?php /**PATH C:\Users\AA\Documents\GitHub\sleepyslopes\resources\views/layouts/scripts.blade.php ENDPATH**/ ?>