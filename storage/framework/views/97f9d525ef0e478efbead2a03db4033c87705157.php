<header class="header-three header--sticky <?php echo e(url()->current() !== route('home') ? 'header--inner' : ''); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-three-wrapper">
                    <div class="logo-area">
                        <a href="<?php echo e(route('home')); ?>" class="thumbnail">
                            <img src="<?php echo e(setting('logo')); ?>" alt="logo-area">
                        </a>
                        <a href="<?php echo e(route('home')); ?>" class="thumbnail-2">
                            <img src="<?php echo e(setting('logo_dark')); ?>" alt="logo-area">
                        </a>
                    </div>
                    <!-- header style two -->
                    <!-- nav area start -->
                    <div class="main-nav-desk nav-area">
                        <nav>
                            <ul>
                                <li class="menu-item">
                                    <a class="nav-item" href="<?php echo e(route('home')); ?>"><?php echo e(setting('page_name_home')); ?></a>
                                </li>
                                <li class="menu-item">
                                    <a class="nav-item" href="<?php echo e(route('products')); ?>"><?php echo e(setting('page_name_products')); ?></a>
                                </li>
                                <li class="menu-item">
                                    <a class="nav-item" href="<?php echo e(route('services')); ?>"><?php echo e(setting('page_name_services')); ?></a>
                                </li>
                                <li class="menu-item">
                                    <a class="nav-item" href="<?php echo e(route('portfolio')); ?>"><?php echo e(setting('page_name_portfolio')); ?></a>
                                </li>
                                <li class="menu-item">
                                    <a class="nav-item" href="<?php echo e(route('blog')); ?>"><?php echo e(setting('page_name_blog')); ?></a>
                                </li>
                                <li class="menu-item">
                                    <a class="nav-item" href="<?php echo e(route('contact')); ?>"><?php echo e(setting('page_name_contact')); ?></a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="search-language">
                        <a href="javascript:void(0)"><?php echo e(strtoupper(app()->getLocale())); ?></a>

                        <div class="search-language-dropdown">
                            <?php $__currentLoopData = config('app.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(app()->getLocale() != $locale): ?>
                                    <a href="<?php echo e(route('set-lang', $locale)); ?>">
                                        <?php echo e(strtoupper($locale)); ?>

                                    </a>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <!-- nav-area end -->
                    <!-- header style two End -->
                    <div class="rts-button-area">
                        <div class="menu-area" id="menu-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                                <rect width="18" height="2" fill="#0C0A0A" />
                                <rect y="7" width="18" height="2" fill="#0C0A0A" />
                                <rect y="14" width="18" height="2" fill="#0C0A0A" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="side-bar" class="side-bar header-three">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <div class="mobile-menu d-block d-xl-none">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu" id="mobile-menu-active">
                <li>
                    <a href="<?php echo e(route('home')); ?>" class="main"><?php echo e(setting('page_name_home')); ?></a>
                </li>
                <li>
                    <a href="<?php echo e(route('products')); ?>" class="main"><?php echo e(setting('page_name_products')); ?></a>
                </li>
                <li>
                    <a href="<?php echo e(route('services')); ?>" class="main"><?php echo e(setting('page_name_services')); ?></a>
                </li>
                <li>
                    <a href="<?php echo e(route('portfolio')); ?>" class="main"><?php echo e(setting('page_name_portfolio')); ?></a>
                </li>
                <li>
                    <a href="<?php echo e(route('blog')); ?>" class="main"><?php echo e(setting('page_name_blog')); ?></a>
                </li>
                <li>
                    <a href="<?php echo e(route('contact')); ?>" class="main"><?php echo e(setting('page_name_contact')); ?></a>
                </li>
            </ul>
        </nav>

        <div class="social-wrapper-one">
            <ul>
                <li>
                    <a href="<?php echo e(setting('facebook_url')); ?>">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(setting('instagram_url')); ?>">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(setting('twitter_url')); ?>">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(setting('youtube_url')); ?>">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(setting('linkedin_url')); ?>">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH /Users/elvinaghalarov/Downloads/skostudent.regallift.az/resources/views/frontend/parts/header.blade.php ENDPATH**/ ?>