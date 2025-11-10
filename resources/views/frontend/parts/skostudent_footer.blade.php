<div id="footer">
    <footer class="footer-area position-relative z-1 pt-136 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="single-footer-widget logo-info" data-cue="slideInUp">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/black-logo.svg') }}" alt="logo">
                        </a>
                    </div>
                    <p>
                        Lorem ipsum amet, consectetur adipiscing elit.
                        Suspendis varius enim eros elementum tristique.
                        Duis cursus.
                    </p>
                    <a href="mailto:themeies3@gmail.com" class="email">
                        support.skostudent@email.com
                    </a>
                    <ul class="list-unstyled ps-0 mb-0 social-link">
                        <li class="d-inline-block">
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="https://x.com/home" target="_blank">
                                <i class="ri-twitter-x-fill"></i>
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="https://www.google.com/" target="_blank">
                                <i class="ri-google-fill"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 col-md-3">
                <div class="single-footer-widget links-info" data-cue="slideInUp">
                    <h3>Keçidlər</h3>
                    <ul class="list-unstyled ps-0 mb-0">
                        <li>
                            <a href="{{ route('home') }}"> Ana səhifə </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}"> Haqqımızda </a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}"> Kurslar </a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}"> Kurs Təfərrüatları </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}"> Bizimlə Əlaqə </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3">
                <div class="single-footer-widget links-info" data-cue="slideInUp">
                    <h3>Hüquqi</h3>
                    <ul class="list-unstyled ps-0 mb-0">
                        <li>
                            <a href="{{ route('blog') }}"> İstifadə Şərtləri </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}"> Şərtlər və Qaydalar </a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}"> Ödəniş Metodu </a>
                        </li>
                        <li>
                            <a href="{{ route('privacy') }}"> Məxfilik Siyasəti </a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}"> Lisenziya </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget app-info" data-cue="slideInUp">
                    <h3>Tətbiqimizi Yükləyin</h3>
                    <span>App Store və ya Google Play-dən</span>
                    <ul class="list-unstyled ps-0 mb-0">
                        <li class="d-inline-block">
                            <a href="https://play.google.com/store/games?device=windows&pli=1" target="_blank">
                                <img src="{{ asset('assets/images/google.svg') }}" alt="google">
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="https://www.apple.com/app-store/" target="_blank">
                                <img src="{{ asset('assets/images/app-store.svg') }}" alt="app-store">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="shapes">
        <div class="shape12">
            <img src="{{ asset('assets/images/shape12.svg') }}" alt="shape">
        </div>
        <div class="shape13">
            <img src="{{ asset('assets/images/shape13.svg') }}" alt="shape">
        </div>
        <div class="shape14">
            <img src="{{ asset('assets/images/shape14.svg') }}" alt="shape">
        </div>
    </div>
</footer>

<div class="copyright-area position-relative z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-5">
                <div class="copyright-content" data-cue="slideInUp">
                    <p>
                        © Copyright 2025 | Skostudent.az | All Rights Reserved
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="copyright-list" data-cue="slideInUp">
                    <ul class="list-unstyled ps-0 mb-0">
                        <li class="d-inline-block">
                            <a href="{{ route('about') }}" class="active">
                                Şirkət
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="mailto:{{ setting('email') !== 'email' ? setting('email') : 'themeies3@gmail.com' }}">
                                Dəstək
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="{{ route('privacy') }}"> Məxfilik </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="{{ route('contact') }}"> Əlaqə </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="icon-info">
        <a href="#banner">
            <img src="{{ asset('assets/images/up-icon.svg') }}" alt="icon">
        </a>
    </div>
    </div>
</div>

