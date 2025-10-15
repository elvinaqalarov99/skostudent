@extends('frontend.layouts.main')

@section('content')


    <!-- Bread-Crumb style two -->
    <!-- rts breadcrumba area start -->
    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image" style="background-image: url({{ setting('about_page_banner_image') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- bread crumb inner wrapper -->
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">{{ setting('page_name_about') }}</h1>
                        <div class="meta">
                            <a href="{{ route('home') }}" class="prev">{{ setting('page_name_home') }} /</a>
                            <a href="javascript:void(0)" class="next">{{ setting('page_name_about') }}</a>
                        </div>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumba area end -->
    <!-- Bread-Crumb style two End -->

    <!-- rts about area start -->
    <div class="rts-about-area-about rts-section-gap">
        <div class="container pb--45 plr_sm--15">
            <div class="row">
                <div class="col-lg-5">
                    <div class="thumbnail-area-about">
                        <img src="{{ setting('about_page_section_1_image_1') }}" alt="about-area">
                        <img src="{{ setting('about_page_section_1_image_2') }}" alt="about-sm" class="small">
                    </div>
                </div>
                <div class="col-lg-7 about-a-p-cont">
                    <div class="about-inner-wrapper-inner">
                        <div class="title-three-left">
                            <span class="pre-title" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" style="display: block;">
                                {{ setting('about_page_section_1_sub_title') }}
                            </span>
                            <h3 class="title" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800">
                                {!! setting('about_page_section_1_title') !!}
                            </h3>
                        </div>
                        <div class="main-content-area-about-p">
                            {!! setting('about_page_section_1_content') !!}

                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-text">
                <h2 class="title">{{ setting('about_page_section_1_bg_title') }}</h2>
            </div>
        </div>
    </div>
    <!-- rts about area end -->

    <!-- rts service area start -->
    <div class="service-abot-area rts-section-gap service-about-bg bg_image">
        <div class="container-210">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-12  plr-sm">
                    <div class="thumbnail-service-about">
                        <img src="{{ setting('about_page_section_2_image') }}" alt="service-image">
                        <div class="vedio-icone">
                            <a id="play-video" class="video-play-button" href="#" data-video-url="{{ setting('about_page_section_2_video_id') }}">
                                <span></span>
                            </a>
                            <div id="video-overlay" class="video-overlay">
                                <a class="video-overlay-close">×</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 pading-controler">
                    <div class="service-about-wrapper">
                        <div class="title-three-left">
                            <span class="pre-title" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" style="display: block;">
                                {{ setting('about_page_section_2_sub_title') }}
                            </span>
                            <h3 class="title" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800">
                                {!! setting('about_page_section_2_title') !!}
                            </h3>
                        </div>
                        <div class="row mt--15 g-24">
                            @foreach($features as $feature)
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="single-service-sm">
                                        <div class="icon">
                                            <img src="{{ $feature->getFirstMediaUrl('file') }}" alt="">
                                        </div>
                                        <p>{{ localized($feature->title) }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-offer-provide-section rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-mid-wrapper-home-two" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                        <span class="pre">{{ setting('about_page_section_3_sub_title') }}</span>
                        <h2 class="title">{!! setting('about_page_section_3_title') !!}</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--15 g-24">
                @foreach($services as $service)
                    <div class="col-lg-4">

                        <div class="rts-single-offer">
                            <a href="{{ route('services.detail', $service->slug) }}" class="thumbnail">
                                <img src="{{ $service->getFirstMediaUrl('file') }}" alt="service">
                            </a>
                            <div class="content-wrapper">
                                <a href="{{ route('services.detail', $service->slug) }}">
                                    <h5 class="title">
                                        {{ localized($service->title) }}
                                    </h5>
                                </a>
                                <p class="disc">
                                    {{ localized($service->description) }}
                                </p>
                                <a href="{{ route('services.detail', $service->slug) }}" class="rts-btn btn-transparent-service">{{ setting('view_services') }}<i class="fa-light fa-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="rts-about-fun-facts rts-section-gap bg_about-f">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-fun-facts-wrapper">

                        <div class="single-funfacts-about">
                            <div class="top">
                                <div class="icon">
                                    <img src="{{ setting('main_page_section_6_counter_1_icon') }}" alt="fun-facts">
                                </div>
                                <h2 class="title"><span class="counter">{{ setting('main_page_section_6_counter_1_number') }}</span></h2>
                            </div>
                            <p class="disc">
                                {{ setting('main_page_section_6_counter_1_description') }}
                            </p>
                        </div>

                        <div class="single-funfacts-about">
                            <div class="top">
                                <div class="icon">
                                    <img src="{{ setting('main_page_section_6_counter_2_icon') }}" alt="fun-facts">
                                </div>
                                <h2 class="title percent"><span class="counter">{{ setting('main_page_section_6_counter_2_number') }}</span></h2>
                            </div>
                            <p class="disc">
                                {{ setting('main_page_section_6_counter_2_description') }}
                            </p>
                        </div>

                        <div class="single-funfacts-about">
                            <div class="top">
                                <div class="icon">
                                    <img src="{{ setting('main_page_section_6_counter_3_icon') }}" alt="fun-facts">
                                </div>
                                <h2 class="title plus"><span class="counter">{{ setting('main_page_section_6_counter_3_number') }}</span></h2>
                            </div>
                            <p class="disc">
                                {{ setting('main_page_section_6_counter_3_description') }}
                            </p>
                        </div>

                        <div class="single-funfacts-about">
                            <div class="top">
                                <div class="icon">
                                    <img src="{{ setting('main_page_section_6_counter_4_icon') }}" alt="fun-facts">
                                </div>
                                <h2 class="title plus"><span class="counter">{{ setting('main_page_section_6_counter_4_number') }}</span></h2>
                            </div>
                            <p class="disc">
                                {{ setting('main_page_section_6_counter_4_description') }}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
