<script src="<?php echo e(asset('admin/js/sticky.js')); ?>"></script>

<script>
    window.baseUrl = "<?php echo e(url('/')); ?>"; // must come BEFORE product.js
</script>
<!-- Grid JS -->
<script src="<?php echo e(asset('admin/libs/gridjs/gridjs.umd.js')); ?>"></script>

<!-- Sweetalerts JS -->
<script src="<?php echo e(asset('admin/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>

<!-- Products List JS -->
<script src="<?php echo e(asset('admin/js/products.js')); ?>"></script>

<!-- Custom JS -->

<script src="<?php echo e(asset('admin/libs/%40popperjs/core/umd/popper.min.js')); ?>"></script>

<!-- Bootstrap JS -->
<script src="<?php echo e(asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<!-- Defaultmenu JS -->
<script src="<?php echo e(asset('admin/js/defaultmenu.min.js')); ?>"></script>

<!-- Node Waves JS-->
<script src="<?php echo e(asset('admin/libs/node-waves/waves.min.js')); ?>"></script>

<!-- Sticky JS -->
<script src="<?php echo e(asset('admin/js/sticky.js')); ?>"></script>

<!-- Simplebar JS -->
<script src="<?php echo e(asset('admin/libs/simplebar/simplebar.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/simplebar.js')); ?>"></script>

<!-- Auto Complete JS -->
<script src="<?php echo e(asset('admin/libs/%40tarekraafat/autocomplete.js/autoComplete.min.js')); ?>"></script>

<!-- Color Picker JS -->
<script src="<?php echo e(asset('admin/libs/%40simonwep/pickr/pickr.es5.min.js')); ?>"></script>

<!-- Date & Time Picker JS -->
<script src="<?php echo e(asset('admin/libs/flatpickr/flatpickr.min.js')); ?>"></script>


<!-- Apex Charts JS -->
<script src="<?php echo e(asset('admin/libs/apexcharts/apexcharts.min.js')); ?>"></script>

<!-- Ecommerce Dashboard -->
<script src="<?php echo e(asset('admin/js/ecommerce-dashboard.js')); ?>"></script>

<!-- Custom JS -->
<script src="<?php echo e(asset('admin/js/custom.js')); ?>"></script>


<!-- Custom-Switcher JS -->
<script src="<?php echo e(asset('admin/js/custom-switcher.min.js')); ?>"></script>

<!-- Popper JS -->
<!-- <script src="admin/libs/%40popperjs/core/umd/popper.min.js"></script> -->

<!-- Quill Editor JS -->
<script src="<?php echo e(('admin/libs/quill/quill.js')); ?>"></script>

<!-- Filepond JS -->
<script src="<?php echo e(asset('admin/libs/filepond/filepond.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js')); ?>"></script>

<!-- Internal Add Products JS -->
<script src="<?php echo e(asset('admin/js/add-products.js')); ?>"></script>



<script src="<?php echo e(asset('admin/libs/choices.js/public/assets/scripts/choices.min.js')); ?>"></script>

<!-- Main Theme Js -->
<script src="<?php echo e(asset('admin/js/main.js')); ?>"></script>

<script src="<?php echo e(asset('dash/js/jquery.toast.js')); ?>"></script>
<script type="text/javascript">
    (() => {

        var Loader = function() {

            return {

                show: function() {
                    jQuery("#preloader").show();
                },

                hide: function() {
                    jQuery("#preloader").hide();
                }
            };

        }();
        <?php if(session('crawl_success')): ?>
        $('#crawl-success-alert-modal-1').modal('show');
        <?php endif; ?>
        /*in page css here*/

        $('.li-dropdown').on('click', function() {
            var dropdown = $(this).find('>.dropdown-content');
            if (!dropdown.hasClass('open')) {
                dropdown.addClass('open');
                dropdown.slideDown(500);
            } else {
                dropdown.removeClass('open');
                dropdown.slideUp(500);
            }
        });

    })();
</script><?php /**PATH C:\Users\AA\Documents\GitHub\sleepyslopes\resources\views/admin/layouts/scripts.blade.php ENDPATH**/ ?>