@extends('frontend.layouts.main')

@section('title', localized($portfolio->title))

@section('content')

<!-- Start Page Title Area -->
<div id="banner" class="page-title-area position-relative z-1" data-cue="slideInUp">
    <div class="container">
        <div class="page-title-content text-center">
            <h2>{{ localized($portfolio->title) }}</h2>
            <ul class="list-unstyled ps-0 mb-0">
                <li class="d-inline-block">
                    <a href="{{ route('home') }}">
                        Ana səhifə
                    </a>
                </li>
                <li class="d-inline-block">
                    <a href="{{ route('portfolio') }}">
                        Qalereya
                    </a>
                </li>
                <li class="d-inline-block">
                    {{ localized($portfolio->title) }}
                </li>
            </ul>
        </div>
    </div>
    <div class="pages4">
        <img src="{{ asset('assets/images/pages4.svg') }}" alt="shape">
    </div>
    <div class="pages5">
        <img src="{{ asset('assets/images/pages5.svg') }}" alt="shape">
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Portfolio Details Area -->
<div class="course-details-area pt-136 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="course-details-left-sidebar">
                    <div class="course-details-card">
                        @if($portfolio->getFirstMediaUrl('images'))
                        <div class="image">
                            <img src="{{ $portfolio->getFirstMediaUrl('images') }}" alt="{{ localized($portfolio->title) }}">
                        </div>
                        @endif
                        @if($portfolio->type)
                        <span class="science d-inline-block">{{ localized($portfolio->type->title) }}</span>
                        @endif
                        <h3>{{ localized($portfolio->title) }}</h3>
                    </div>
                    
                    @if($portfolio->getMedia('images')->count() > 1)
                    <div class="portfolio-gallery mt-4">
                        <h3 class="mb-4">Qalereya</h3>
                        <div class="row" data-cues="fadeIn">
                            @foreach($portfolio->getMedia('images')->skip(1) as $media)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="portfolio-image-item">
                                    <img src="{{ $media->getUrl() }}" alt="{{ localized($portfolio->title) }}" class="img-fluid">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    
                    @if(localized($portfolio->content))
                    <div class="tab-info mt-4">
                        <div class="overview-item">
                            <h3>Təsvir</h3>
                            <div class="editor-contents">
                                {!! localized($portfolio->content) !!}
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Portfolio Details Area -->

@endsection
