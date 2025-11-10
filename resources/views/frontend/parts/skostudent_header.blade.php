<div id="header">
    <div class="navbar-area fixed-top">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/black-logo.svg') }}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand me-0" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/black-logo.svg') }}" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="dropdown-toggle nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                                Ana səhifə
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('products') }}" class="dropdown-toggle nav-link {{ request()->routeIs('products*') ? 'active' : '' }}">
                                Xaricdə Təhsil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('services') }}" class="dropdown-toggle nav-link {{ request()->routeIs('services*') ? 'active' : '' }}">
                                Xidmətlərimiz
                            </a>
                            <ul class="dropdown-menu">
                                @foreach(\App\Models\Service::take(3)->get() as $service)
                                <li class="nav-item">
                                    <a href="{{ route('services.detail', $service->slug) }}" class="nav-link">
                                        {{ localized($service->title) }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('scholarship') }}" class="dropdown-toggle nav-link {{ request()->routeIs('scholarship*') ? 'active' : '' }}">
                                Təqaüdlər
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog') }}" class="dropdown-toggle nav-link {{ request()->routeIs('blog*') ? 'active' : '' }}">
                                Bloq
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="dropdown-toggle nav-link {{ request()->routeIs('about*') ? 'active' : '' }}">
                                Haqqımızda
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('portfolio') }}" class="nav-link">
                                        Qalereya
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="dropdown-toggle nav-link {{ request()->routeIs('contact*') ? 'active' : '' }}">
                                Əlaqə
                            </a>
                        </li>
                    </ul>
                    <div class="others-option position-relative d-flex align-items-center">
                        <div class="option-item">
                            <a href="{{ route('contact') }}" class="default-btn2">
                                Müraciət Et
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options justify-content-center d-flex align-items-center">
                        <div class="option-item">
                            <a href="{{ route('contact') }}" class="default-btn2">
                                Müraciət Et
                                <img src="{{ asset('assets/images/left-small.svg') }}" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

