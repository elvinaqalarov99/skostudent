@extends('frontend.layouts.main')

@section('content')

    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image" style="background-image: url({{ $blog->getFirstMediaUrl('file') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- bread crumb inner wrapper -->
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">{{ localized($blog->title) }}</h1>
                        <div class="meta">
                            <a href="{{ route('home') }}" class="prev">{{ setting('page_name_home') }} /</a>
                            <a href="{{ route('blog') }}" class="prev">{{ setting('page_name_blog') }} /</a>
                            <a href="javascript:void(0)" class="next">{{ localized($blog->title) }}</a>
                        </div>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumba area end -->
    <!-- Bread-Crumb style two End -->


    <!-- rts blog mlist area -->
    <div class="rts-blog-list-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <!-- rts blo post area -->
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    <!-- single post -->
                    <div class="blog-single-post-listing details mb--0">
                        <div class="thumbnail">
                            <img src="{{ $blog->getFirstMediaUrl('file') }}" alt="Construction Blog">
                        </div>
                        <div class="blog-listing-content">
 
                            <div class="disc editor-contents">
                                {!! localized($blog->content) !!}
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-12 col-sm-12 col-12  pd-control-bg--40">

                    <div class="rts-single-wized Recent-post">
                        <div class="wized-header">
                            <h5 class="title">
                                Recent Posts
                            </h5>
                        </div>
                        <div class="wized-body">
                            @foreach($other_blogs as $other_blog)
                                <div class="recent-post-single">
                                    <div class="thumbnail">
                                        <a href="{{ route('blog.detail', $other_blog->slug) }}"><img src="{{ $other_blog->getFirstMediaUrl('file') }}" alt="Blog_post"></a>
                                    </div>
                                    <div class="content-area">
                                        <div class="user">
                                            <i class="fal fa-clock"></i>
                                            <span>{{ $other_blog->created_at?->translatedFormat('d F, Y') }}</span>
                                        </div>
                                        <a class="post-title" href="{{ route('blog.detail', $other_blog->slug) }}">
                                            <h6 class="title">{{ localized($other_blog->title) }}</h6>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
