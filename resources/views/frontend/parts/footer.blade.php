<div class="rts-footer-area-start fooetr-bg-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="left-footer-wrapper-3 pt--120 pb--80">
                    <h3 class="title" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                        {!! setting('footer_description') !!}
                    </h3>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="right-footer-wrapper-3 pt--120 pb--80 pl--120 pr--120 pl_md--0 pt_md--30 pl_sm--0 pt_sm--30">
                    <div class="single-information">
                        <h5 class="title" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                            {{ setting('address_label') }}
                        </h5>
                        <a href="#" class="address" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800" style="display: block;">
                            {{ setting('address') }}
                        </a>
                        <div class="rts-social-wrapper-three">
                            <ul>
                                <li data-sal="slide-up" data-sal-delay="100" data-sal-duration="800"><a href="{{ setting('facebook_url') }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li data-sal="slide-up" data-sal-delay="100" data-sal-duration="800"><a href="{{ setting('instagram_url') }}"><i class="fa-brands fa-instagram"></i></a></li>
                                <li data-sal="slide-up" data-sal-delay="200" data-sal-duration="800"><a href="{{ setting('twitter_url') }}"><i class="fa-brands fa-twitter"></i></a></li>
                                <li data-sal="slide-up" data-sal-delay="300" data-sal-duration="800"><a href="{{ setting('youtube_url') }}"><i class="fa-brands fa-youtube"></i></a></li>
                                <li data-sal="slide-up" data-sal-delay="400" data-sal-duration="800"><a href="{{ setting('linkedin_url') }}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-information">
                        <h5 class="title" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                            {{ setting('say_hello_label') }}
                        </h5>
                        <a href="mailto:{{ setting('email') }}" class="mail" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800" style="display: block;">
                            {{ setting('email') }}
                        </a>
                        <a href="tel:{{ setting('phone') }}" class="number" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800" style="display: block;">
                            {{ setting('phone') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright-area-three">
                    <div class="menu-area-copyright">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">{{ setting('page_name_home') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('products') }}">{{ setting('page_name_products') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('services') }}">{{ setting('page_name_services') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('portfolio') }}">{{ setting('page_name_portfolio') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}">{{ setting('page_name_blog') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">{{ setting('page_name_about') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">{{ setting('page_name_contact') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
