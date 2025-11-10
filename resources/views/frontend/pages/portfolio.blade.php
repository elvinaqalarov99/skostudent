@extends('frontend.layouts.skostudent')

@section('title', 'Qalereya')

@section('content')

<!-- Start Page Title Area -->
<div id="banner" class="page-title-area position-relative z-1" data-cue="slideInUp">
    <div class="container">
        <div class="page-title-content text-center">
            <h2>Qalereya</h2>
            <ul class="list-unstyled ps-0 mb-0">
                <li class="d-inline-block">
                    <a href="{{ route('home') }}">
                        Ana səhifə
                    </a>
                </li>
                <li class="d-inline-block">
                    Qalereya
                </li>
            </ul>
        </div>
    </div>
    <div class="pages5">
        <img src="{{ asset('assets/images/pages5.svg') }}" alt="shape">
    </div>
    <div class="pages4">
        <img src="{{ asset('assets/images/pages4.svg') }}" alt="shape">
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Team Area -->
<div class="team-area pt-136 pb-110">
    <div class="container">
        <div class="row align-items-center justify-content-center" data-cues="fadeIn">
            @forelse($portfolios as $portfolio)
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-card position-relative">
                    <div class="image">
                        <a href="{{ route('portfolio.detail', $portfolio->slug) }}">
                            <img src="{{ $portfolio->getFirstMediaUrl('images') ?: asset('assets/images/team1.jpg') }}" alt="portfolio-image">
                        </a>
                    </div>
                    <div class="content text-center">
                        <h3>
                            <a href="{{ route('portfolio.detail', $portfolio->slug) }}">
                                {{ localized($portfolio->title) }}
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-lg-12">
                <p class="text-center">Portfolio elementi tapılmadı.</p>
            </div>
            @endforelse
        </div>
        @if($portfolios->hasPages())
        <div class="pagination-wrapper mt-4 text-center">
            {{ $portfolios->links() }}
        </div>
        @endif
    </div>
</div>
<!-- End Team Area -->

@endsection
