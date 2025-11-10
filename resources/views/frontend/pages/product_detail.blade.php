@extends('frontend.layouts.main')

@section('title', localized($product->title))

@section('content')

<!-- Start Page Title Area -->
<div id="banner" class="page-title-area position-relative z-1" data-cue="slideInUp">
    <div class="container">
        <div class="page-title-content text-center">
            <h2>Kurs Təfərrüatları</h2>
            <ul class="list-unstyled ps-0 mb-0">
                <li class="d-inline-block">
                    <a href="{{ route('home') }}">
                        Ana səhifə
                    </a>
                </li>
                <li class="d-inline-block">
                    Kurs Təfərrüatları
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

<!-- Start Course Details Area -->
<div class="course-details-area pt-136 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="course-details-left-sidebar">
                    <div class="course-details-card">
                        <div class="image">
                            <img src="{{ $product->getFirstMediaUrl('file') ?: asset('assets/images/courses1.jpg') }}" alt="courses-image">
                        </div>
                        <span class="science d-inline-block">{{ localized($product->title) }}</span>
                        <h3>{{ localized($product->title) }}</h3>
                    </div>
                    <div class="tab-info">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Ümumi Baxış</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="overview-item">
                                    <h3>Kurs Təsviri</h3>
                                    <div class="editor-contents">
                                        {!! localized($product->content_1) !!}
                                    </div>
                                    @if(localized($product->content_2))
                                    <div class="editor-contents mt-4">
                                        {!! localized($product->content_2) !!}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="course-details-right-sidebar">
                    <div class="single-pages-widget free-info">
                        <h2>Pulsuz</h2>
                        <a href="{{ route('contact') }}" class="default-btn2 style-3"> 
                            İndi Qeydiyyatdan Keç
                            <img src="{{ asset('assets/images/left-small.svg') }}" alt="icon">
                        </a>
                    </div>
                    @if($related_products->count() > 0)
                    <div class="single-pages-widget courses-info">
                        <h3>Əlaqəli Kurslar</h3>
                        @foreach($related_products->take(3) as $related)
                        <div class="items d-flex align-items-center">
                            <div class="image">
                                <img src="{{ $related->getFirstMediaUrl('file') ?: asset('assets/images/courses1.jpg') }}" alt="courses-image">
                            </div>
                            <div class="content">
                                <h6>
                                    <a href="{{ route('products.detail', $related->slug) }}">{{ localized($related->title) }}</a>
                                </h6>
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
