<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, follow">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', setting('site_name', 'Skostudent'))</title>
  <link rel="icon" type="image/svg+xml" href="{{ setting('favicon') ?: asset('assets/images/black-logo.svg') }}">

  <!-- Link of CSS files -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/scrollCue.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/custom-fixes.css') }}">
  @stack('css')
</head>

<body>

  @include('frontend.parts.header')

  <!-- Preloader -->
  <div class="preloader-area position-fixed start-0 top-0 end-0 bottom-0 text-center">
    <div class="preloader">
      <div class="waviy fw-bold">
        @php
          $siteName = setting('site_name');
          $siteName = $siteName !== 'site_name' ? $siteName : 'SKOSTUDENT';
          $letters = str_split(mb_strtoupper($siteName));
        @endphp
        @foreach($letters as $letter)
          <span class="position-relative d-inline-block">{{ $letter }}</span>
        @endforeach
      </div>
    </div>
  </div>
  <!-- End Preloader -->

  @yield('content')

  @include('frontend.parts.footer')

  <!-- Link of JS files -->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/scrollCue.min.js') }}"></script>
  <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  @stack('js')
</body>

</html>

