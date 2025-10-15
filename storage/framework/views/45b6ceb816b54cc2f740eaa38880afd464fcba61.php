<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="icon" type="image/svg+xml" href="<?php echo e(setting('favicon')); ?>">
    <link rel="alternate icon" href="<?php echo e(setting('favicon')); ?>">
    <link rel="mask-icon" href="<?php echo e(setting('favicon')); ?>">

    <title><?php echo e(config('app.name')); ?> | Giriş</title>

    <link href="<?php echo e(asset('backend/assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/assets/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('backend/assets/css/animate.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/assets/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/assets/css/plugins/toastr/toastr.min.css')); ?>" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">
                <img width="150" src="<?php echo e(setting('favicon')); ?>" alt="">
            </h1>

        </div>
        <h3>Hoşgeldiniz</h3>

        <form class="m-t" role="form" action="<?php echo e(route('admin.auth')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="E-posta" required="">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Şifre" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Giriş</button>

        </form>

    </div>
</div>

<!-- Mainly scripts -->
<script src="<?php echo e(asset('backend/assets/js/jquery-3.1.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/plugins/toastr/toastr.min.js')); ?>"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": <?php echo e(app()->isProduction() ?:'true'); ?>,
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

    });
</script>
</body>

</html>
<?php /**PATH /Users/elvinaghalarov/Downloads/skostudent.regallift.az/resources/views/backend/auth/login.blade.php ENDPATH**/ ?>