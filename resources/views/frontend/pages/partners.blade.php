@extends('frontend.layouts.main')

@section('title', setting('page_name_partners') !== 'page_name_partners' ? setting('page_name_partners') : 'Tərəfdaşlarımız')

@section('content')

<!-- Start Page Title Area -->
<div id="banner" class="page-title-area position-relative z-1" data-cue="slideInUp" @if(setting('partners_page_banner_image')) style="background-image: url('{{ setting('partners_page_banner_image') }}'); background-size: cover; background-position: center;" @endif>
    <div class="container">
        <div class="page-title-content text-center">
            <h2>Tərəfdaşlarımız</h2>
            <ul class="list-unstyled ps-0 mb-0">
                <li class="d-inline-block">
                    <a href="{{ route('home') }}">
                        Ana səhifə
                    </a>
                </li>
                <li class="d-inline-block">
                    Tərəfdaşlarımız
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

<!-- Start Partners Area -->
<div class="partner-area pt-136 pb-110">
    <div class="container">
        @if($partners->count() > 0)
        <div class="row" data-cues="fadeIn">
            @foreach($partners as $partner)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="single-partner-logo text-center">
                    @if($partner->link)
                    <a href="{{ $partner->link }}" target="_blank" rel="noopener noreferrer" class="d-block">
                        <img
                            src="{{ $partner->getFirstMediaUrl('file') ?: asset('assets/images/partner1.png') }}"
                            alt="{{ localized($partner->title) }}"
                            class="img-fluid"
                        >
                        @if(localized($partner->title))
                        <h4 class="mt-3 mb-0">{{ localized($partner->title) }}</h4>
                        @endif
                    </a>
                    @else
                    <div class="d-block">
                        <img
                            src="{{ $partner->getFirstMediaUrl('file') ?: asset('assets/images/partner1.png') }}"
                            alt="{{ localized($partner->title) }}"
                            class="img-fluid"
                        >
                        @if(localized($partner->title))
                        <h4 class="mt-3 mb-0">{{ localized($partner->title) }}</h4>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination-wrapper text-center mt-5">
            {{ $partners->links() }}
        </div>
        @else
        <div class="text-center" data-cue="slideInUp">
            <p class="text-center">Tərəfdaş tapılmadı.</p>
        </div>
        @endif
    </div>
</div>
<!-- End Partners Area -->

@endsection

