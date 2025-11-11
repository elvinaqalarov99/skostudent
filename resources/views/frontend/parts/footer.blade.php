<div id="footer">
    <footer class="footer-area position-relative z-1 pt-136 pb-110" style="background-color: var(--whiteColor);">
    <div class="container">
        <div class="row">
            <!-- Column 1: Logo and Company Info -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="single-footer-widget logo-info" data-cue="slideInUp">
                    <div class="logo mb-3">
                        <a href="{{ route('home') }}">
                            @if(setting('logo'))
                            <img src="{{ setting('logo') }}" alt="{{ setting('site_name', 'Skostudent') }}" style="max-height: 60px;">
                            @else
                            <div class="d-flex align-items-center">
                                <span style="font-size: 32px; font-weight: 700; color: #3E4095; font-family: var(--headingFontFamily);">SKO</span>
                                <span style="font-size: 14px; color: #555; margin-left: 5px;">Student</span>
                            </div>
                            @endif
                        </a>
                    </div>
                    @if(setting('footer_description') && setting('footer_description') !== 'footer_description')
                    <p style="color: #555; font-size: 16px; line-height: 1.6; margin-bottom: 20px;">{!! setting('footer_description') !!}</p>
                    @else
                    <p style="color: #555; font-size: 16px; line-height: 1.6; margin-bottom: 20px;">
                        Consulting is a dynamic and multifaceted field that involves providing expert advice and guidance to individuals,
                    </p>
                    @endif
                    <ul class="list-unstyled ps-0 mb-0 social-link d-flex align-items-center" style="gap: 10px;">
                        @if(setting('facebook_url') && setting('facebook_url') !== 'facebook_url')
                        <li class="d-inline-block">
                            <a href="{{ setting('facebook_url') }}" target="_blank" style="width: 40px; height: 40px; border-radius: 50%; background-color: #1877F2; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none;">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        @endif
                        @if(setting('instagram_url') && setting('instagram_url') !== 'instagram_url')
                        <li class="d-inline-block">
                            <a href="{{ setting('instagram_url') }}" target="_blank" style="width: 40px; height: 40px; border-radius: 8px; background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); display: flex; align-items: center; justify-content: center; color: white; text-decoration: none;">
                                <i class="ri-instagram-fill"></i>
                            </a>
                        </li>
                        @endif
                        @if(setting('whatsapp_url') && setting('whatsapp_url') !== 'whatsapp_url')
                        <li class="d-inline-block">
                            <a href="{{ setting('whatsapp_url') }}" target="_blank" style="width: 40px; height: 40px; border-radius: 50%; background-color: #25D366; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none;">
                                <i class="ri-whatsapp-fill"></i>
                            </a>
                        </li>
                        @elseif(setting('phone') && setting('phone') !== 'phone')
                        <li class="d-inline-block">
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', setting('phone')) }}" target="_blank" style="width: 40px; height: 40px; border-radius: 50%; background-color: #25D366; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none;">
                                <i class="ri-whatsapp-fill"></i>
                            </a>
                        </li>
                        @endif
                        @if(setting('youtube_url') && setting('youtube_url') !== 'youtube_url')
                        <li class="d-inline-block">
                            <a href="{{ setting('youtube_url') }}" target="_blank" style="width: 40px; height: 40px; border-radius: 4px; background-color: #FF0000; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none;">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>

            <!-- Column 2: Navigation Links -->
            <div class="col-lg-2 col-md-6 col-sm-6 mb-4 mb-lg-0">
                <div class="single-footer-widget links-info" data-cue="slideInUp">
                    <h3 style="color: var(--blackColor); font-size: 20px; font-weight: 700; margin-bottom: 20px;">Keçidlər</h3>
                    <ul class="list-unstyled ps-0 mb-0">
                        <li style="margin-bottom: 12px;">
                            <a href="{{ route('about') }}" style="color: #070707; font-size: 16px; font-weight: 700; text-decoration: none; transition: color 0.3s; font-family: var(--fontFamily);"> Haqqımızda </a>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <a href="{{ route('products') }}" style="color: #070707; font-size: 16px; font-weight: 700; text-decoration: none; transition: color 0.3s; font-family: var(--fontFamily);"> Xaricdə Təhsil </a>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <a href="{{ route('services') }}" style="color: #070707; font-size: 16px; font-weight: 700; text-decoration: none; transition: color 0.3s; font-family: var(--fontFamily);"> Xidmətlərimiz </a>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <a href="{{ route('scholarship') }}" style="color: #070707; font-size: 16px; font-weight: 700; text-decoration: none; transition: color 0.3s; font-family: var(--fontFamily);"> Təqaüdlər </a>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <a href="{{ route('blog') }}" style="color: #070707; font-size: 16px; font-weight: 700; text-decoration: none; transition: color 0.3s; font-family: var(--fontFamily);"> Bloq </a>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <a href="{{ route('contact') }}" style="color: #070707; font-size: 16px; font-weight: 700; text-decoration: none; transition: color 0.3s; font-family: var(--fontFamily);"> Əlaqə </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Column 3: Services -->
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-lg-0">
                <div class="single-footer-widget links-info" data-cue="slideInUp">
                    <h3 style="color: var(--blackColor); font-size: 20px; font-weight: 700; margin-bottom: 20px;">Xidmətlərimiz</h3>
                    <ul class="list-unstyled ps-0 mb-0">
                        @php
                            $footerServices = \App\Models\Service::take(6)->get();
                        @endphp
                        @forelse($footerServices as $service)
                        <li style="margin-bottom: 12px;">
                            <a href="{{ route('services.detail', $service->slug) }}" style="color: #070707; font-size: 16px; font-weight: 700; text-decoration: none; transition: color 0.3s; font-family: var(--fontFamily);"> {{ localized($service->title) }} </a>
                        </li>
                        @empty
                        <li style="margin-bottom: 12px;">
                            <a href="{{ route('services') }}" style="color: #070707; font-size: 16px; font-weight: 700; text-decoration: none; transition: color 0.3s; font-family: var(--fontFamily);"> Web Development </a>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <a href="{{ route('services') }}" style="color: #070707; font-size: 16px; font-weight: 700; text-decoration: none; transition: color 0.3s; font-family: var(--fontFamily);"> UI&UX Designer </a>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <a href="{{ route('services') }}" style="color: #070707; font-size: 16px; font-weight: 700; text-decoration: none; transition: color 0.3s; font-family: var(--fontFamily);"> Management </a>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <a href="{{ route('services') }}" style="color: #070707; font-size: 16px; font-weight: 700; text-decoration: none; transition: color 0.3s; font-family: var(--fontFamily);"> Digital Marketing </a>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <a href="{{ route('blog') }}" style="color: #070707; font-size: 16px; font-weight: 700; text-decoration: none; transition: color 0.3s; font-family: var(--fontFamily);"> Blog News </a>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <a href="{{ route('services') }}" style="color: #070707; font-size: 16px; font-weight: 700; text-decoration: none; transition: color 0.3s; font-family: var(--fontFamily);"> Finance & Accounting </a>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>

            <!-- Column 4: Contact Information -->
            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget links-info" data-cue="slideInUp">
                    <h3 style="color: var(--blackColor); font-size: 20px; font-weight: 700; margin-bottom: 20px;">Əlaqə</h3>
                    <ul class="list-unstyled ps-0 mb-0">
                        @if(setting('address') && setting('address') !== 'address')
                        <li style="margin-bottom: 12px; color: #555; font-size: 16px; line-height: 1.6;">
                            {{ setting('address') }}
                        </li>
                        @else
                        <li style="margin-bottom: 12px; color: #555; font-size: 16px; line-height: 1.6;">
                            Bakı, Azərbaycan
                        </li>
                        <li style="margin-bottom: 12px; color: #555; font-size: 16px; line-height: 1.6;">
                            Nərimanov
                        </li>
                        @endif
                        @if(setting('phone') && setting('phone') !== 'phone')
                        <li style="margin-bottom: 12px;">
                            <a href="tel:{{ setting('phone') }}" style="color: #555; font-size: 16px; text-decoration: none; transition: color 0.3s;"> {{ setting('phone') }} </a>
                        </li>
                        @if(setting('phone2') && setting('phone2') !== 'phone2')
                        <li style="margin-bottom: 12px;">
                            <a href="tel:{{ setting('phone2') }}" style="color: #555; font-size: 16px; text-decoration: none; transition: color 0.3s;"> {{ setting('phone2') }} </a>
                        </li>
                        @endif
                        @else
                        <li style="margin-bottom: 12px;">
                            <a href="tel:+123456789865" style="color: #555; font-size: 16px; text-decoration: none; transition: color 0.3s;"> +123 456 789 865 </a>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <a href="tel:+741852963856" style="color: #555; font-size: 16px; text-decoration: none; transition: color 0.3s;"> +741 852 963 856 </a>
                        </li>
                        @endif
                        @if(setting('email') && setting('email') !== 'email')
                        <li style="margin-bottom: 12px;">
                            <a href="mailto:{{ setting('email') }}" style="color: #555; font-size: 16px; text-decoration: none; transition: color 0.3s;"> {{ setting('email') }} </a>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <a href="mailto:{{ setting('email') }}" style="color: #555; font-size: 16px; text-decoration: none; transition: color 0.3s;"> {{ setting('email') }} </a>
                        </li>
                        @else
                        <li style="margin-bottom: 12px;">
                            <a href="mailto:skostudent@mail.com" style="color: #555; font-size: 16px; text-decoration: none; transition: color 0.3s;"> skostudent@mail.com </a>
                        </li>
                        <li style="margin-bottom: 12px;">
                            <a href="mailto:skostudent@mail.com" style="color: #555; font-size: 16px; text-decoration: none; transition: color 0.3s;"> skostudent@mail.com </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </footer>

    <!-- Copyright Area -->
    <div class="copyright-area position-relative z-1" style="background-color: var(--whiteColor); border-top: 1px solid #e0e0e0; padding-top: 20px; padding-bottom: 20px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <div class="copyright-content" data-cue="slideInUp">
                        <p style="color: #555; font-size: 16px; margin: 0;">
                            Copyright Skostudent 2025 | Bütün Hüquqları Qorunur
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
