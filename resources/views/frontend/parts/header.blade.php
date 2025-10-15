<header class="header-three header--sticky {{ url()->current() !== route('home') ? 'header--inner' : '' }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-three-wrapper">
                    <div class="logo-area">
                        <a href="{{ route('home') }}" class="thumbnail">
                            <img src="{{ setting('logo') }}" alt="logo-area">
                        </a>
                        <a href="{{ route('home') }}" class="thumbnail-2">
                            <img src="{{ setting('logo_dark') }}" alt="logo-area">
                        </a>
                    </div>
                    <!-- header style two -->
                    <!-- nav area start -->
                    <div class="main-nav-desk nav-area">
                        <nav>
                            <ul>
                                <li class="menu-item">
                                    <a class="nav-item" href="{{ route('home') }}">{{ setting('page_name_home') }}</a>
                                </li>
                                <li class="menu-item">
                                    <a class="nav-item" href="{{ route('products') }}">{{ setting('page_name_products') }}</a>
                                </li>
                                <li class="menu-item">
                                    <a class="nav-item" href="{{ route('services') }}">{{ setting('page_name_services') }}</a>
                                </li>
                                <li class="menu-item">
                                    <a class="nav-item" href="{{ route('portfolio') }}">{{ setting('page_name_portfolio') }}</a>
                                </li>
                                <li class="menu-item">
                                    <a class="nav-item" href="{{ route('blog') }}">{{ setting('page_name_blog') }}</a>
                                </li>
                                <li class="menu-item">
                                    <a class="nav-item" href="{{ route('contact') }}">{{ setting('page_name_contact') }}</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="search-language">
                        <a href="javascript:void(0)">{{ strtoupper(app()->getLocale()) }}</a>

                        <div class="search-language-dropdown">
                            @foreach (config('app.locales') as $locale)
                                @if(app()->getLocale() != $locale)
                                    <a href="{{ route('set-lang', $locale) }}">
                                        {{ strtoupper($locale) }}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <!-- nav-area end -->
                    <!-- header style two End -->
                    <div class="rts-button-area">
                        <div class="menu-area" id="menu-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                                <rect width="18" height="2" fill="#0C0A0A" />
                                <rect y="7" width="18" height="2" fill="#0C0A0A" />
                                <rect y="14" width="18" height="2" fill="#0C0A0A" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="side-bar" class="side-bar header-three">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <div class="mobile-menu d-block d-xl-none">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu" id="mobile-menu-active">
                <li>
                    <a href="{{ route('home') }}" class="main">{{ setting('page_name_home') }}</a>
                </li>
                <li>
                    <a href="{{ route('products') }}" class="main">{{ setting('page_name_products') }}</a>
                </li>
                <li>
                    <a href="{{ route('services') }}" class="main">{{ setting('page_name_services') }}</a>
                </li>
                <li>
                    <a href="{{ route('portfolio') }}" class="main">{{ setting('page_name_portfolio') }}</a>
                </li>
                <li>
                    <a href="{{ route('blog') }}" class="main">{{ setting('page_name_blog') }}</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="main">{{ setting('page_name_contact') }}</a>
                </li>
            </ul>
        </nav>

        <div class="social-wrapper-one">
            <ul>
                <li>
                    <a href="{{ setting('facebook_url') }}">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ setting('instagram_url') }}">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ setting('twitter_url') }}">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ setting('youtube_url') }}">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ setting('linkedin_url') }}">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
