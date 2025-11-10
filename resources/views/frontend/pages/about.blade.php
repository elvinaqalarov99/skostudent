@extends('frontend.layouts.skostudent')

@section('title', setting('page_name_about') !== 'page_name_about' ? setting('page_name_about') : 'Haqqımızda')

@section('content')

<!-- Start Page Title Area -->
<div id="banner" class="page-title-area position-relative z-1" data-cue="slideInUp" @if(setting('about_page_banner_image')) style="background-image: url('{{ setting('about_page_banner_image') }}'); background-size: cover; background-position: center;" @endif>
    <div class="container">
        <div class="page-title-content text-center">
            <h2>Haqqımızda</h2>
            <ul class="list-unstyled ps-0 mb-0">
                <li class="d-inline-block">
                    <a href="{{ route('home') }}">
                        Ana səhifə
                    </a>
                </li>
                <li class="d-inline-block">
                    Haqqımızda
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

<!-- Start About Area -->
<div class="about-area style-2 pt-136 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-image style-2" data-cue="slideInUp">
                    <div class="image-one text-end">
                        <img src="{{ $about && $about->getMedia('file')->count() > 0 ? $about->getMedia('file')->first()->getUrl() : asset('assets/images/about1.jpg') }}" alt="about-image">
                    </div>
                    @if($about && $about->getMedia('file')->count() > 1)
                    <div class="image-two">
                        <img src="{{ $about->getMedia('file')->skip(1)->first()->getUrl() }}" alt="about-image">
                    </div>
                    @else
                    <div class="image-two">
                        <img src="{{ asset('assets/images/about2.jpg') }}" alt="about-image">
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content style-2" data-cue="slideInUp">
                    <div class="section-title">
                        <span class="d-inline-block sub-title">{{ $about && localized($about->short_info) ? \Illuminate\Support\Str::limit(localized($about->short_info), 30) : 'Skostudent Haqqında' }}</span>
                        <h2>
                            @if($about && localized($about->vision))
                                {{ localized($about->vision) }}
                            @else
                                Discover Our Vision for Digital 
                                <span class="position-relative">
                                    Education
                                    <img src="{{ asset('assets/images/title-shape.svg') }}" alt="shape">
                                </span>
                            @endif
                        </h2>
                    </div>
                    @if($about && localized($about->short_info))
                    <p class="mb-4">{{ localized($about->short_info) }}</p>
                    @endif
                    @if($about && localized($about->mission))
                    <div class="mb-4">
                        <h4>Missiyamız</h4>
                        <p>{{ localized($about->mission) }}</p>
                    </div>
                    @endif
                    @if($about && localized($about->vision))
                    <div class="mb-4">
                        <h4>Vizyonumuz</h4>
                        <p>{{ localized($about->vision) }}</p>
                    </div>
                    @endif
                    @if($about && localized($about->values))
                    <div class="mb-4">
                        <h4>Dəyərlərimiz</h4>
                        <p>{{ localized($about->values) }}</p>
                    </div>
                    @endif
                    <div class="awards-info">
                        <div class="row">
                            <div class="col-lg-7 col-sm-7">
                                <div class="awards-list">
                                    <ul class="list-unstyled ps-0 mb-0">
                                        @foreach($features->take(5) as $feature)
                                        <li>
                                            {{ localized($feature->title) }}
                                            <img src="{{ asset('assets/images/title-shape.svg') }}" alt="icon">
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-5">
                                <div class="awards-card text-center">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/black-logo.svg') }}" alt="logo">
                                    </div>
                                    <h3>{{ $about && $about->scholarship_count ? $about->scholarship_count . '+' : '25+' }}</h3>
                                    <p>Qazandığımız Mükafatlar</p>
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
                        <span class="d-inline-block sub-title">Niyə Bizi Seçməlisiniz</span>
                        <h2>
                            Bir Platforma & Çoxlu  
                            <span class="position-relative">
                                Kurslar
                                <img src="{{ asset('assets/images/title-shape.svg') }}" alt="shape">
                            </span>
                            Sizin Üçün
                        </h2>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-image position-relative z-1" data-cue="slideInUp">
                    <img src="{{ asset('assets/images/choose1.png') }}" alt="choose-image">
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
                        <img src="{{ asset('assets/images/testimonial1.jpg') }}" alt="funfact-image">
                    </div>
                    <div class="content d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/user-icon.svg') }}" alt="icon">
                        </div>
                        <div class="text">
                            <h3>
                                <span class="counter" data-count="{{ $about && $about->student_count ? $about->student_count : 75000 }}">{{ $about && $about->student_count ? number_format($about->student_count) : '75K' }}</span>
                                @if(!$about || !$about->student_count || $about->student_count < 1000)
                                +
                                @endif
                            </h3>
                            <p>Qeydiyyatdan Keçən Tələbələr</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-funfact-info">
                    <div class="image">
                        <img src="{{ asset('assets/images/testimonial2.jpg') }}" alt="funfact-image">
                    </div>
                    <div class="content d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/user-icon2.svg') }}" alt="icon">
                        </div>
                        <div class="text">
                            <h3>
                                <span class="counter" data-count="{{ $about && $about->university_count ? $about->university_count : 324 }}">{{ $about && $about->university_count ? $about->university_count : '324' }}</span>
                                +
                            </h3>
                            <p>Universitetlər</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-funfact-info">
                    <div class="image">
                        <img src="{{ asset('assets/images/testimonial3.jpg') }}" alt="funfact-image">
                    </div>
                    <div class="content d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/user-icon3.svg') }}" alt="icon">
                        </div>
                        <div class="text">
                            <h3>
                                <span class="counter" data-count="{{ $about && $about->scholarship_count ? $about->scholarship_count : 22000 }}">{{ $about && $about->scholarship_count ? number_format($about->scholarship_count) : '22K' }}</span>
                                @if(!$about || !$about->scholarship_count || $about->scholarship_count < 1000)
                                +
                                @endif
                            </h3>
                            <p>Təqaüdlər</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-funfact-info">
                    <div class="image">
                        <img src="{{ asset('assets/images/testimonial4.jpg') }}" alt="funfact-image">
                    </div>
                    <div class="content d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/user-icon.svg') }}" alt="icon">
                        </div>
                        <div class="text">
                            <h3>
                                <span class="counter" data-count="{{ $about && $about->country_count ? $about->country_count : 30 }}">{{ $about && $about->country_count ? $about->country_count : '30' }}</span>
                                +
                            </h3>
                            <p>Ölkələr</p>
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
                        <img src="{{ asset('assets/images/bg-shape.svg') }}" alt="shape">
                        <img class="main-image" src="{{ asset('assets/images/testimonial1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-content" data-cue="slideInUp">
                    <div class="section-title">
                        <span class="d-inline-block sub-title">Rəylər</span>
                        <h2>
                            Uğurun Səsləri: Tələbələrimizdən
                            <span class="position-relative">
                                Eşidin
                                <img src="{{ asset('assets/images/title-shape.svg') }}" alt="shape">
                            </span>
                        </h2>
                    </div>
                    <div class="testimonial-slider-info owl-carousel owl-theme">
                        @for($i = 1; $i <= 3; $i++)
                        <div class="item">
                            <p>Skostudent-də kurslara qeydiyyatdan keçmək karyeram üçün verdiyim ən yaxşı qərardır. Müəllimlər inanılmaz dərəcədə bilikli və dəstəkçi idilər, məni öyrənmə prosesinin hər addımında rəhbərlik edirdilər.</p>
                            <div class="users-info d-flex align-items-center">
                                <div class="image">
                                    <img src="{{ asset('assets/images/testimonial6.jpg') }}" alt="testimonial-image">
                                </div>
                                <div class="content">
                                    <h3>Krystal France</h3>
                                    <span>Keçmiş Tələbə</span>
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
            <span class="d-inline-block sub-title">Komanda Üzvləri</span>
            <h2>
                Müəllimlərimizlə 
                <span class="position-relative">
                    Tanış Olun
                    <img src="{{ asset('assets/images/title-shape.svg') }}" alt="shape">
                </span>
            </h2>
        </div>
        <div class="row" data-cues="fadeIn">
            @foreach($services->take(4) as $service)
            <div class="col-lg-3 col-sm-6">
                <div class="single-team-info">
                    <div class="content">
                        <h3>{{ localized($service->title) }}</h3>
                        <p>Xidmət</p>
                    </div>
                    <div class="image position-relative">
                        <img src="{{ $service->getFirstMediaUrl('file') ?: asset('assets/images/team1.jpg') }}" alt="team-image">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Team Area -->

@endsection
