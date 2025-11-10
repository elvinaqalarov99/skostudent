@extends('frontend.layouts.skostudent')

@section('title', 'Haqqımızda')

@section('content')

<!-- Start Page Title Area -->
<div id="banner" class="page-title-area position-relative z-1" data-cue="slideInUp">
    <div class="container">
        <div class="page-title-content text-center">
            <h2>About Us</h2>
            <ul class="list-unstyled ps-0 mb-0">
                <li class="d-inline-block">
                    <a href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class="d-inline-block">
                    About Us
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

<!-- Start About Area -->
<div class="about-area style-2 pt-136 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-image style-2" data-cue="slideInUp">
                    <div class="image-one text-end">
                        <img src="{{ asset('assets/skostudent/images/about/about5.jpg') }}" alt="about-image">
                    </div>
                    <div class="image-two">
                        <img src="{{ asset('assets/skostudent/images/about/about6.jpg') }}" alt="about-image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content style-2" data-cue="slideInUp">
                    <div class="section-title">
                        <span class="d-inline-block sub-title">About Skostudent</span>
                        <h2>
                            Discover Our Vision for Digital 
                            <span class="position-relative">
                                Education
                                <img src="{{ asset('assets/skostudent/images/title-shape.svg') }}" alt="shape">
                            </span>
                        </h2>
                    </div>
                    <div class="awards-info">
                        <div class="row">
                            <div class="col-lg-7 col-sm-7">
                                <div class="awards-list">
                                    <ul class="list-unstyled ps-0 mb-0">
                                        @foreach($features->take(5) as $feature)
                                        <li>
                                            {{ localized($feature->title) }}
                                            <img src="{{ asset('assets/skostudent/images/about/check.svg') }}" alt="icon">
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-5">
                                <div class="awards-card text-center">
                                    <div class="icon">
                                        <img src="{{ asset('assets/skostudent/images/about/awards-logo.svg') }}" alt="logo">
                                    </div>
                                    <h3>25+</h3>
                                    <p>Winning Awards</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->

<!-- Start Choose Area -->
<div class="choose-area position-relative z-1 pt-136">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="choose-content" data-cue="slideInUp">
                    <div class="section-title">
                        <span class="d-inline-block sub-title">Why Choose Us</span>
                        <h2>
                            One Platform & Many  
                            <span class="position-relative">
                                Courses
                                <img src="{{ asset('assets/skostudent/images/title-shape.svg') }}" alt="shape">
                            </span>
                            For You
                        </h2>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-image position-relative z-1" data-cue="slideInUp">
                    <img src="{{ asset('assets/skostudent/images/choose/choose1.png') }}" alt="choose-image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Choose Area -->

<!-- Start Funfact Area -->
<div class="funfact-area position-relative z-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="single-funfact-info">
                    <div class="image">
                        <img src="{{ asset('assets/skostudent/images/funfact/funfact1.jpg') }}" alt="funfact-image">
                    </div>
                    <div class="content d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('assets/skostudent/images/icon/funfact1.svg') }}" alt="icon">
                        </div>
                        <div class="text">
                            <h3>
                                <span class="counter">75K</span>
                                +
                            </h3>
                            <p>Enrolled Students</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-funfact-info">
                    <div class="image">
                        <img src="{{ asset('assets/skostudent/images/funfact/funfact1.jpg') }}" alt="funfact-image">
                    </div>
                    <div class="content d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('assets/skostudent/images/icon/funfact2.svg') }}" alt="icon">
                        </div>
                        <div class="text">
                            <h3>
                                <span class="counter">324</span>
                                +
                            </h3>
                            <p>Enrolled Students</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-funfact-info">
                    <div class="image">
                        <img src="{{ asset('assets/skostudent/images/funfact/funfact1.jpg') }}" alt="funfact-image">
                    </div>
                    <div class="content d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('assets/skostudent/images/icon/funfact3.svg') }}" alt="icon">
                        </div>
                        <div class="text">
                            <h3>
                                <span class="counter">22</span>
                                K+
                            </h3>
                            <p>Certified Students</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-funfact-info">
                    <div class="image">
                        <img src="{{ asset('assets/skostudent/images/funfact/funfact1.jpg') }}" alt="funfact-image">
                    </div>
                    <div class="content d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('assets/skostudent/images/icon/funfact4.svg') }}" alt="icon">
                        </div>
                        <div class="text">
                            <h3>
                                <span class="counter">30</span>
                                +
                            </h3>
                            <p>Skilled Instructor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Funfact Area -->

<!-- Start Testimonials Area -->
<div class="testimonial-area pt-136 pb-110">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="testimonial-image position-relative z-1" data-cue="slideInUp">
                    <div class="image position-relative z-1">
                        <img src="{{ asset('assets/skostudent/images/testimonial/bg-shape.svg') }}" alt="shape">
                        <img class="main-image" src="{{ asset('assets/skostudent/images/testimonial/testimonial1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-content" data-cue="slideInUp">
                    <div class="section-title">
                        <span class="d-inline-block sub-title">Testimonials</span>
                        <h2>
                            Voices of Success: Hear from Our
                            <span class="position-relative">
                                Students
                                <img src="{{ asset('assets/skostudent/images/title-shape.svg') }}" alt="shape">
                            </span>
                        </h2>
                    </div>
                    <div class="testimonial-slider-info owl-carousel owl-theme">
                        @for($i = 1; $i <= 3; $i++)
                        <div class="item">
                            <p>Enrolling in courses at Skostudent was the best decision I made for my career. The instructors were incredibly knowledgeable and supportive, guiding me through every step of the learning process.</p>
                            <div class="users-info d-flex align-items-center">
                                <div class="image">
                                    <img src="{{ asset('assets/skostudent/images/testimonial/testimonial6.jpg') }}" alt="testimonial-image">
                                </div>
                                <div class="content">
                                    <h3>Krystal France</h3>
                                    <span>Ex-Student</span>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials Area -->

<!-- Start Team Area -->
<div class="team-area style-2 position-relative z-1 pt-136 pb-110">
    <div class="container">
        <div class="section-title text-center mx-auto" data-cue="slideInUp">
            <span class="d-inline-block sub-title">Team Members</span>
            <h2>
                Meet Out 
                <span class="position-relative">
                    Instructors
                    <img src="{{ asset('assets/skostudent/images/title-shape.svg') }}" alt="shape">
                </span>
            </h2>
        </div>
        <div class="row" data-cues="fadeIn">
            @foreach($services->take(4) as $service)
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-info">
                    <div class="content">
                        <h3>{{ localized($service->title) }}</h3>
                        <p>Service</p>
                    </div>
                    <div class="image position-relative">
                        <img src="{{ $service->getFirstMediaUrl('file') ?: asset('assets/skostudent/images/team/team4.jpg') }}" alt="team-image">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Team Area -->

@endsection
