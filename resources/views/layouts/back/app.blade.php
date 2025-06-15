
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Mufdana - Gadai BPKB Aman & Proses Cepat, Uang Cair Tanpa Ribet" />
    <title>@yield('title') - Mufdana</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/leaflet.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/apexcharts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('dist/output-tailwind.css') }}" />
    <link rel="stylesheet" href="{{ asset('dist/output-scss.css') }}" />
    @stack('style')
</head>

<body class="lg:overflow-hidden">
<!-- Header -->
@include('layouts.back.header')

<div class="dashboard_main overflow-hidden lg:w-screen lg:h-screen flex sm:pt-20 pt-16">
    @include('layouts.back.sidebar')
    <div class="content_dashboard scrollbar_custom max-h-full w-full h-fit bg-surface">
        @yield('content')
        <div class="flex items-center justify-center w-full h-15 bg-white duration-300 shadow-md">
            <span class="copyright caption1 text-secondary">©2025 Mufdana. All Rights Reserved</span>
        </div>
    </div>
</div>

<!-- Menu mobile -->
@include('layouts.back.mobile-menu')

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/phosphor-icons.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/leaflet.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/apexcharts.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@stack('script')
</body>
</html>
