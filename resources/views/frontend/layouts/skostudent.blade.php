<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, follow">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', setting('site_name', 'Skostudent')) | {{ setting('site_tagline', 'Xaricdə Təhsil') }}</title>
  <link rel="icon" type="image/svg+xml" href="{{ setting('favicon') ?: asset('assets/skostudent/images/black-logo.svg') }}">

  <!-- Link of CSS files -->
  <link rel="stylesheet" href="{{ asset('assets/skostudent/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/skostudent/css/meanmenu.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/skostudent/css/scrollCue.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/skostudent/css/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/skostudent/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/skostudent/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/skostudent/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/skostudent/css/responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/skostudent/css/custom-fixes.css') }}">
  @stack('css')
</head>

<body>

  @include('frontend.parts.skostudent_header')

  <!-- Preloader -->
  <div class="preloader-area position-fixed start-0 top-0 end-0 bottom-0 text-center">
    <div class="preloader">
      <img src="{{ asset('assets/skostudent/images/black-logo.svg') }}" alt="preloader">
      <div class="waviy fw-bold">
        <span class="position-relative d-inline-block">S</span>
        <span class="position-relative d-inline-block">K</span>
        <span class="position-relative d-inline-block">O</span>
        <span class="position-relative d-inline-block">S</span>
        <span class="position-relative d-inline-block">T</span>
        <span class="position-relative d-inline-block">U</span>
        <span class="position-relative d-inline-block">D</span>
        <span class="position-relative d-inline-block">E</span>
        <span class="position-relative d-inline-block">N</span>
        <span class="position-relative d-inline-block">T</span>
      </div>
    </div>
  </div>
  <!-- End Preloader -->

  @yield('content')

  @include('frontend.parts.skostudent_footer')

  <!-- Link of JS files -->
  <script src="{{ asset('assets/skostudent/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/skostudent/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/skostudent/js/meanmenu.min.js') }}"></script>
  <script src="{{ asset('assets/skostudent/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/skostudent/js/scrollCue.min.js') }}"></script>
  <script src="{{ asset('assets/skostudent/js/mixitup.min.js') }}"></script>
  <script src="{{ asset('assets/skostudent/js/main.js') }}"></script>
  @stack('js')
</body>

</html>

