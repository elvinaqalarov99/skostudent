<?php $__env->startSection('content'); ?>

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <span class="label label-success float-right"><i class="fa fa-list-alt"></i></span>
                        <h5>Məhsullar</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins"><?php echo e(\App\Models\Product::query()->count()); ?></h1>
                        <small>Ümumi məhsul sayı</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <span class="label label-info float-right"><i class="fa fa-list-alt"></i></span>
                        <h5>Portfolio</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins"><?php echo e(\App\Models\Portfolio::query()->count()); ?></h1>
                        <small>Ümumi portfolio sayı</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <span class="label label-primary float-right"><i class="fa fa-list-alt" ></i></span>
                        <h5>Xəbərlər</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins"><?php echo e(\App\Models\Blog::query()->count()); ?></h1>
                        <small>Ümumi xəbər sayı</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <span class="label label-danger float-right"><i class="fa fa-list-alt"></i></span>
                        <h5>Xidmətlər</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins"><?php echo e(\App\Models\Service::query()->count()); ?></h1>
                        <small>Ümumi xidmət sayı</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('backend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elvinaghalarov/Downloads/skostudent.regallift.az/resources/views/backend/pages/dashboard.blade.php ENDPATH**/ ?>