    @extends('frontend.layouts.main')

@section('content')

    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image" style="background-image: url({{ $portfolio->getFirstMediaUrl('images') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- bread crumb inner wrapper -->
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">{{ localized($portfolio->title) }}</h1>
                        <div class="meta">
                            <a href="{{ route('home') }}" class="prev">{{ setting('page_name_home') }} /</a>
                            <a href="{{ route('portfolio') }}" class="prev">{{ setting('page_name_portfolio') }} /</a>
                            <a href="javascript:void(0)" class="next">{{ localized($portfolio->title) }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="rts-project-details-thumbnail rts-section-gapTop">
        <div class="container">
            <div class="row g-24 justify-content-center">
                @foreach($portfolio->getMedia('images') as $media)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <a href="#" class="thumbnail">
                            <img src="{{ $media->getUrl() }}" alt="project-area">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="rts-project-details-area pb--100 pt--25">
        <div class="container">
            <div class="row mt--70 mb--50">
                <div class="col-12">
                    <div class="product-details-main-inner" data-sal="slide-up" data-sal-delay="150" data-sal-duration="900">
                        <span>{{ localized($portfolio->type?->title) }}</span>
                        <h3 class="title animated fadeIn">{{ localized($portfolio->title) }}</h3>
                        <div class="disc editor-contents">
                            {!! localized($portfolio->content) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
