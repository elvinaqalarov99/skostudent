@extends('frontend.layouts.main')

@section('content')


    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image" style="background-image: url({{ setting('blogs_page_banner_image') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- bread crumb inner wrapper -->
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">{{ setting('page_name_blog') }}</h1>
                        <div class="meta">
                            <a href="{{ route('home') }}" class="prev">{{ setting('page_name_home') }} /</a>
                            <a href="javascript:void(0)" class="next">{{ setting('page_name_blog') }}</a>
                        </div>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>


    <div class="rts-blog-grid-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="row g-24">
                        @foreach($blogs as $blog)
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <!-- single blog two -->
                                <div class="blog-single-two-wrapper">
                                    <div class="image-area">
                                        <a href="{{ route('blog.detail', $blog->slug) }}" class="thumbnail">
                                            <img src="{{ $blog->getFirstMediaUrl('file') }}" alt="blog-image">
                                        </a>
                                        <div class="date-area">
                                            <div class="date">
                                                <span class="day">{{ $blog->created_at?->format('d') }}</span>
                                                <span class="month">{{ $blog->created_at?->translatedFormat('F') }}</span>
                                            </div>
                                            <div class="year">
                                                <span class="year">{{ $blog->created_at?->format('Y') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner">
                                        <a href="{{ route('blog.detail', $blog->slug) }}">
                                            <h5 class="title">
                                                {{ localized($blog->title) }}
                                            </h5>
                                        </a>
                                        <a href="{{ route('blog.detail', $blog->slug) }}" class="btn-read-more-blog">{{ setting('read_details') }} <i class="fa-light fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <!-- single blog two end -->
                            </div>
                        @endforeach
                    </div>
                    <div class="row mt--30">
                        <div class="col-lg-12">
                            <div class="rts-elevate-pagination">
                                {{ $blogs->links('vendor.paginations.pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4  pd-control-bg--40">

                    <div class="rts-single-wized search">
                        <div class="wized-header">
                            <h5 class="title">
                                {{ setting('search_hear') }}
                            </h5>
                        </div>
                        <div class="wized-body">
                            <div class="rts-search-wrapper">
                                <form action="">
                                    <input class="Search" type="text" value="{{ request('wanted') }}" name="wanted" placeholder="{{ setting('enter_keyword') }}">
                                    @if(!empty(request('wanted')))
                                        <button type="button" onclick="location.href = '{{ url()->current() }}'"><i class="fal fa-times"></i></button>
                                    @else
                                        <button type="submit"><i class="fal fa-search"></i></button>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
