<!DOCTYPE html>
<html lang="az" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index, follow">
    <meta name="apple-mobile-web-app-status-bar-style" content="#6E91F3">
    <meta name="msapplication-navbutton-color" content="#6E91F3">
    <meta name="theme-color" content="#6E91F3">
    <link rel="icon" type="image/svg+xml" href="{{ setting('favicon') }}">
    <link rel="alternate icon" href="{{ setting('favicon') }}">
    <link rel="mask-icon" href="{{ setting('favicon') }}">
    <title>{{ config('app.name') }}</title>

    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome-5.css') }}">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/unicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/hover-revel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/timepickers.min.css') }}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('backend/assets/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    @stack('css')
</head>
<body class="@yield('bodyClass')">

@include('frontend.parts.header')

@yield('content')

<!-- progress area start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>

<div id="anywhere-home" class="">
</div>

<!-- pre loader start -->
<div id="elevate-load">
    <div class="loader-wrapper">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!-- pre loader end -->

@include('frontend.parts.footer')

<!-- jquery js -->
<script src="{{ asset('assets/js/plugins/jquery.min.js') }}"></script>
<!-- jquery ui -->
<script src="{{ asset('assets/js/vendor/jqueryui.js') }}"></script>
<!-- counter up -->
<script src="{{ asset('assets/js/plugins/counter-up.js') }}"></script>
<script src="{{ asset('assets/js/plugins/swiper.js') }}"></script>
<!-- twinmax -->
<script src="{{ asset('assets/js/vendor/twinmax.js') }}"></script>
<!-- split text js -->
<script src="{{ asset('assets/js/vendor/split-text.js') }}"></script>
<!-- text plugins -->
<script src="{{ asset('assets/js/plugins/text-plugins.js') }}"></script>
<!-- metismenu js -->
<script src="{{ asset('assets/js/plugins/metismenu.js') }}"></script>
<!-- waypoint js -->
<script src="{{ asset('assets/js/vendor/waypoint.js') }}"></script>
<!-- waw -->
<script src="{{ asset('assets/js/vendor/waw.js') }}"></script>
<!-- aos js -->
<script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
<!-- jquery ui js -->
<script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
<!-- timepickers -->
<script src="{{ asset('assets/js/plugins/jquery-timepicker.js') }}"></script>
<!-- sal animation -->
<script src="{{ asset('assets/js/vendor/sal.min.js') }}"></script>
<!-- bootstrap JS -->
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<!-- easing JS -->
<script src="{{ asset('assets/js/plugins/jquery-slideNav.js') }}"></script>
<!-- easing JS -->
<script src="{{ asset('assets/js/plugins/hover-revel.js') }}"></script>
<!-- contact form js -->
<script src="{{ asset('assets/js/plugins/contact-form.js') }}"></script>
<!-- main js -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<!-- swip image -->
<script src="{{ asset('assets/js/plugins/swip-img.js') }}"></script>
<!-- header style two End -->

<script src="{{ asset('backend/assets/js/plugins/toastr/toastr.min.js') }}"></script>
<script>
    toastr.options = {
        "closeButton": false,
        "newestOnTop": true,
        "progressBar": true,
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "600",
        "hideDuration": "1000",
        "timeOut": "10000",
        "extendedTimeOut": "5000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    $(document).ready(function(){
        @if(session()->has('modal'))
        $('#{{session()->get('modal')}}').modal('show')
        @endif

        @if(session()->has('error'))
        toastr.error("{{session()->get('error')}}");
        @endif

        @if(session()->has('success'))
        toastr.success("{{session()->get('success')}}");
        @endif

        @if(session()->has('warning'))
        toastr.warning("{{session()->get('warning')}}");
        @endif

        @if(session()->has('info'))
        toastr.info("{{session()->get('info')}}");
        @endif

        @if (isset($errors) && count($errors) > 0)
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif

    });
</script>

@stack('js')

</body>

</html>

