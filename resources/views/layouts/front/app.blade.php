<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Mufdana - Gadai BPKB Aman & Proses Cepat, Uang Cair Tanpa Ribet"/>

    <!-- ✅ SEO Basic -->
    <title>@yield('title')</title>
    <meta name="description" content="Mufdana adalah solusi pinjaman dana cepat dengan jaminan BPKB mobil & motor. Proses aman, cepat, tanpa ribet, dan cabang tersebar di berbagai kota."/>
    <meta name="keywords" content="gadai BPKB, pinjaman dana cepat, dana tunai, jaminan BPKB, BPKB mobil, gadai motor, mufdana"/>
    <meta name="author" content="Mufdana"/>

    <!-- ✅ Canonical URL -->
    <link rel="canonical" href="https://www.mufdana.com"/>

    <!-- ✅ Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png') }}" type="image/x-icon"/>

    <!-- ✅ Open Graph (untuk Facebook & sosial media) -->
    <meta property="og:title" content="Gadai BPKB Aman & Proses Cepat - Mufdana"/>
    <meta property="og:description" content="Mufdana adalah solusi pinjaman dana cepat dengan jaminan BPKB mobil & motor. Proses aman, cepat, tanpa ribet, dan cabang tersebar di berbagai kota"/>
    <meta property="og:url" content="https://www.mufdana.com"/>
    <meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="Mufdana"/>

    <!-- ✅ Twitter Card -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Gadai BPKB Aman & Proses Cepat - Mufdana"/>
    <meta name="twitter:description" content="Butuh dana cepat? Gadai BPKB aja di Mufdana. Proses cepat dan aman, uang langsung cair!"/>
    <meta name="twitter:image" content="{{ asset('assets/images/og-image.jpg') }}"/>

    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/leaflet.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('dist/output-tailwind.css') }}"/>
    <link rel="stylesheet" href="{{ asset('dist/output-scss.css') }}"/>

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "LocalBusiness",
          "name": "Mufdana",
          "image": "https://mufdana.com/assets/images/logo.png",
          "url": "https://mufdana.com",
          "telephone": "+62-823-2533-3445",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Jl. Ahmad Yani No.A12 Kav A11",
            "addressLocality": "Malang",
            "postalCode": "65163",
            "addressCountry": "ID"
          },
          "openingHours": "Mo-Fr 08:00-15:00, Sa 08:00-12:00",
          "priceRange": "IDR"
        }
    </script>

</head>

<body>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0RR37SH4MV"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0RR37SH4MV');
</script>
<!-- Header -->
@include('layouts.front.header')

@yield('content')

<!-- Scroll to top -->
<button class="scroll-to-top-btn"><span class="ph-bold ph-caret-up"></span></button>

<!-- Footer -->
@include('layouts.front.footer')

@include('layouts.front.mobile-menu')

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/phosphor-icons.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/leaflet.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
