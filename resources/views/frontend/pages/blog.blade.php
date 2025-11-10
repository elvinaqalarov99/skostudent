@extends('frontend.layouts.skostudent')

@section('title', 'Blog')

@section('content')

<!-- Start Page Title Area -->
<div id="banner" class="page-title-area position-relative z-1" data-cue="slideInUp">
    <div class="container">
        <div class="page-title-content text-center">
            <h2>Blog Grid With Right Sidebar</h2>
            <ul class="list-unstyled ps-0 mb-0">
                <li class="d-inline-block">
                    <a href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class="d-inline-block">
                    Blog
                </li>
            </ul>
        </div>
    </div>

    <div class="pages5">
        <img src="{{ asset('assets/skostudent/images/pages5.svg') }}" alt="shape">
    </div>
    <div class="pages4">
        <img src="{{ asset('assets/skostudent/images/pages4.svg') }}" alt="shape">
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Grid Area -->
<div class="blog-grid-area pt-136 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-grid-left-sidebar">
                    <div class="row"> 
                        @forelse($blogs as $blog)
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-card text-center">
                                <div class="image">
                                    <a href="{{ route('blog.detail', $blog->slug) }}">
                                        <img src="{{ $blog->getFirstMediaUrl('file') ?: asset('assets/skostudent/images/blog1.jpg') }}" alt="blog-image">
                                    </a>
                                </div>
                                <div class="list mx-auto">
                                    <ul class="list-unstyled ps-0 mb-0">
                                        <li class="d-inline-block position-relative">
                                            <a href="{{ route('blog.detail', $blog->slug) }}">
                                                {{ $blog->author ?: 'Admin' }}
                                            </a>
                                        </li>
                                        <li class="d-inline-block position-relative">
                                            <img src="{{ asset('assets/skostudent/images/calendar-icon.svg') }}" alt="icon">
                                            {{ $blog->created_at->translatedFormat('M d, Y') }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3>
                                        <a href="{{ route('blog.detail', $blog->slug) }}">
                                            {{ localized($blog->title) }}
                                        </a>
                                    </h3>
                                    <a href="{{ route('blog.detail', $blog->slug) }}" class="read-more">
                                        READ MORE
                                        <i class="ph-bold ph-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-lg-12">
                            <p class="text-center">No blog posts found.</p>
                        </div>
                        @endforelse
                    </div>
                    @if($blogs->hasPages())
                    <ul class="pagination justify-content-center">
                        {{ $blogs->links() }}
                    </ul>
                    @endif
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-grid-right-sidebar">
                    <div class="single-pages-widget form-info">
                        <form method="GET" action="{{ route('blog') }}">
                            <div class="form-group">
                                <input type="text" name="wanted" class="form-control" placeholder="Search keyword..." value="{{ request('wanted') }}">
                                <button type="submit">
                                    <img src="{{ asset('assets/skostudent/images/icon/search.svg') }}" alt="icon">
                                </button>
                            </div>
                        </form>
                    </div> 
                    <div class="single-pages-widget recent-blogs">
                        <h3>Recent Blogs</h3>
                        @foreach(\App\Models\Blog::latest()->take(3)->get() as $recent)
                        <div class="items d-flex align-items-center">
                            <div class="image">
                                <a href="{{ route('blog.detail', $recent->slug) }}">
                                    <img src="{{ $recent->getFirstMediaUrl('file') ?: asset('assets/skostudent/images/blog/blog17.jpg') }}" alt="image">
                                </a>
                            </div>
                            <div class="content">
                                <h4>
                                    <a href="{{ route('blog.detail', $recent->slug) }}">
                                        {{ localized($recent->title) }}
                                    </a>
                                </h4>
                                <a class="read-more" href="{{ route('blog.detail', $recent->slug) }}">
                                    Read More
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
<!-- End Blog Grid Area -->

@endsection
