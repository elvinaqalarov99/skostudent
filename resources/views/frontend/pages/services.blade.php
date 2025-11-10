@extends('frontend.layouts.skostudent')

@section('title', 'Xidmətlərimiz')

@section('content')

<!-- Start Page Title Area -->
<div id="banner" class="page-title-area position-relative z-1" data-cue="slideInUp">
    <div class="container">
        <div class="page-title-content text-center">
            <h2>Services</h2>
            <ul class="list-unstyled ps-0 mb-0">
                <li class="d-inline-block">
                    <a href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class="d-inline-block">
                    Services
                </li>
            </ul>
        </div>
    </div> 
    
    <div class="pages5">
        <img src="{{ asset('assets/skostudent/images/pages5.svg') }}" alt="shape">
    </div>
    <div class="pages4">
        <img src="{{ asset('assets/skostudent/images/pages4.svg') }}" alt="shape">
    </div> 
</div>
<!-- End Page Title Area -->

<!-- Start Courses Grid Area -->
<div class="courses-grid-area pt-136 pb-110">
    <div class="container"> 
        <div class="row process" data-cues="fadeIn">
            @forelse($services as $service)
            <div class="col-lg-4 col-md-6">
                <div class="single-courses-card">
                    <div class="image position-relative">
                        <a href="{{ route('services.detail', $service->slug) }}">
                            <img src="{{ $service->getFirstMediaUrl('file') ?: asset('assets/skostudent/images/courses1.jpg') }}" alt="service-image">
                        </a>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="{{ route('services.detail', $service->slug) }}">{{ localized($service->title) }}</a>
                        </h3>
                        <div class="ratings-info d-flex align-items-center">
                            <span>{{ Str::limit(strip_tags(localized($service->content)), 50) }}</span>
                        </div>
                        <div class="list-info d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center">
                                <div class="icon">
                                    <img src="{{ asset('assets/skostudent/images/university.svg') }}" alt="icon">
                                </div>
                                <span>View Details</span>
                            </div>
                            <div class="button">
                                <a href="{{ route('services.detail', $service->slug) }}">
                                    READ MORE
                                    <i class="ph ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-lg-12">
                <p class="text-center">No services found.</p>
            </div>
            @endforelse
        </div>
        @if($services->hasPages())
        <div class="pagination-wrapper mt-4">
            {{ $services->links() }}
        </div>
        @endif
    </div>
</div>
<!-- End Courses Grid Area -->

@endsection
