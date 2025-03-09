@php
    $lang = app()->getLocale();
@endphp
<!DOCTYPE html>
<html lang="{{ $lang }}" dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <!-- Metas -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template sadnah Multi-Purpose themeforest" />
    <meta name="description" content="sadnah - Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title  -->
    <title id="pageTitle">{{ setting('app_name_' . $lang) }} {{ $title ?? '' }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/imgs/logo.png') }}" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />


    @if (Route::currentRouteName() == 'home')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap"
            rel="stylesheet">
        <style>
            .almarai-light {
                font-family: "Almarai", sans-serif;
                font-weight: 300;
                font-style: normal;
            }

            .almarai-regular {
                font-family: "Almarai", sans-serif;
                font-weight: 400;
                font-style: normal;
            }

            .almarai-bold {
                font-family: "Almarai", sans-serif;
                font-weight: 700;
                font-style: normal;
            }

            .almarai-extrabold {
                font-family: "Almarai", sans-serif;
                font-weight: 800;
                font-style: normal;
            }
        </style>
    @endif
    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap-' . $lang . '.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/satoshi.css') }}" />

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-' . $lang . '.css') }}?v={{ str()->random(5) }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}
    <style>
        .form-check-input:checked {
            background-color: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
        }
    </style>

    @stack('styles')
    @livewireStyles
</head>

<body>

    <!-- ==================== Start Loading ==================== -->
    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>
    <!-- ==================== End Loading ==================== -->
    <div class="cursor"></div>
    <!-- ==================== Start progress-scroll-button ==================== -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==================== End progress-scroll-button ==================== -->

    <div id="smooth-wrapper">
        {{ $slot }}
    </div>


    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.4.0.min.js') }}"></script>

    <!-- plugins -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/smoother-script.js') }}"></script>
    <script src="{{ asset('assets/js/hscroll.js') }}"></script>
    <script src="{{ asset('assets/js/hscroll.js') }}"></script>
    <script src="{{ asset('build/assets/app2.js') }}"></script>

    @livewireScripts
    <!-- custom scripts -->
    <script src="{{ asset('assets/js/scripts.js') }}?v={{ str()->random(5) }}"></script>
</body>

</html>
