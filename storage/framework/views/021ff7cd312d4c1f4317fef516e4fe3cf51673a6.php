<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message">Xoş gəldiniz <?php echo e(auth('admins')->user()->name); ?></span>
            </li>
            <li>
                <a href="<?php echo e(route('admin.logout')); ?>">
                    <i class="fa fa-sign-out"></i> Çıxış
                </a>
            </li>
        </ul>

    </nav>
</div>
<?php /**PATH /Users/elvinaghalarov/Downloads/skostudent.regallift.az/resources/views/backend/parts/header.blade.php ENDPATH**/ ?>