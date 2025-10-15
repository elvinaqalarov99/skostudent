@extends('frontend.layouts.main')

@section('content')

    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image" style="background-image: url({{ $service->getFirstMediaUrl('file') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">{{ localized($service->title) }}</h1>
                        <div class="meta">
                            <a href="{{ route('home') }}" class="prev">{{ setting('page_name_home') }} /</a>
                            <a href="{{ route('services') }}" class="prev">{{ setting('page_name_services') }} /</a>
                            <a href="javascript:void(0)" class="next">{{ localized($service->title) }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="rts-service-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-4 col-md-12 col-sm-12 col-12 sd-pad-r">
                    <div class="rts-single-wized Categories">
                        <div class="wized-header">
                            <h5 class="title">
                                {{ setting('page_name_services') }}
                            </h5>
                        </div>
                        <div class="wized-body">
                            @foreach($other_services as $other_service)
                                <ul class="single-categories">
                                    <li><a href="{{ route('services.detail', $other_service->slug) }}">{{ localized($other_service->title) }} <i class="far fa-long-arrow-right"></i></a></li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-md-12 col-sm-12 col-12 plr_sm--20">
                    <div class="service-detials-step-1">
                        <div class="thumbnail">
                            <img src="{{ $service->getFirstMediaUrl('file') }}" alt="elevate-area">
                        </div>
                        <h4 class="title">{{ localized($service->title) }}</h4>
                        <div class="disc editor-contents">
                            {!! localized($service->content_1) !!}
                        </div>
                        <div class="row g-5 mt--30 mb--40">
                            <div class="col-lg-6">
                                <!-- single service details card -->
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="{{ setting('service_detail_page_box_icon_1') }}" alt="" class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">{!! setting('service_detail_page_box_title_1') !!}</h6> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="{{ setting('service_detail_page_box_icon_2') }}" alt="" class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">{!! setting('service_detail_page_box_title_2') !!}</h6> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="{{ setting('service_detail_page_box_icon_3') }}" alt="" class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">{!! setting('service_detail_page_box_title_3') !!}</h6> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="service-details-card">
                                    <div class="thumbnail">
                                        <img src="{{ setting('service_detail_page_box_icon_4') }}" alt="" class="icon">
                                    </div>
                                    <div class="details">
                                        <h6 class="title">{!! setting('service_detail_page_box_title_4') !!}</h6> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="disc editor-contents">
                            {!! localized($service->content_2) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
