<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @if(!$isGoogleBot)
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-E57459WQXD"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-E57459WQXD');
        </script>
    @endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="{{ url('/') }}">

    @include('app.components.seoRules')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="icon" href="/favicon/favicon.ico">
    <link type="image/png" sizes="16x16" rel="icon" href="/favicon/favicon-16x16.png">
    <link type="image/png" sizes="32x32" rel="icon" href="/favicon/favicon-32x32.png">
    <link type="image/png" sizes="192x192" rel="icon" href="/favicon/android-chrome-192x192.png">
    <link type="image/png" sizes="512x512" rel="icon" href="/favicon/android-chrome-512x512.png">
    <link sizes="180x180" rel="apple-touch-icon" href="/favicon/apple-touch-icon.png">
    <link rel="manifest" href="/favicon/site.webmanifest">

    <link href="{{ strtok(LaravelLocalization::getNonLocalizedURL(), '?') }}" rel="canonical">

    {{ $criticalCss ?? '' }}

    <!-- Styles -->
    {{ $css ?? '' }}
</head>
<body id="{{ $bodyId ?? '' }}">
@if(!$isGoogleBot)
    <!-- Google Tag Manager (noscript) -->

    <!-- End Google Tag Manager (noscript) -->
@endif

<div class="body-child"><!-- Header Area -->
    @include('app.components.header')

    {{ $slot }}

    @include('app.components.footer')
</div>

<!-- Scripts -->
{{ $js ?? '' }}
<script src="/js/common.js"></script>

@include('components.modalDownload')

{{ $jsBottom ?? '' }}
</body>
</html>
