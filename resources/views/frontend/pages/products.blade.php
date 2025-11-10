@extends('frontend.layouts.main')

@section('title', setting('page_name_products') !== 'page_name_products' ? setting('page_name_products') : 'Xaricdə Təhsil')

@section('content')

<!-- Start Page Title Area -->
<div id="banner" class="page-title-area position-relative z-1" data-cue="slideInUp" @if(setting('products_page_banner_image')) style="background-image: url('{{ setting('products_page_banner_image') }}'); background-size: cover; background-position: center;" @endif>
    <div class="container">
        <div class="page-title-content text-center">
            <h2>Kurslar Grid Görünüşü</h2>
            <ul class="list-unstyled ps-0 mb-0">
                <li class="d-inline-block">
                    <a href="{{ route('home') }}">
                        Ana səhifə
                    </a>
                </li>
                <li class="d-inline-block">
                    Kurslar Grid
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
            @forelse($products as $product)
            <div class="col-lg-4 col-md-6">
                <div class="single-courses-card">
                    <div class="image position-relative">
                        <a href="{{ route('products.detail', $product->slug) }}">
                            <img src="{{ $product->getFirstMediaUrl('file') ?: asset('assets/images/courses1.jpg') }}" alt="courses-image">
                        </a>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="{{ route('products.detail', $product->slug) }}">{{ localized($product->title) }}</a>
                        </h3>
                        <div class="ratings-info d-flex align-items-center">
                            <span>{{ Str::limit(strip_tags(localized($product->content_1)), 50) ?: 'descriptipon dexxdj djd asj djas jda s' }}</span>
                        </div>
                        <div class="list-info d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/university.svg') }}" alt="icon">
                                </div>
                                <span>70+ tələbə</span>
                            </div>
                            <div class="button">
                                <a href="{{ route('products.detail', $product->slug) }}">
                                    İNDİ QEYDİYYATDAN KEÇ
                                    <i class="ph ph-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-lg-12">
                <p class="text-center">Kurs tapılmadı.</p>
            </div>
            @endforelse
        </div>
        @if($products->hasPages())
        <div class="pagination-wrapper mt-4">
            {{ $products->links() }}
        </div>
        @endif
    </div>
</div>
<!-- End Courses Grid Area -->

@endsection
