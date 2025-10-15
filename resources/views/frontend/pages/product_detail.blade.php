@extends('frontend.layouts.main')

@section('content')

    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image" style="background-image: url({{ $product->getFirstMediaUrl('images') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- bread crumb inner wrapper -->
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">{{ localized($product->title) }}</h1>
                        <div class="meta">
                            <a href="{{ route('home') }}" class="prev">{{ setting('page_name_home') }} /</a>
                            <a href="{{ route('products') }}" class="prev">{{ setting('page_name_products') }} /</a>
                            <a href="javascript:void(0)" class="next">{{ localized($product->title) }}</a>
                        </div>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumba area end -->
    <!-- Bread-Crumb style two End -->


    <main class="ms-main">
        <div class="container">
            <div id="primary" class="content-area single-product">
                <div class="site-main">
                    <div class="woocommerce-notices-wrapper"></div>
                    <div id="product-470" class="ms-single-product product type-product post-470 status-publish first instock product_cat-run product_tag-life product_tag-move product_tag-sport product_tag-trainers has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="banner-horizental" data-sal="slide-up" data-sal-delay="150" data-sal-duration="900">
                                    <div class="swiper swiper-container-h1">
                                        <div class="swiper-wrapper">
                                            @foreach($product->getMedia('images') as $media)
                                                <div class="swiper-slide">
                                                    <div class="slider-inner">
                                                        <img src="{{ $media->getUrl() }}" alt="full_screen-image">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ms-single-product__content" data-sal="slide-up" data-sal-delay="350" data-sal-duration="900">
                                    <h2 class="ms-single-product_title">{{ localized($product->title) }}</h2>

                                    <div class="woocommerce-product-details__short-description editor-contents">
                                        {!! localized($product->content_1) !!}
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12 tab-area rts-section-gap pt-0 editor-contents">
                                {!! localized($product->content_2) !!}
                            </div>

                            <section class="related products">
                                <h2 data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">{{ setting('related_products') }}</h2>
                                <div class="row ms-woo-feed" data-sal="slide-up" data-sal-delay="150" data-sal-duration="900">
                                    @foreach($related_products as $related_product)
                                        <div class="col-lg-3 col-md-6">
                                            <div class="blog-single-two-wrapper shop">
                                                <div class="image-area">
                                                    <a href="{{ route('products.detail', $related_product->slug) }}" class="thumbnail">
                                                        <img src="{{ $related_product->getFirstMediaUrl('images') }}" alt="blog-image">
                                                    </a>
                                                </div>
                                                <div class="inner">
                                                    <a href="{{ route('products.detail', $related_product->slug) }}">
                                                        <h5 class="title"> {{ localized($related_product->title) }}</h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
