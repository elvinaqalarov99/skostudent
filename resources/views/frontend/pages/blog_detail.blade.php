@extends('frontend.layouts.main')

@section('title', localized($blog->title))

@section('content')

<!-- Start Page Title Area -->
<div id="banner" class="page-title-area position-relative z-1" data-cue="slideInUp">
    <div class="container">
        <div class="page-title-content text-center">
            <h2>Bloq Standart</h2>
            <ul class="list-unstyled ps-0 mb-0">
                <li class="d-inline-block">
                    <a href="{{ route('home') }}">
                        Ana səhifə
                    </a>
                </li>
                <li class="d-inline-block">
                    Bloq
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

<!-- Start Blog Grid Area -->
<div class="blog-grid-area pt-136 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-grid-left-sidebar">
                    <div class="blog-details-info">
                        <div class="image">
                            <img src="{{ $blog->getFirstMediaUrl('file') ?: asset('assets/images/blog1.jpg') }}" alt="blog-image">
                        </div>
                        <div class="content">
                            <ul class="list-unstyled ps-0 list">
                                <li class="d-inline-block position-relative">
                                    {{ $blog->author ?: 'Admin' }}
                                    <img src="{{ asset('assets/images/black-logo.svg') }}" alt="icon">
                                </li>
                                <li class="d-inline-block position-relative">
                                    {{ $blog->created_at->translatedFormat('d M, y') }}
                                    <img src="{{ asset('assets/images/calendar-icon.svg') }}" alt="icon">
                                </li>
                                <li class="d-inline-block position-relative">
                                    3 Dəq Oxuma
                                    <img src="{{ asset('assets/images/user-icon.svg') }}" alt="icon">
                                </li>
                            </ul>
                            <h2>{{ localized($blog->title) }}</h2>
                            <div class="editor-contents">
                                {!! localized($blog->content) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-grid-right-sidebar">
                    <div class="single-pages-widget form-info">
                        <form method="GET" action="{{ route('blog') }}">
                            <div class="form-group">
                                <input type="text" name="wanted" class="form-control" placeholder="Axtarış açar sözü..." value="{{ request('wanted') }}">
                                <button type="submit">
                                    <img src="{{ asset('assets/images/message-icon.svg') }}" alt="icon">
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="single-pages-widget recent-blogs">
                        <h3>Son Bloglar</h3>
                        @foreach($other_blogs->take(3) as $other)
                        <div class="items d-flex align-items-center">
                            <div class="image">
                                <a href="{{ route('blog.detail', $other->slug) }}">
                                    <img src="{{ $other->getFirstMediaUrl('file') ?: asset('assets/images/blog1.jpg') }}" alt="image">
                                </a>
                            </div>
                            <div class="content">
                                <h4>
                                    <a href="{{ route('blog.detail', $other->slug) }}">
                                        {{ localized($other->title) }}
                                    </a>
                                </h4>
                                <a class="read-more" href="{{ route('blog.detail', $other->slug) }}">
                                    Daha çox oxu
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
