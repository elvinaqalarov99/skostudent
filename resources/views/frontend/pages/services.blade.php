@extends('frontend.layouts.main')

@section('title', setting('page_name_services') !== 'page_name_services' ? setting('page_name_services') : 'Xidmətlərimiz')

@section('content')

<!-- Start Page Title Area -->
<div id="banner" class="page-title-area position-relative z-1" data-cue="slideInUp" @if(setting('services_page_banner_image')) style="background-image: url('{{ setting('services_page_banner_image') }}'); background-size: cover; background-position: center;" @endif>
    <div class="container">
        <div class="page-title-content text-center">
            <h2>Xidmətlər</h2>
            <ul class="list-unstyled ps-0 mb-0">
                <li class="d-inline-block">
                    <a href="{{ route('home') }}">
                        Ana səhifə
                    </a>
                </li>
                <li class="d-inline-block">
                    Xidmətlər
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

<!-- Start Courses Grid Area -->
<div class="courses-grid-area pt-136 pb-110">
    <div class="container"> 
        <div class="row process" data-cues="fadeIn">
            @forelse($services as $service)
            <div class="col-lg-4 col-md-6">
                <div class="single-courses-card">
                    <div class="image position-relative">
                        <a href="{{ route('services.detail', $service->slug) }}">
                            <img src="{{ $service->getFirstMediaUrl('file') ?: asset('assets/images/courses1.jpg') }}" alt="service-image">
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
                                    <img src="{{ asset('assets/images/university.svg') }}" alt="icon">
                                </div>
                                <span>Təfərrüatları Gör</span>
                            </div>
                            <div class="button">
                                <a href="{{ route('services.detail', $service->slug) }}">
                                    DAHA ÇOX OXU
                                    <i class="ph ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-lg-12">
                <p class="text-center">Xidmət tapılmadı.</p>
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
