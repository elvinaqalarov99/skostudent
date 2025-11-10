<div id="footer">
    <footer class="footer-area position-relative z-1 pt-136 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="single-footer-widget logo-info" data-cue="slideInUp">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/skostudent/images/black-logo.svg') }}" alt="logo">
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
                    <h3>Links</h3>
                    <ul class="list-unstyled ps-0 mb-0">
                        <li>
                            <a href="{{ route('home') }}"> Home </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}"> About Us </a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}"> Courses </a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}"> Courses Details </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}"> Contact Us </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3">
                <div class="single-footer-widget links-info" data-cue="slideInUp">
                    <h3>Legal</h3>
                    <ul class="list-unstyled ps-0 mb-0">
                        <li>
                            <a href="{{ route('blog') }}"> Trems of Use </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}"> Tearm & Condition </a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}"> Payment Method </a>
                        </li>
                        <li>
                            <a href="{{ route('privacy') }}"> Privacy Policy </a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}"> Licensencing </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget app-info" data-cue="slideInUp">
                    <h3>Install Our App</h3>
                    <span>From App Store Or Google Play</span>
                    <ul class="list-unstyled ps-0 mb-0">
                        <li class="d-inline-block">
                            <a href="https://play.google.com/store/games?device=windows&pli=1" target="_blank">
                                <img src="{{ asset('assets/skostudent/images/google.svg') }}" alt="google">
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="https://www.apple.com/app-store/" target="_blank">
                                <img src="{{ asset('assets/skostudent/images/app-store.svg') }}" alt="app-store">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="shapes">
        <div class="shape12">
            <img src="{{ asset('assets/skostudent/images/shape12.svg') }}" alt="shape">
        </div>
        <div class="shape13">
            <img src="{{ asset('assets/skostudent/images/shape13.svg') }}" alt="shape">
        </div>
        <div class="shape14">
            <img src="{{ asset('assets/skostudent/images/shape14.svg') }}" alt="shape">
        </div>
    </div>
</footer>

<div class="copyright-area position-relative z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-5">
                <div class="copyright-content" data-cue="slideInUp">
                    <p>
                        © Copyright 2024 | Skostudent Template | All Rights Reserved
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="copyright-list" data-cue="slideInUp">
                    <ul class="list-unstyled ps-0 mb-0">
                        <li class="d-inline-block">
                            <a href="{{ route('about') }}" class="active">
                                Company
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="mailto:{{ setting('email') !== 'email' ? setting('email') : 'themeies3@gmail.com' }}">
                                Support
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="{{ route('privacy') }}"> Privacy </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="{{ route('contact') }}"> Contact </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="icon-info">
        <a href="#banner">
            <img src="{{ asset('assets/skostudent/images/up-icon.svg') }}" alt="icon">
        </a>
    </div>
    </div>
</div>

