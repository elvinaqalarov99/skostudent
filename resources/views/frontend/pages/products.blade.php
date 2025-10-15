@extends('frontend.layouts.main')

@section('content')

    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image" style="background-image: url({{ setting('products_page_banner_image') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- bread crumb inner wrapper -->
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">{{ setting('page_name_products') }}</h1>
                        <div class="meta">
                            <a href="{{ route('home') }}" class="prev">{{ setting('page_name_home') }} /</a>
                            <a href="javascript:void(0)" class="next">{{ setting('page_name_products') }}</a>
                        </div>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>

    <div class="rts-blog-grid-area rts-section-gap">
        <div class="container">
            <div class="row g-24">
                @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <!-- single blog two -->
                        <div class="blog-single-two-wrapper shop">
                            <div class="image-area">
                                <a href="{{ route('products.detail', $product->slug) }}" class="thumbnail">
                                    <img src="{{ $product->getFirstMediaUrl('images') }}" alt="image">
                                </a>
                            </div>
                            {{-- <div class="inner">
                                <a href="{{ route('products.detail', $product->slug) }}">
                                    <h5 class="title">{{ localized($product->title) }}</h5>
                                </a>
                            </div> --}}
                        </div>
                        <!-- single blog two end -->
                    </div>
                @endforeach
            </div>

            <div class="row mt--30">
                <div class="col-lg-12">
                    <div class="rts-elevate-pagination">
                        {{ $products->links('vendor.paginations.pagination') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
