@extends('frontend.layouts.main')

@section('title', setting('site_name', 'Skostudent'))

@section('content')

  <!-- ============================================
      Start Banner Area
      ============================================= -->
  <div id="banner" class="banner-area position-relative z-1">
    <div class="container">
      <div class="row">
        <!-- Banner Content -->
        <div class="col-lg-6">
          <div class="banner-content" data-cue="slideInUp">
            <div class="title">
              <span class="sub-title d-inline-block">
                {{ setting('main_page_banner_dynamic_words') !== 'main_page_banner_dynamic_words' ? setting('main_page_banner_dynamic_words') : 'Onlayn Təhsil Veb-saytı' }}
              </span>
              <h2>
                @if(setting('main_page_banner_title') && setting('main_page_banner_title') !== 'main_page_banner_title')
                  {!! setting('main_page_banner_title') !!}
                @else
                  Gələcəyinizi Gücləndirin, Rəqəmsal
                  <span class="position-relative">
                    Bacarıqlar Öyrənin
                    <img
                      src="{{ asset('assets/images/title-shape.svg') }}"
                      alt="shape"
                      class="title-decoration"
                    >
                  </span>
                @endif
              </h2>
              <p>
                {!! setting('main_page_banner_description') !== 'main_page_banner_description' ? setting('main_page_banner_description') : 'Rəqəmsal Kəşf Səyahətinə Başlayın: Mütəxəssislər Tərəfindən Təqdim Olunan Kurslar' !!}
              </p>
            </div>
            <div class="button-list d-flex align-items-center">
              <a href="{{ route('about') }}" class="default-btn">
                <img
                  src="{{ asset('assets/images/left-bold.svg') }}"
                  alt="icon"
                  class="btn-icon"
                >
                <span>İndi Qeydiyyatdan Keç</span>
              </a>
            </div>
          </div>
        </div>

        <!-- Banner Image with Widgets -->
        <div class="col-lg-6">
          <div class="banner-image position-relative z-1" data-cue="slideInUp">
            <!-- Main Banner Image -->
            <div class="image">
              <img
                src="{{ setting('main_page_banner_image') ?: asset('assets/images/banner1.png') }}"
                alt="banner-image"
                class="img-fluid"
              >
            </div>

            <!-- Rating Widget -->
            <div class="udemy-item">
              <ul class="list-unstyled ps-0 mb-0">
                <li class="d-inline-block">
                  <img
                    src="{{ asset('assets/images/udemy.svg') }}"
                    alt="image"
                  >
                </li>
                <li class="d-inline-block">
                  <h3>
                    4.9
                    <i class="ri-star-s-fill"></i>
                  </h3>
                </li>
              </ul>
            </div>

            <!-- Students Info Widget -->
            <div class="user-info text-center">
              <div class="icon">
                <img
                  src="{{ asset('assets/images/user-icon.svg') }}"
                  alt="students-icon"
                >
              </div>
              <h2>Tələbələr</h2>
              <h3>
                <span class="counter" data-count="10">10</span>K+
              </h3>
              <ul class="list-unstyled ps-0 user-avatars">
                @for($i = 1; $i <= 5; $i++)
                <li class="d-inline-block">
                  <img
                    src="{{ asset('assets/images/user' . $i . '.jpg') }}"
                    alt="user-{{ $i }}"
                    class="user-avatar"
                  >
                </li>
                @endfor
              </ul>
            </div>

            <!-- Mentor Info Widget -->
            <div class="mentor-info d-flex align-items-center">
              <div class="content">
                <h3>Mentorla söhbət</h3>
                <span>Mentorunuzu burada tapın</span>
              </div>
              <div class="icon">
                <img
                  src="{{ asset('assets/images/message-icon.svg') }}"
                  alt="message-icon"
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Decorative Background Shapes -->
    <div class="banner-shape1" aria-hidden="true">
      <img src="{{ asset('assets/images/banner-shape1.png') }}" alt="">
    </div>
    <div class="banner-shape2" aria-hidden="true">
      <img src="{{ asset('assets/images/banner-shape2.png') }}" alt="">
    </div>
    <div class="banner-shape3" aria-hidden="true">
      <img src="{{ asset('assets/images/banner-shape3.png') }}" alt="">
    </div>
    <div class="banner-shape4" aria-hidden="true">
      <img src="{{ asset('assets/images/banner-shape4.png') }}" alt="">
    </div>
    <div class="banner-shape5" aria-hidden="true">
      <img src="{{ asset('assets/images/banner-shape5.png') }}" alt="">
    </div>
    <div class="banner-shape6" aria-hidden="true">
      <img src="{{ asset('assets/images/banner-shape6.png') }}" alt="">
    </div>
    <div class="banner-shape7" aria-hidden="true">
      <img src="{{ asset('assets/images/banner-shape7.png') }}" alt="">
    </div>
    <div class="banner-shape8" aria-hidden="true">
      <img src="{{ asset('assets/images/banner-shape8.png') }}" alt="">
    </div>
  </div>
  <!-- ============================================
      End Banner Area
      ============================================= -->

  <!-- ============================================
      Start About Area
      ============================================= -->
  <div class="about-area pt-136 pb-110">
    <div class="container">
      <div class="row">
        <!-- About Images -->
        <div class="col-lg-6">
          <div class="about-image position-relative z-1" data-cue="slideInUp">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="image-1">
                  <img
                    src="{{ $about && $about->getMedia('file')->count() > 0 ? $about->getMedia('file')->first()->getUrl() : asset('assets/images/about1.jpg') }}"
                    alt="about-image-1"
                    class="img-fluid"
                  >
                </div>
                @if($about && $about->getMedia('file')->count() > 1)
                <div class="image-2" data-cue="slideInUp">
                  <img
                    src="{{ $about->getMedia('file')->skip(1)->first()->getUrl() }}"
                    alt="about-image-2"
                    class="img-fluid"
                  >
                </div>
                @else
                <div class="image-2" data-cue="slideInUp">
                  <img
                    src="{{ asset('assets/images/about2.jpg') }}"
                    alt="about-image-2"
                    class="img-fluid"
                  >
                </div>
                @endif
              </div>
              <div class="col-lg-6 col-md-6">
                @if($about && $about->getMedia('file')->count() > 2)
                <div class="image-3" data-cue="slideInUp">
                  <img
                    src="{{ $about->getMedia('file')->skip(2)->first()->getUrl() }}"
                    alt="about-image-3"
                    class="img-fluid"
                  >
                </div>
                @else
                <div class="image-3" data-cue="slideInUp">
                  <img
                    src="{{ asset('assets/images/about3.jpg') }}"
                    alt="about-image-3"
                    class="img-fluid"
                  >
                </div>
                @endif
                <div class="experience-info d-flex align-items-center justify-content-between" data-cue="slideInUp">
                  <div class="content">
                    <h3>
                      <span class="counter" data-count="{{ $about && $about->country_count ? $about->country_count : 15 }}">{{ $about && $about->country_count ? $about->country_count : 15 }}</span>
                    </h3>
                    <p>illik təcrübə</p>
                  </div>
                  <a href="{{ route('about') }}" class="icon" aria-label="Learn more about us">
                    <i class="ph ph-arrow-up-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- Decorative Shapes -->
            <div class="shape">
              <div class="shape1" aria-hidden="true">
                <img src="{{ asset('assets/images/shape1.svg') }}" alt="">
              </div>
              <div class="shape2" aria-hidden="true">
                <img src="{{ asset('assets/images/shape2.svg') }}" alt="">
              </div>
            </div>
          </div>
        </div>

        <!-- About Content -->
        <div class="col-lg-6">
          <div class="about-content" data-cue="slideInUp">
            <div class="section-title">
              <span class="d-inline-block sub-title">{{ $about && localized($about->short_info) ? \Illuminate\Support\Str::limit(localized($about->short_info), 30) : 'Skostudent Haqqında' }}</span>
              <h2>
                @if($about && localized($about->vision))
                  {{ localized($about->vision) }}
                @else
                  Rəqəmsal Təhsil üçün Vizyonumuzu
                  <span class="position-relative">
                    Kəşf Edin
                    <img
                      src="{{ asset('assets/images/title-shape.svg') }}"
                      alt="shape"
                      class="title-decoration"
                    >
                  </span>
                @endif
              </h2>
            </div>
            @if($about && localized($about->short_info))
            <p>{{ localized($about->short_info) }}</p>
            @else
            <p>
              Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor
              incididunt ut labore
            </p>
            @endif
            @if($about && (localized($about->mission) || localized($about->vision)))
            <h4 class="mission">Missiyamız və vizyonumuz</h4>
            @if($about && localized($about->mission))
            <p>{{ localized($about->mission) }}</p>
            @endif
            @if($about && localized($about->vision))
            <p>{{ localized($about->vision) }}</p>
            @endif
            @else
            <h4 class="mission">Missiyamız və vizyonumuz</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua.
              Lorem ipsum dolor sit amet, consectetur
              adipiscing elit
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua.
              Lorem ipsum dolor sit amet, consectetur
              adipiscing elit
            </p>
            @endif
            <div class="about-list d-flex align-items-center">
              <a href="{{ route('about') }}" class="default-btn">
                <img
                  src="{{ asset('assets/images/left-bold.svg') }}"
                  alt="icon"
                  class="btn-icon"
                >
                <span>Learn More</span>
              </a>
              <div class="user d-flex align-items-center">
                <div class="image">
                  <img
                    src="{{ asset('assets/images/about4.jpg') }}"
                    alt="CEO Jason S. Ellis"
                    class="ceo-image"
                  >
                </div>
                <div class="content">
                  <h3>Jason S. Ellis</h3>
                  <span>CEO & Founder</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ============================================
      End About Area
      ============================================= -->

  <!-- ============================================
      Start Categories Area
      ============================================= -->
  @if($services->count() > 0)
  <div class="categories-area pt-136 pb-110">
    <div class="container">
      <div class="categories-section-title" data-cue="slideInUp">
        <div class="row align-items-end">
          <div class="col-lg-6 col-md-7">
            <div class="section-title">
              <span class="d-inline-block sub-title">Kurs Kateqoriyası</span>
              <h2>
                Ən Yaxşı
                <span class="position-relative">
                  Kateqoriyaları Kəşf Edin
                  <img
                    src="{{ asset('assets/images/title-shape.svg') }}"
                    alt="shape"
                    class="title-decoration"
                  >
                </span>
              </h2>
            </div>
          </div>
          <div class="col-lg-6 col-md-5">
            <div class="text-end">
              <a href="{{ route('services') }}" class="default-btn2">
                <span>Bütün Kateqoriyaları Gör</span>
                <img
                  src="{{ asset('assets/images/left-small.svg') }}"
                  alt="icon"
                  class="btn-icon"
                >
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-cues="fadeIn">
        @foreach($services->take(6) as $service)
        <div class="col-lg-4 col-sm-6">
          <div class="single-categories-card text-center">
            <div class="icon mx-auto position-relative z-1">
              <img
                src="{{ asset('assets/images/categories-bg-shape.svg') }}"
                alt="category-background"
                class="category-bg"
              >
              <img
                class="bg-shape category-icon"
                src="{{ $service->getFirstMediaUrl('file') ?: asset('assets/images/categories1.svg') }}"
                alt="{{ localized($service->title) }}"
              >
            </div>
            <h3>
              <a href="{{ route('services.detail', $service->slug) }}">
                {{ localized($service->title) }}
              </a>
            </h3>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  @endif
  <!-- ============================================
      End Categories Area
      ============================================= -->

  <!-- ============================================
      Start Testimonials Area
      ============================================= -->
  <div class="testimonial-area pt-136 pb-110">
    <div class="container">
      <div class="row align-items-center">
        <!-- Testimonial Images -->
        <div class="col-lg-6">
          <div class="testimonial-image position-relative z-1" data-cue="slideInUp">
            <div class="image position-relative z-1">
              <img
                src="{{ asset('assets/images/bg-shape.svg') }}"
                alt="testimonial-background"
                class="testimonial-bg"
              >
              <img
                class="main-image img-fluid"
                src="{{ $testimonials->count() > 0 && $testimonials->first()->getFirstMediaUrl('file') ? $testimonials->first()->getFirstMediaUrl('file') : asset('assets/images/testimonial1.jpg') }}"
                alt="testimonial-main"
              >
            </div>
            <div class="user-image">
              @if($testimonials->count() > 1)
                @foreach($testimonials->skip(1)->take(4) as $index => $testimonial)
                <div class="image{{ $index + 1 }}">
                  <img
                    src="{{ $testimonial->getFirstMediaUrl('file') ?: asset('assets/images/testimonial' . ($index + 2) . '.jpg') }}"
                    alt="{{ localized($testimonial->name) }}"
                    class="testimonial-user-img"
                  >
                </div>
                @endforeach
              @else
                @for($i = 2; $i <= 5; $i++)
                <div class="image{{ $i - 1 }}">
                  <img
                    src="{{ asset('assets/images/testimonial' . $i . '.jpg') }}"
                    alt="testimonial-user-{{ $i - 1 }}"
                    class="testimonial-user-img"
                  >
                </div>
                @endfor
              @endif
            </div>
          </div>
          <div class="testimonial-responsive-image d-md-none">
            <img
              src="{{ asset('assets/images/testimonial7.png') }}"
              alt="testimonial-responsive"
              class="img-fluid"
            >
          </div>
        </div>

        <!-- Testimonial Content -->
        <div class="col-lg-6">
          <div class="testimonial-content" data-cue="slideInUp">
            <div class="section-title">
              <span class="d-inline-block sub-title">Testimonials</span>
              <h2>
                Voices of Success: Hear from Our
                <span class="position-relative">
                  Students
                  <img
                    src="{{ asset('assets/images/title-shape.svg') }}"
                    alt="shape"
                    class="title-decoration"
                  >
                </span>
              </h2>
            </div>
            <div class="testimonial-slider-info owl-carousel owl-theme">
              @forelse($testimonials as $testimonial)
              <div class="item">
                <p>
                  {{ localized($testimonial->content) }}
                </p>
                <div class="users-info d-flex align-items-center">
                  <div class="image">
                    <img
                      src="{{ $testimonial->getFirstMediaUrl('file') ?: asset('assets/images/testimonial6.jpg') }}"
                      alt="{{ localized($testimonial->name) }}"
                      class="testimonial-avatar"
                    >
                  </div>
                  <div class="content">
                    <h3>{{ localized($testimonial->name) }}</h3>
                    <span>{{ localized($testimonial->position) ?: 'Student' }}</span>
                  </div>
                </div>
              </div>
              @empty
              <div class="item">
                <p>
                  Enrolling in courses at Skostudent was the best decision I made for my career. The instructors were incredibly knowledgeable and supportive, guiding me through every step of the learning process. Thanks to their expert guidance, I was able to land a job in my desired field even before completing the course. I highly recommend Skostudent to anyone looking to upskill and advance their career in the digital world.
                </p>
                <div class="users-info d-flex align-items-center">
                  <div class="image">
                    <img
                      src="{{ asset('assets/images/testimonial6.jpg') }}"
                      alt="Krystal France"
                      class="testimonial-avatar"
                    >
                  </div>
                  <div class="content">
                    <h3>Krystal France</h3>
                    <span>Ex-Student</span>
                  </div>
                </div>
              </div>
              @endforelse
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ============================================
      End Testimonials Area
      ============================================= -->

  <!-- ============================================
      Start Courses Area
      ============================================= -->
  @if(isset($products) && $products->count() > 0)
  <div class="courses-area pt-136 pb-110">
    <div class="container">
      <div class="section-title text-center" data-cue="slideInUp">
        <span class="d-inline-block sub-title">Ən Populyar Kurslar</span>
        <h2>
          Ən Yaxşı
          <span class="position-relative">
            Kurslarımızı Seçin
            <img
              src="{{ asset('assets/images/title-shape.svg') }}"
              alt="shape"
              class="title-decoration"
            >
          </span>
        </h2>
      </div>
      <div class="row" data-cues="fadeIn">
        @foreach($products->take(6) as $product)
        <div class="col-lg-4 col-md-6">
          <div class="single-courses-card">
            <div class="image position-relative">
              <a href="{{ route('products.detail', $product->slug) }}">
                <img
                  src="{{ $product->getFirstMediaUrl('file') ?: asset('assets/images/courses1.jpg') }}"
                  alt="{{ localized($product->title) }}"
                  class="img-fluid"
                >
              </a>
            </div>
            <div class="content">
              <h3>
                <a href="{{ route('products.detail', $product->slug) }}">
                  {{ localized($product->title) }}
                </a>
              </h3>
              <div class="ratings-info d-flex align-items-center">
                <span>
                  {!! Str::limit(localized($product->content_1), 100) ?: 'descriptipon dexxdj djd asj djas jda s' !!}
                </span>
              </div>
              <div class="list-info d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center">
                  <div class="icon">
                    <img
                      src="{{ asset('assets/images/university.svg') }}"
                      alt="university-icon"
                    >
                  </div>
                  <span>70+ tələbə</span>
                </div>
                <div class="button">
                  <a href="{{ route('products.detail', $product->slug) }}">
                    <span>İNDİ QEYDİYYATDAN KEÇ</span>
                    <i class="ph ph-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="single-courses-button text-center" data-cue="slideInUp">
        <a href="{{ route('products') }}" class="default-btn2">
          <span>Bütün Kursları Gör</span>
          <img
            src="{{ asset('assets/images/left-small.svg') }}"
            alt="icon"
            class="btn-icon"
          >
        </a>
      </div>
    </div>
  </div>
  @endif
  <!-- ============================================
      End Courses Area
      ============================================= -->

  <!-- ============================================
      Start Blog Area
      ============================================= -->
  @if($blogs->count() > 0)
  <div class="blog-area pt-136 pb-110">
    <div class="container">
      <div class="blog-section-title" data-cue="slideInUp">
        <div class="row align-items-end">
          <div class="col-lg-6 col-sm-7">
            <div class="section-title">
              <span class="d-inline-block sub-title">Bloqumuz</span>
              <h2>
                Son
                <span class="position-relative">
                  Bloglarımızı Oxuyun
                  <img
                    src="{{ asset('assets/images/title-shape.svg') }}"
                    alt="shape"
                    class="title-decoration"
                  >
                </span>
              </h2>
            </div>
          </div>
          <div class="col-lg-6 col-sm-5">
            <div class="button text-end">
              <a href="{{ route('blog') }}" class="default-btn2">
                <span>Bütün Blogları Gör</span>
                <img
                  src="{{ asset('assets/images/left-small.svg') }}"
                  alt="icon"
                  class="btn-icon"
                >
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center" data-cues="fadeIn">
        @foreach($blogs->take(3) as $index => $blog)
        <div class="col-lg-4 col-md-6">
          <div class="single-blog-card text-center">
            <div class="image">
              <a href="{{ route('blog.detail', $blog->slug) }}">
                <img
                  src="{{ $blog->getFirstMediaUrl('file') ?: asset('assets/images/blog' . ($index + 1) . '.jpg') }}"
                  alt="{{ localized($blog->title) }}"
                  class="img-fluid"
                >
              </a>
            </div>
            <div class="list mx-auto">
              <ul class="list-unstyled ps-0 mb-0">
                <li class="d-inline-block position-relative">
                  @if($index === 0)
                    <a href="{{ route('blog') }}">Xaricdə</a>
                  @else
                    <img
                      src="{{ asset('assets/images/user-icon3.svg') }}"
                      alt="author-icon"
                    >
                    <a href="{{ route('blog') }}">Admin</a>
                  @endif
                </li>
                <li class="d-inline-block position-relative">
                  <img
                    src="{{ asset('assets/images/calendar-icon.svg') }}"
                    alt="calendar-icon"
                  >
                  <time datetime="{{ $blog->created_at?->toDateString() }}">
                    {{ $blog->created_at?->translatedFormat('M d, Y') }}
                  </time>
                </li>
              </ul>
            </div>
            <div class="content">
              <h3>
                <a href="{{ route('blog.detail', $blog->slug) }}">
                  {{ localized($blog->title) }}
                </a>
              </h3>
              <a href="{{ route('blog.detail', $blog->slug) }}" class="read-more">
                <span>READ MORE</span>
                <i class="ph-bold ph-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  @endif
  <!-- ============================================
      End Blog Area
      ============================================= -->

  <!-- ============================================
      Start Partner Area
      ============================================= -->
  @if(isset($partners) && $partners->count() > 0)
  <div class="partner-area pt-136 pb-110">
    <div class="container">
      <div class="section-title text-center" data-cue="slideInUp">
        <span class="d-inline-block sub-title">Tərəfdaşlarımız</span>
        <h2>
          Bizim
          <span class="position-relative">
            Tərəfdaşlarımız
            <img
              src="{{ asset('assets/images/title-shape.svg') }}"
              alt="shape"
              class="title-decoration"
            >
          </span>
        </h2>
      </div>
      <div class="partner-slider owl-carousel owl-theme" data-cues="fadeIn">
        @foreach($partners as $partner)
        <div class="single-partner-logo text-center">
          @if($partner->link)
          <a href="{{ $partner->link }}" target="_blank" rel="noopener noreferrer">
            <img
              src="{{ $partner->getFirstMediaUrl('file') ?: asset('assets/images/partner1.png') }}"
              alt="{{ localized($partner->title) }}"
              class="img-fluid"
            >
          </a>
          @else
          <img
            src="{{ $partner->getFirstMediaUrl('file') ?: asset('assets/images/partner1.png') }}"
            alt="{{ localized($partner->title) }}"
            class="img-fluid"
          >
          @endif
        </div>
        @endforeach
      </div>
      <div class="partner-button text-center mt-5" data-cue="slideInUp">
        <a href="{{ route('partners') }}" class="default-btn2">
          <span>Bütün Tərəfdaşları Gör</span>
          <img
            src="{{ asset('assets/images/left-small.svg') }}"
            alt="icon"
            class="btn-icon"
          >
        </a>
      </div>
    </div>
  </div>
  @endif
  <!-- ============================================
      End Partner Area
      ============================================= -->

@endsection

