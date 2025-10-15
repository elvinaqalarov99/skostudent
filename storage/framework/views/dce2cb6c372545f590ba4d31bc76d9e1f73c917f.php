<?php $__env->startSection('content'); ?>

    <!-- rts banner area -->
    <div class="rts-banner-three-area rts-section-gap">
        <div class="container pt--150 pb--90">
            <div class="row">
                <div class="banner-three-wrapper">
                    <span class="pre-title"><?php echo e(setting('main_page_banner_description')); ?></span>
                    <h1 class="title">
                        <?php echo setting('main_page_banner_title'); ?>

                        <span class="strock" id="fullText" data-words="<?php echo e(setting('main_page_banner_dynamic_words')); ?>">
                            <?php echo e(setting('main_page_banner_dynamic_words')); ?>

                        </span>
                    </h1>
                </div>
            </div>
        </div>
        <div class="banner-image-area">
            <img src="<?php echo e(setting('main_page_banner_image')); ?>" alt="banner-image">
        </div>
    </div>
    <!-- rts banner area end -->

    <!-- rts about area start -->
    <div class="rts-about-area rts-section-gap3" id="about">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-5">
                    <div class="about-image-thumbnail-3">
                        <img class="image-1" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" src="<?php echo e(setting('main_page_section_1_image_1')); ?>" alt="about-image">
                        <img class="image-2" data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" src="<?php echo e(setting('main_page_section_1_image_2')); ?>" alt="about-image">
                    </div>
                </div>
                <div class="col-lg-7 pl--60 p-md-0">
                    <div class="about-three-wrapper">
                        <div class="title-three-left">
                            <div class="bg-title">
                                <?php echo e(setting('main_page_section_1_bg_title')); ?>

                            </div>
                            <span class="pre-title" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" style="display: block;">
                                <?php echo e(setting('main_page_section_1_sub_title')); ?>

                            </span>
                            <h3 class="title" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800">
                                <?php echo setting('main_page_section_1_title'); ?>

                            </h3>
                        </div>
                        <div class="rts-tab-three-start" data-sal="slide-up" data-sal-delay="400" data-sal-duration="800">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                        <?php echo e(setting('main_page_section_1_tab_1_name')); ?></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                                        <?php echo e(setting('main_page_section_1_tab_2_name')); ?></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                                        <?php echo e(setting('main_page_section_1_tab_3_name')); ?></button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <div class="single-tab-content-three">
                                        <?php echo setting('main_page_section_1_tab_1_content'); ?>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                    <div class="single-tab-content-three">
                                        <?php echo setting('main_page_section_1_tab_2_content'); ?>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                    <div class="single-tab-content-three">
                                        <?php echo setting('main_page_section_1_tab_3_content'); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about area end -->

    <!-- rts experience area start -->
    <div class="rts-experience-area rts-section-gap3 bg-experience">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="experience-main-wrapper">
                        <div class="left">
                            <h3 class="title" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                                <?php echo e(setting('main_page_section_2_title')); ?>

                            </h3>
                            <p class="disc" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                                <?php echo setting('main_page_section_2_description'); ?>

                            </p>
                        </div>
                        <div class="right" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                            <h2 class="title"><?php echo e(setting('main_page_section_2_number')); ?></h2>
                            <span><?php echo e(setting('main_page_section_2_number_sub_title')); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts experience area end -->

    <!-- our service area start -->
    <div class="rts-service-area-three rts-section-gap3">
        <div class="container pb--120">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-three-center">
                        <div class="bg-title">
                            <?php echo e(setting('main_page_section_3_bg_title')); ?>

                        </div>
                        <span class="pre-title" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                            <?php echo e(setting('main_page_section_3_sub_title')); ?>

                        </span>
                        <h3 class="title" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                            <?php echo setting('main_page_section_3_title'); ?>

                        </h3>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">

                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <!-- single service area start-->
                        <div class="rts-single-service-three" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                            <a href="<?php echo e(route('services.detail', $service->slug)); ?>" class="thumbnail-area">
                                <img src="<?php echo e($service->getFirstMediaUrl('file')); ?>" alt="Service-area">
                            </a>
                            <div class="content-area">
                                <a href="<?php echo e(route('services.detail', $service->slug)); ?>">
                                    <h5 class="title"><?php echo e(localized($service->title)); ?></h5>
                                </a>
                                <p class="disc">
                                    <?php echo e(localized($service->description)); ?>

                                </p>
                                <a href="<?php echo e(route('services.detail', $service->slug)); ?>" class="read-more-btn"><?php echo e(setting('learn_more')); ?> <i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- single service area end-->
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- our service area end -->

    <!-- rts faq area start -->
    <div class="rts-faq-area-three-start">
        <div class="container-2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-main-wrapper-three">
                        <div class="row align-items-center">
                            <div class="col-lg-6 pr--50 first-child">
                                <span class="pre-title"><?php echo e(setting('main_page_section_4_sub_title')); ?></span>
                                <h3 class="title-main"><?php echo e(setting('main_page_section_4_title')); ?></h3>
                                <div class="accordion-three" id="accordionExample">
                                    <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading-<?php echo e($faq->id); ?>">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo e($faq->id); ?>" aria-expanded="false" aria-controls="collapse-<?php echo e($faq->id); ?>">
                                                    <?php echo e(localized($faq->title)); ?>

                                                </button>
                                            </h2>
                                            <div id="collapse-<?php echo e($faq->id); ?>" class="accordion-collapse collapse" aria-labelledby="heading-<?php echo e($faq->id); ?>" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p class="disc">
                                                        <?php echo e(localized($faq->content)); ?>

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <div class="col-lg-6 pl--50 last-child">
                                <div class="thumbnail">
                                    <div class="reveal-item overflow-hidden aos-init">
                                        <div class="reveal-animation reveal-end reveal-primary aos aos-init" data-aos="reveal-end"></div>
                                        <img src="<?php echo e(setting('main_page_section_4_image')); ?>" alt="faq-area">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts faq area end -->

    <!-- rts team area start -->
    <div class="rts-section-gap3 team-3bg">
        <div class="container pt--100">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-three-center">
                        <div class="bg-title">
                            <?php echo e(setting('main_page_section_5_bg_title')); ?>

                        </div>
                        <span class="pre-title" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                            <?php echo e(setting('main_page_section_5_sub_title')); ?>

                        </span>
                        <h3 class="title" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                            <?php echo setting('main_page_section_5_title'); ?>

                        </h3>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <!-- single team one start -->
                        <div class="single-team-three">
                            
                            <div class="content-area">
                            <span class="designation">
                                <?php echo e(localized($team->position)); ?>

                            </span>
                                <a href="javascript:void(0)">
                                    <h6 class="name"><?php echo e(localized($team->name)); ?></h6>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- rts team area end -->

    <!-- rts rtsa funfacts and case studys -->
    <div class="funfacts-and-casestudy-wrapper bg_image--5 no-repeat">
        <!--<div class="funfacts-area section-bottom-seperator rts-section-gap">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-12">-->
        <!--                <div class="funfacts-three-wrapper">-->
        <!--                    <div class="single-fun-facts-three">-->
        <!--                        <div class="header-area">-->
        <!--                            <div class="logo">-->
        <!--                                <img src="<?php echo e(setting('main_page_section_6_counter_1_icon')); ?>" alt="funfacts">-->
        <!--                            </div>-->
        <!--                            <h2 class="title">-->
        <!--                                <span class="counter"><?php echo e(setting('main_page_section_6_counter_1_number')); ?></span>-->
        <!--                            </h2>-->
        <!--                        </div>-->
        <!--                        <p class="disc">-->
        <!--                            <?php echo e(setting('main_page_section_6_counter_1_description')); ?>-->
        <!--                        </p>-->
        <!--                    </div>-->
        <!--                    <div class="single-fun-facts-three">-->
        <!--                        <div class="header-area">-->
        <!--                            <div class="logo">-->
        <!--                                <img src="<?php echo e(setting('main_page_section_6_counter_2_icon')); ?>" alt="funfacts">-->
        <!--                            </div>-->
        <!--                            <h2 class="title">-->
        <!--                                <span class="counter"><?php echo e(setting('main_page_section_6_counter_2_number')); ?></span>-->
        <!--                            </h2>-->
        <!--                        </div>-->
        <!--                        <p class="disc">-->
        <!--                            <?php echo e(setting('main_page_section_6_counter_2_description')); ?>-->
        <!--                        </p>-->
        <!--                    </div>-->
        <!--                    <div class="single-fun-facts-three">-->
        <!--                        <div class="header-area">-->
        <!--                            <div class="logo">-->
        <!--                                <img src="<?php echo e(setting('main_page_section_6_counter_3_icon')); ?>" alt="funfacts">-->
        <!--                            </div>-->
        <!--                            <h2 class="title">-->
        <!--                                <span class="counter"><?php echo e(setting('main_page_section_6_counter_3_number')); ?></span>-->
        <!--                            </h2>-->
        <!--                        </div>-->
        <!--                        <p class="disc">-->
        <!--                            <?php echo e(setting('main_page_section_6_counter_3_description')); ?>-->
        <!--                        </p>-->
        <!--                    </div>-->
        <!--                    <div class="single-fun-facts-three">-->
        <!--                        <div class="header-area">-->
        <!--                            <div class="logo">-->
        <!--                                <img src="<?php echo e(setting('main_page_section_6_counter_4_icon')); ?>" alt="funfacts">-->
        <!--                            </div>-->
        <!--                            <h2 class="title">-->
        <!--                                <span class="counter"><?php echo e(setting('main_page_section_6_counter_4_number')); ?></span>-->
        <!--                            </h2>-->
        <!--                        </div>-->
        <!--                        <p class="disc">-->
        <!--                            <?php echo e(setting('main_page_section_6_counter_4_description')); ?>-->
        <!--                        </p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
        
        <div class="rts-case-study-area rts-section-gapTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-wrapper-case">
                            <div class="left-title-area-case">
                                <span class="pre-title"><?php echo e(setting('main_page_section_6_sub_title')); ?></span>
                                <h2 class="title"><?php echo e(setting('main_page_section_6_title')); ?></h2>
                            </div>
                            <div class="swiper-btn-case">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-full-screen mt--50">
                <!-- Swiper -->
                <div class="swiper case-three">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <!-- single image area start -->
                                <div class="rts-single-case-three">
                                    <div class="wrapper">
                                        <a href="<?php echo e(route('portfolio.detail', $portfolio->slug)); ?>" class="thumbnail">
                                            <img src="<?php echo e($portfolio->getFirstMediaUrl('images')); ?>" alt="product-image">
                                        </a>
                                        <div class="content">
                                            <a href="<?php echo e(route('portfolio.detail', $portfolio->slug)); ?>">
                                                <h4 class="title"><?php echo e(localized($portfolio->title)); ?></h4>
                                            </a>
                                            <p class="disc"><?php echo e(localized($portfolio->type?->title)); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- single image area end -->
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- rts rtsa funfacts and case studys end -->

    <!-- company process start -->
    <div class="rts-company-process rts-section-gap3Top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-three-left">
                        <div class="bg-title">
                            <?php echo e(setting('main_page_section_7_bg_title')); ?>

                        </div>
                        <span class="pre-title">
                            <?php echo e(setting('main_page_section_7_sub_title')); ?>

                        </span>
                        <h3 class="title">
                            <?php echo setting('main_page_section_7_title'); ?>

                        </h3>
                    </div>
                </div>
            </div>
            <!-- process wrapper start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-process-wrapper">

                        <!-- single process area start -->
                        <div class="single-working-process-three">
                            <div class="icon">
                                <img src="<?php echo e(setting('main_page_section_7_process_1_icon')); ?>" alt="">
                            </div>
                            <h5 class="title"><?php echo setting('main_page_section_7_process_1_title'); ?></h5>
                            <!--<p class="disc">-->
                            <!--    <?php echo e(setting('main_page_section_7_process_1_description')); ?>-->
                            <!--</p>-->
                        </div>
                        <!-- single process area end -->
                        <!-- single process area start -->
                        <div class="single-working-process-three">
                            <div class="icon">
                                <img src="<?php echo e(setting('main_page_section_7_process_2_icon')); ?>" alt="">
                            </div>
                            <h5 class="title"><?php echo setting('main_page_section_7_process_2_title'); ?></h5>
                            <!--<p class="disc">-->
                            <!--    <?php echo e(setting('main_page_section_7_process_2_description')); ?>-->
                            <!--</p>-->
                        </div>
                        <!-- single process area end -->
                        <!-- single process area start -->
                        <div class="single-working-process-three">
                            <div class="icon">
                                <img src="<?php echo e(setting('main_page_section_7_process_3_icon')); ?>" alt="">
                            </div>
                            <h5 class="title"><?php echo setting('main_page_section_7_process_3_title'); ?></h5>
                            <!--<p class="disc">-->
                            <!--    <?php echo e(setting('main_page_section_7_process_3_description')); ?>-->
                            <!--</p>-->
                        </div>
                        <!-- single process area end -->
                        <!-- single process area start -->
                        <div class="single-working-process-three">
                            <div class="icon">
                                <img src="<?php echo e(setting('main_page_section_7_process_4_icon')); ?>" alt="">
                            </div>
                            <h5 class="title"><?php echo setting('main_page_section_7_process_4_title'); ?></h5>
                            <!--<p class="disc">-->
                            <!--    <?php echo e(setting('main_page_section_7_process_4_description')); ?>-->
                            <!--</p>-->
                        </div>
                        <!-- single process area end -->
                    </div>

                </div>
            </div>
            <!-- process wrapper end -->
        </div>
    </div>
    <!-- company process end -->

    <!-- meet leaders area start -->
    <div class="rts-leaders-area-three rts-section-gap3">
        <div class="container">
            <div class="grid-lines-wrapper">
                <div class="grid-lines">
                    <div class="grid-line"></div>
                    <div class="grid-line two"></div>
                    <div class="grid-line three"></div>
                    <div class="grid-line four"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-three-center">
                        <div class="bg-title">
                            <?php echo e(setting('main_page_section_8_bg_title')); ?>

                        </div>
                        <span class="pre-title">
                            <?php echo e(setting('main_page_section_8_sub_title')); ?>

                        </span>
                        <h3 class="title">
                            <?php echo setting('main_page_section_8_title'); ?>

                        </h3>
                    </div>
                </div>
            </div>
            <div class="row mt--0 g-60">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <!-- single leaders area -->
                        <div class="single-leaders-area">
                            <a href="<?php echo e(route('blog.detail', $blog->slug)); ?>" class="thumbnail">
                                <img src="<?php echo e($blog->getFirstMediaUrl('file')); ?>" alt="leaders">
                            </a>
                            <div class="content-area">
                                <div class="top">
                                    <span class="date"><?php echo e($blog->created_at?->translatedFormat('d F, Y')); ?></span>
                                </div>
                                <a href="<?php echo e(route('blog.detail', $blog->slug)); ?>">
                                    <h5 class="title"><?php echo e(localized($blog->title)); ?></h5>
                                </a>
                                <a href="<?php echo e(route('blog.detail', $blog->slug)); ?>" class="rts-btn  btn-seconday"><?php echo e(setting('read_details')); ?> <i class="fa-light fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- single leaders area end -->
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- meet leaders area end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elvinaghalarov/Downloads/skostudent.regallift.az/resources/views/frontend/pages/index.blade.php ENDPATH**/ ?>