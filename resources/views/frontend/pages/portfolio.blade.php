@extends('frontend.layouts.main')

@section('content')

    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image" style="background-image: url({{ setting('portfolio_page_banner_image') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- bread crumb inner wrapper -->
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">{{ setting('page_name_portfolio') }}</h1>
                        <div class="meta">
                            <a href="{{ route('home') }}" class="prev">{{ setting('page_name_home') }} /</a>
                            <a href="javascript:void(0)" class="next">{{ setting('page_name_portfolio') }}</a>
                        </div>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumba area end -->
    <!-- Bread-Crumb style two End -->


    <!--rts projects area start -->
    <div class="rts-projects-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- projecta area tabs start -->
                    <div class="projects-wrapper-inner-page">
                        <ul class="nav nav-tabs mb--20" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="{{ url()->current() }}" class="nav-link" aria-selected="{{ url()->full() === url()->current() ? 'true' : 'false' }}">All</a>
                            </li>
                            @foreach($types as $type)
                                <li class="nav-item" role="presentation">
                                    <a href="{{ route('portfolio', ['tab'=>$type->slug]) }}" class="nav-link" aria-selected="{{ url()->full() === route('portfolio', ['tab'=>$type->slug]) ? 'true' : 'false' }}">{{ localized($type->title) }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="row g-24 mb--25">

                            @foreach($portfolios as $portfolio)
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="single-case-wrapper">
                                        <a href="{{ route('portfolio.detail', $portfolio->slug) }}">
                                            <img class="main-2" src="{{ $portfolio->getFirstMediaUrl('images') }}" alt="projects-images">
                                        </a>
                                        <div class="content">
                                            {{-- <a href="{{ route('portfolio.detail', $portfolio->slug) }}">
                                                <h5 class="title">{{ localized($portfolio->type?->title) }}</h5>
                                            </a> --}}
                                            <h5 class="title">{{ localized($portfolio->title) }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="row mt--30">
                            <div class="col-lg-12">
                                <div class="rts-elevate-pagination">
                                    {{ $portfolios->links('vendor.paginations.pagination') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- projecta area tabs end -->
                </div>
            </div>
        </div>
    </div>

@endsection
