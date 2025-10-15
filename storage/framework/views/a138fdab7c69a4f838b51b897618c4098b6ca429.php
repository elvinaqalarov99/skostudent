<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo e(config('app.name')); ?> | Admin</title>

    <link rel="icon" type="image/svg+xml" href="<?php echo e(setting('favicon')); ?>">
    <link rel="alternate icon" href="<?php echo e(setting('favicon')); ?>">
    <link rel="mask-icon" href="<?php echo e(setting('favicon')); ?>">

    <link href="<?php echo e(asset('backend/assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/assets/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/assets/css/plugins/dataTables/datatables.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/assets/css/plugins/toastr/toastr.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/assets/css/plugins/chosen/bootstrap-chosen.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('backend/assets/css/animate.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/assets/css/plugins/summernote/summernote-bs4.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/assets/css/style.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('backend/assets/css/plugins/datapicker/datepicker3.css')); ?>" rel="stylesheet">


    <link href="<?php echo e(asset('backend/assets/css/plugins/switchery/switchery.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('backend/assets/css/plugins/ionRangeSlider/ion.rangeSlider.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/assets/css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('backend/assets/css/plugins/iCheck/custom.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/assets/css/cropper.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldPushContent('css'); ?>

    <style>
        .dataTables_wrapper select.form-control:not([size]):not([multiple]) {
            height: 31px;
        }

        .dataTables_wrapper .dataTables_length {
            margin-right: 10px;
        }

        .dataTables_wrapper {
            padding: 0;
        }
        .ui-tooltip {
            display: none!important;
        }
        .list-group {
            gap: 10px;
        }
    </style>

</head>

<body class="fixed-sidebar no-skin-config pace-done">
<div id="wrapper">

    <?php echo $__env->make('backend.parts.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="page-wrapper" class="gray-bg">

        <?php echo $__env->make('backend.parts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>


        <?php echo $__env->make('backend.parts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<!-- Mainly scripts -->
<script src="<?php echo e(asset('backend/assets/js/jquery-3.1.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/plugins/metisMenu/jquery.metisMenu.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/plugins/slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/plugins/toastr/toastr.min.js')); ?>"></script>

<!-- Flot -->
<script src="<?php echo e(asset('backend/assets/js/plugins/flot/jquery.flot.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/plugins/flot/jquery.flot.tooltip.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/plugins/flot/jquery.flot.spline.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/plugins/flot/jquery.flot.resize.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/plugins/flot/jquery.flot.pie.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/plugins/flot/jquery.flot.symbol.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/plugins/flot/jquery.flot.time.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/plugins/chosen/chosen.jquery.js')); ?>"></script>

<!-- Peity -->
<script src="<?php echo e(asset('backend/assets/js/plugins/peity/jquery.peity.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/demo/peity-demo.js')); ?>"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo e(asset('backend/assets/js/inspinia.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/plugins/pace/pace.min.js')); ?>"></script>

<!-- jQuery UI -->
<script src="<?php echo e(asset('backend/assets/js/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>

<!-- Jvectormap -->
<script src="<?php echo e(asset('backend/assets/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>

<!-- EayPIE -->
<script src="<?php echo e(asset('backend/assets/js/plugins/easypiechart/jquery.easypiechart.js')); ?>"></script>

<!-- Sparkline -->
<script src="<?php echo e(asset('backend/assets/js/plugins/sparkline/jquery.sparkline.min.js')); ?>"></script>

<!-- Sparkline demo data  -->
<script src="<?php echo e(asset('backend/assets/js/demo/sparkline-demo.js')); ?>"></script>

<script src="<?php echo e(asset('backend/assets/js/plugins/dataTables/datatables.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/plugins/dataTables/dataTables.bootstrap4.min.js')); ?>"></script>

<script src="<?php echo e(asset('backend/assets/js/plugins/summernote/summernote-bs4.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/plugins/datapicker/bootstrap-datepicker.js')); ?>"></script>

<script src="<?php echo e(asset('backend/assets/js/plugins/switchery/switchery.js')); ?>"></script>

<script src="<?php echo e(asset('backend/assets/js/plugins/ionRangeSlider/ion.rangeSlider.min.js')); ?>"></script>

<script src="<?php echo e(asset('backend/assets/js/plugins/iCheck/icheck.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/cropper.js')); ?>"></script>

<?php echo $__env->yieldPushContent('js'); ?>

<script>
    toastr.options = {
        "closeButton": true,
        "debug": <?php echo e(app()->isProduction() ?:'true'); ?>,
        "newestOnTop": true,
        "progressBar": true,
        // "positionClass": "toastr-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "600",
        "hideDuration": "1000",
        "timeOut": "10000",
        "extendedTimeOut": "5000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    $(document).ready(function () {
        <?php if(session()->has('modal')): ?>
        $('#<?php echo e(session()->get('modal')); ?>').modal('show')
        <?php endif; ?>

        <?php if(session()->has('error')): ?>
        toastr.error("<?php echo e(session()->get('error')); ?>", "Error");
        <?php endif; ?>

        <?php if(session()->has('success')): ?>
        toastr.success("<?php echo e(session()->get('success')); ?>", "Success");
        <?php endif; ?>

        <?php if(session()->has('warning')): ?>
        toastr.warning("<?php echo e(session()->get('warning')); ?>", "Warning");
        <?php endif; ?>

        <?php if(session()->has('info')): ?>
        toastr.info("<?php echo e(session()->get('info')); ?>", "Info");
        <?php endif; ?>

        <?php if(isset($errors) && count($errors) > 0): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        toastr.error("<?php echo e($error); ?>", "Error");
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        $('.summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['font', ['fontname', 'fontsize', 'color', 'bold', 'italic', 'underline', 'clear', 'strikethrough', 'superscript', 'subscript']],
                ['insert', ['picture', 'link', 'video', 'table', 'hr']],
                ['para', ['ul', 'ol', 'paragraph', 'height', 'style']],
                ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
                ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
                ['view', ['fullscreen', 'codeview', 'undo', 'redo', 'help']]
            ],
            fontSizes: ['6', '7', '8', '9', '10', '11', '12', '13', '14', '16', '18', '20', '22', '24', '26', '28', '30', '32', '34', '36', '38', '40', '42', '44', '46', '48', '50'],
            lineHeights: ['0.1', '0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '0.9', '1.0', '1.1', '1.2', '1.4', '1.5', '2.0', '3.0', '3.5', '4.0', '4.5', '5.0', '5.5', '6.0', '6.5']
        });


        $('.input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: true,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true,
            todayHighlight: true,
            format: "yyyy/mm/dd"
        });

        $('.dataTables-base').DataTable({
            destroy: true,
            scrollCollapse: true,
            responsive: true,
            aLengthMenu: [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "All"]
            ],
            order: [[$(this).attr('data-order'), 'desc']],
            iDisplayLength: 25,
            language: <?php echo file_get_contents(base_path('lang/datatable/az.json')); ?>,
            dom: "<'html5buttons'B><'header__row' lf>Tg <'table-responsive' t> <'paginate__row' ip>",
            buttons: [
                // {extend: 'csv'},
                // {extend: 'excel', title: 'ExampleFile'},
                // {extend: 'pdf', title: 'ExampleFile'},

                // {extend: 'print',
                //     customize: function (win){
                //         $(win.document.body).addClass('white-bg');
                //         $(win.document.body).css('font-size', '10px');
                //
                //         $(win.document.body).find('table')
                //             .addClass('compact')
                //             .css('font-size', 'inherit');
                //     }
                // }
            ]

        });
        
        $(document).on('click', '[data-delete="true"]', function (e) {
            e.preventDefault();

            let route = $(this).attr('data-route');
            let method = $(this).attr('data-method');
            let reload = $(this).attr('data-reload');
            let csrf = $(this).attr('data-csrf');

            swal({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            }, function (result) {
                if(result) {
                    $.ajax({
                        url: route,
                        method: method,
                        data: {
                            _token: csrf
                        },
                        success: function (response) {
                            toastr.success(response.success, "Uğurlu");

                            if(reload && reload == 'true') {
                                location.reload()
                            }
                        },
                        error: function (error) {
                            toastr.error('Xəta baş verdi', "Xəta");
                        }
                    })
                }
            });
        })

        $(document).on('click', '.remove-media', function () {
            let route = $(this).attr('data-route')
            let $this = $(this)

            $.ajax({
                url: route,
                method: 'POST',
                data: {
                    _token: "<?php echo e(csrf_token()); ?>"
                },
                success: function (response) {
                    if (response.success) {
                        $this.closest('[data-media-parent]').remove()
                        toastr.success(response.success, "Uğurlu");
                    }
                },
                error: function (error) {
                    toastr.error('Xəta baş verdi', "Xəta");
                }
            })
        })

    });
</script>

</body>
</html>
<?php /**PATH /Users/elvinaghalarov/Downloads/skostudent.regallift.az/resources/views/backend/layouts/main.blade.php ENDPATH**/ ?>