<!DOCTYPE html>
<html lang="en"
    data-style-switcher-options="{'showBordersStyle': true, 'showLayoutStyle': true, 'showBackgroundColor': true, 'borderRadius': 0, 'colorPrimary': '#099CF4', 'colorSecondary': '#0C61E0', 'colorTertiary': '#2baab1', 'colorQuaternary': '#383f48'}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Preload critical assets -->
    <link rel="preload" as="image"
        href="{{ asset('frontend/img/demos/business-consulting-3/backgrounds/background-1.jpg') }}"
        fetchpriority="high">
    <link rel="preload" as="font" href="https://fonts.googleapis.com/css?family=Poppins:600" type="font/woff2"
        crossorigin>

    <title>@yield('title', config('app.name')) - {{ config('app.name') }}</title>

    {!! SEO::generate() !!}

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('frontend/img/apple-touch-icon.png') }}">

    <!-- Web Fonts -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&amp;display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    @stack('csslink')
    <link rel="preload" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" as="style"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" onload="this.onload=null;this.rel='stylesheet'" />

    <!-- Defer non-critical CSS -->
    <link rel="preload" href="{{ asset('frontend/vendor/animate/animate.compat.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('frontend/vendor/simple-line-icons/css/simple-line-icons.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('frontend/vendor/owl.carousel/assets/owl.carousel.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('frontend/vendor/owl.carousel/assets/owl.theme.default.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('frontend/vendor/magnific-popup/magnific-popup.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">

    <!-- Theme CSS -->
    <link rel="preload" href="{{ asset('frontend/css/theme.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('frontend/css/theme-elements.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('frontend/css/theme-blog.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('frontend/css/theme-shop.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">

    <!-- Demo CSS -->
    <link rel="preload" href="{{ asset('frontend/css/demos/demo-business-consulting-3.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="preload" href="{{ asset('frontend/css/skins/skin-business-consulting-3.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">

    <!-- Custom CSS -->
    <link rel="preload" href="{{ asset('frontend/css/custom.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    @stack('css')

    <!-- Fallback for CSS loading -->
    <noscript>
        <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('frontend/vendor/animate/animate.compat.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/vendor/magnific-popup/magnific-popup.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/theme-elements.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/theme-blog.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/theme-shop.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/demos/demo-business-consulting-3.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/skins/skin-business-consulting-3.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    </noscript>

</head>

<body>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M0HLZ4NEE1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-M0HLZ4NEE1');
    </script>
    <div class="body">
        @include('frontend.partials.header')

        @yield('content')

        @include('frontend.partials.footer')
    </div>

    <!-- Vendor JS -->
    @stack('jslink')
    <script src="{{ asset('frontend/vendor/plugins/js/plugins.min.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('frontend/js/theme.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('frontend/js/theme.init.js') }}"></script>

    @stack('js')
</body>

</html>