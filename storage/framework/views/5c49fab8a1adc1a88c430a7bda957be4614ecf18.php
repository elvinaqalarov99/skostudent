<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="logo-element d-block">
                    MG
                </div>
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold"><?php echo e(auth('admins')->user()->name); ?></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="<?php echo e(route('admin.profile')); ?>">Profil</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?php echo e(route('admin.logout')); ?>">Çıxış</a></li>
                    </ul>
                </div>
            </li>
            <li class="<?php echo e(url()->current() == route('admin.dashboard') ? "active" : ''); ?>">
                <a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>

            <li class="<?php echo e(url()->current() == route('admin.blogs.index') ? "active" : ''); ?>">
                <a href="<?php echo e(route('admin.blogs.index')); ?>"><i class="fa fa-list-alt"></i>  <span
                        class="nav-label">Blogs</span></a>
            </li>

            <li class="<?php echo e(url()->current() == route('admin.products.index') ? "active" : ''); ?>">
                <a href="<?php echo e(route('admin.products.index')); ?>"><i class="fa fa-list-alt"></i>  <span
                        class="nav-label">Products</span></a>
            </li>

            <li class="<?php echo e(url()->current() == route('admin.services.index') ? "active" : ''); ?>">
                <a href="<?php echo e(route('admin.services.index')); ?>"><i class="fa fa-list-alt"></i>  <span
                        class="nav-label">Services</span></a>
            </li>

            <li class="<?php echo e(url()->current() == route('admin.portfolio_types.index') ? "active" : ''); ?>">
                <a href="<?php echo e(route('admin.portfolio_types.index')); ?>"><i class="fa fa-list-alt"></i>  <span
                        class="nav-label">Portfolio types</span></a>
            </li>

            <li class="<?php echo e(url()->current() == route('admin.portfolios.index') ? "active" : ''); ?>">
                <a href="<?php echo e(route('admin.portfolios.index')); ?>"><i class="fa fa-list-alt"></i>  <span
                        class="nav-label">Portfolios</span></a>
            </li>

            <li class="<?php echo e(url()->current() == route('admin.teams.index') ? "active" : ''); ?>">
                <a href="<?php echo e(route('admin.teams.index')); ?>"><i class="fa fa-list-alt"></i>  <span
                        class="nav-label">Teams (Home Page)</span></a>
            </li>

            <li class="<?php echo e(url()->current() == route('admin.faqs.index') ? "active" : ''); ?>">
                <a href="<?php echo e(route('admin.faqs.index')); ?>"><i class="fa fa-list-alt"></i>  <span
                        class="nav-label">FAQ (Home Page)</span></a>
            </li>

            <li class="<?php echo e(url()->current() == route('admin.features.index') ? "active" : ''); ?>">
                <a href="<?php echo e(route('admin.features.index')); ?>"><i class="fa fa-list-alt"></i>  <span
                        class="nav-label">Features (About Page)</span></a>
            </li>

            <li class="<?php echo e(url()->current() == route('admin.admins.index') ? "active" : ''); ?>">
                <a href="<?php echo e(route('admin.admins.index')); ?>"><i class="fa fa-users"></i> <span class="nav-label">İdarəçilər</span></a>
            </li>

            <li class="<?php echo e(url()->current() == route('admin.settings.index') ? "active" : ''); ?>">
                <a href="<?php echo e(route('admin.settings.index')); ?>"><i class="fa fa-cog"></i> <span
                        class="nav-label">Tənzimləmələr</span></a>
            </li>
        </ul>

    </div>
</nav>
<?php /**PATH /Users/elvinaghalarov/Downloads/skostudent.regallift.az/resources/views/backend/parts/aside.blade.php ENDPATH**/ ?>