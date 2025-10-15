<!DOCTYPE html>
<html lang="az" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index, follow">
    <meta name="apple-mobile-web-app-status-bar-style" content="#6E91F3">
    <meta name="msapplication-navbutton-color" content="#6E91F3">
    <meta name="theme-color" content="#6E91F3">
    <link rel="icon" type="image/svg+xml" href="<?php echo e(setting('favicon')); ?>">
    <link rel="alternate icon" href="<?php echo e(setting('favicon')); ?>">
    <link rel="mask-icon" href="<?php echo e(setting('favicon')); ?>">
    <title><?php echo e(config('app.name')); ?></title>

    <!-- fontawesome css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/fontawesome-5.css')); ?>">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/swiper.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/aos.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/unicons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/metismenu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/hover-revel.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/timepickers.min.css')); ?>">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/bootstrap.min.css')); ?>">
    <!-- main css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link href="<?php echo e(asset('backend/assets/css/plugins/toastr/toastr.min.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body class="<?php echo $__env->yieldContent('bodyClass'); ?>">

<?php echo $__env->make('frontend.parts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<!-- progress area start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>

<div id="anywhere-home" class="">
</div>

<!-- pre loader start -->
<div id="elevate-load">
    <div class="loader-wrapper">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!-- pre loader end -->

<?php echo $__env->make('frontend.parts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- jquery js -->
<script src="<?php echo e(asset('assets/js/plugins/jquery.min.js')); ?>"></script>
<!-- jquery ui -->
<script src="<?php echo e(asset('assets/js/vendor/jqueryui.js')); ?>"></script>
<!-- counter up -->
<script src="<?php echo e(asset('assets/js/plugins/counter-up.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/swiper.js')); ?>"></script>
<!-- twinmax -->
<script src="<?php echo e(asset('assets/js/vendor/twinmax.js')); ?>"></script>
<!-- split text js -->
<script src="<?php echo e(asset('assets/js/vendor/split-text.js')); ?>"></script>
<!-- text plugins -->
<script src="<?php echo e(asset('assets/js/plugins/text-plugins.js')); ?>"></script>
<!-- metismenu js -->
<script src="<?php echo e(asset('assets/js/plugins/metismenu.js')); ?>"></script>
<!-- waypoint js -->
<script src="<?php echo e(asset('assets/js/vendor/waypoint.js')); ?>"></script>
<!-- waw -->
<script src="<?php echo e(asset('assets/js/vendor/waw.js')); ?>"></script>
<!-- aos js -->
<script src="<?php echo e(asset('assets/js/plugins/aos.js')); ?>"></script>
<!-- jquery ui js -->
<script src="<?php echo e(asset('assets/js/plugins/jquery-ui.js')); ?>"></script>
<!-- timepickers -->
<script src="<?php echo e(asset('assets/js/plugins/jquery-timepicker.js')); ?>"></script>
<!-- sal animation -->
<script src="<?php echo e(asset('assets/js/vendor/sal.min.js')); ?>"></script>
<!-- bootstrap JS -->
<script src="<?php echo e(asset('assets/js/plugins/bootstrap.min.js')); ?>"></script>
<!-- easing JS -->
<script src="<?php echo e(asset('assets/js/plugins/jquery-slideNav.js')); ?>"></script>
<!-- easing JS -->
<script src="<?php echo e(asset('assets/js/plugins/hover-revel.js')); ?>"></script>
<!-- contact form js -->
<script src="<?php echo e(asset('assets/js/plugins/contact-form.js')); ?>"></script>
<!-- main js -->
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
<!-- swip image -->
<script src="<?php echo e(asset('assets/js/plugins/swip-img.js')); ?>"></script>
<!-- header style two End -->

<script src="<?php echo e(asset('backend/assets/js/plugins/toastr/toastr.min.js')); ?>"></script>
<script>
    toastr.options = {
        "closeButton": false,
        "newestOnTop": true,
        "progressBar": true,
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

    $(document).ready(function(){
        <?php if(session()->has('modal')): ?>
        $('#<?php echo e(session()->get('modal')); ?>').modal('show')
        <?php endif; ?>

        <?php if(session()->has('error')): ?>
        toastr.error("<?php echo e(session()->get('error')); ?>");
        <?php endif; ?>

        <?php if(session()->has('success')): ?>
        toastr.success("<?php echo e(session()->get('success')); ?>");
        <?php endif; ?>

        <?php if(session()->has('warning')): ?>
        toastr.warning("<?php echo e(session()->get('warning')); ?>");
        <?php endif; ?>

        <?php if(session()->has('info')): ?>
        toastr.info("<?php echo e(session()->get('info')); ?>");
        <?php endif; ?>

        <?php if(isset($errors) && count($errors) > 0): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                toastr.error("<?php echo e($error); ?>");
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    });
</script>

<?php echo $__env->yieldPushContent('js'); ?>

</body>

</html>

<?php /**PATH /Users/elvinaghalarov/Downloads/skostudent.regallift.az/resources/views/frontend/layouts/main.blade.php ENDPATH**/ ?>