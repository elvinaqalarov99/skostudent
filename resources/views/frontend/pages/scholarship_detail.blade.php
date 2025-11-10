@extends('frontend.layouts.skostudent')

@section('title', localized($scholarship->title))

@section('content')

<!-- Start Page Title Area -->
<div id="banner" class="page-title-area position-relative z-1" data-cue="slideInUp">
    <div class="container">
        <div class="page-title-content text-center">
            <h2>Course Details</h2>
            <ul class="list-unstyled ps-0 mb-0">
                <li class="d-inline-block">
                    <a href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class="d-inline-block">
                    Təqaüdlər
                </li>
            </ul>
        </div>
    </div>
    <div class="pages1">
        <img src="{{ asset('assets/skostudent/images/shapes/pages1.png') }}" alt="shape">
    </div>
    <div class="pages2">
        <img src="{{ asset('assets/skostudent/images/shapes/pages2.png') }}" alt="shape">
    </div>
    <div class="pages3">
        <img src="{{ asset('assets/skostudent/images/shapes/pages3.png') }}" alt="shape">
    </div>
    <div class="pages4">
        <img src="{{ asset('assets/skostudent/images/pages4.svg') }}" alt="shape">
    </div>
    <div class="pages5">
        <img src="{{ asset('assets/skostudent/images/pages5.svg') }}" alt="shape">
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Course Details Area -->
<div class="course-details-area pt-136 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="course-details-left-sidebar">
                    <div class="course-details-card">
                        <div class="image">
                            <img src="{{ $scholarship->getFirstMediaUrl('images') ?: asset('assets/skostudent/images/courses/courses29.jpg') }}" alt="courses-image">
                        </div>
                        <span class="science d-inline-block">{{ localized($scholarship->university) ?: 'Scholarship' }}</span>
                        <h3>{{ localized($scholarship->title) }}</h3>
                        <ul class="list-unstyled ps-0 mb-0 list">
                            <li class="d-inline-block">
                                <span>Amount:</span> {{ localized($scholarship->tuition) ?: 'Full-Tuition' }}
                            </li>
                            <li class="d-inline-block">
                                <span>Deadline:</span> {{ $scholarship->deadline?->translatedFormat('d F, Y') ?: 'N/A' }}
                            </li>
                        </ul>
                    </div>
                    <div class="tab-info">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Overview</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="overview-item">
                                    <h3>Scholarship Description</h3>
                                    <div class="editor-contents">
                                        {!! localized($scholarship->description) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="course-details-right-sidebar">
                    <div class="single-pages-widget free-info">
                        <h2>{{ localized($scholarship->tuition) ?: 'Full-Tuition' }}</h2>
                        <a href="{{ route('contact') }}" class="default-btn2 style-3"> 
                            Apply Now
                            <img src="{{ asset('assets/skostudent/images/left-small.svg') }}" alt="icon">
                        </a>
                        <ul class="list-unstyled ps-0 list d-flex align-items-center justify-content-between">
                            <li class="d-inline-block">
                                University
                            </li>
                            <li class="d-inline-block">
                                <span>{{ localized($scholarship->university) ?: 'N/A' }}</span>
                            </li>
                        </ul>
                        <ul class="list-unstyled ps-0 list d-flex align-items-center justify-content-between">
                            <li class="d-inline-block">
                                Deadline
                            </li>
                            <li class="d-inline-block">
                                <span>{{ $scholarship->deadline?->translatedFormat('d M Y') ?: 'N/A' }}</span>
                            </li>
                        </ul>
                    </div>
                    @if($other_scholarships->count() > 0)
                    <div class="single-pages-widget courses-info">
                        <h3>Related Scholarships</h3>
                        @foreach($other_scholarships->take(3) as $other)
                        <div class="items d-flex align-items-center">
                            <div class="image">
                                <img src="{{ $other->getFirstMediaUrl('images') ?: asset('assets/skostudent/images/courses/courses32.jpg') }}" alt="courses-image">
                            </div>
                            <div class="content">
                                <h6>
                                    <a href="{{ route('scholarship.detail', $other->slug) }}">{{ localized($other->title) }}</a>
                                </h6>
                                <span>{{ localized($other->tuition) ?: 'Full-Tuition' }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Course Details Area -->

@endsection
