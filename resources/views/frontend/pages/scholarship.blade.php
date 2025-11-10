@extends('frontend.layouts.main')

@section('title', 'Təqaüdlər')

@section('content')

<!-- Start Page Title Area -->
<div id="banner" class="page-title-area position-relative z-1" data-cue="slideInUp">
    <div class="container">
        <div class="page-title-content text-center">
            <h2>Təqaüdlər</h2>
            <ul class="list-unstyled ps-0 mb-0">
                <li class="d-inline-block">
                    <a href="{{ route('home') }}">
                        Ana səhifə
                    </a>
                </li>
                <li class="d-inline-block">
                    Təqaüdlər
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
        <div class="pages-grid-list-info">
            <div class="row">
                <div class="col-lg-6 col-sm-7">
                    <div class="items" data-cue="slideInUp">
                        <form method="GET" action="{{ route('scholarship') }}" class="d-flex">
                            <input type="text" name="search" class="form-control" placeholder="Axtar..." value="{{ request('search') }}">
                            <button type="submit" class="btn btn-primary ms-2">Axtar</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-5">
                    <div class="items" data-cue="slideInUp">
                        <select class="form-select ms-auto" aria-label="Default select example" onchange="window.location.href=this.value">
                            <option value="{{ route('scholarship') }}?sort=popularity" {{ request('sort') == 'popularity' ? 'selected' : '' }}>Sırala: Populyarlıq</option>
                            <option value="{{ route('scholarship') }}?sort=deadline" {{ request('sort') == 'deadline' ? 'selected' : '' }}>Sırala: Son Tarix</option>
                            <option value="{{ route('scholarship') }}?sort=university" {{ request('sort') == 'university' ? 'selected' : '' }}>Sırala: Universitet</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row process" data-cues="fadeIn">
            @forelse($scholarships as $scholarship)
            <div class="col-lg-6">
                <div class="single-courses-info d-flex align-items-center position-relative z-1">
                    <div class="image">
                        <a href="{{ route('scholarship.detail', $scholarship->slug) }}">
                            <img src="{{ $scholarship->getFirstMediaUrl('images') ?: asset('assets/images/courses1.jpg') }}" alt="scholarship-image">
                        </a>
                    </div>
                    <div class="content">
                        <div class="star-icon d-flex align-items-center justify-content-between">
                            <span>Məbləğ: {{ localized($scholarship->tuition) }}</span> 
                        </div>
                        <h3>
                            <a href="{{ route('scholarship.detail', $scholarship->slug) }}">{{ localized($scholarship->title) }}</a>
                        </h3>
                        <ul class="list-unstyled ps-0 mb-0 list d-flex align-items-center justify-content-between">
                            <li>
                                Son Tarix: {{ $scholarship->deadline?->translatedFormat('d M Y') }}
                            </li>
                            <li>
                                <a href="{{ route('scholarship.detail', $scholarship->slug) }}">Daha çox oxu</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-lg-12">
                <p class="text-center">Təqaüd tapılmadı.</p>
            </div>
            @endforelse
        </div>
        @if($scholarships->hasPages())
        <div class="pagination-wrapper mt-4">
            {{ $scholarships->links() }}
        </div>
        @endif
    </div>
</div>
<!-- End Courses Grid Area -->

@endsection
