@extends('frontend.layouts.main')

@section('content')

    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image" style="background-image: url({{ setting('services_page_banner_image') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- bread crumb inner wrapper -->
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">{{ setting('page_name_services') }}</h1>
                        <div class="meta">
                            <a href="{{ route('home') }}" class="prev">{{ setting('page_name_home') }} /</a>
                            <a href="javascript:void(0)" class="next">{{ setting('page_name_services') }}</a>
                        </div>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>

    <!-- what we offer start -->
    <div class="rts-offer-provide-section rts-section-gap">
        <div class="container">
            <div class="row g-24">
                @foreach($services as $service)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- single offer area sart -->
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
                                <a href="{{ route('services.detail', $service->slug) }}" class="rts-btn btn-transparent-service">{{ setting('view_service') }}<i class="fa-light fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row mt--30">
                <div class="col-lg-12">
                    <div class="rts-elevate-pagination">
                        {{ $services->links('vendor.paginations.pagination') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- what we offer end -->


@endsection
