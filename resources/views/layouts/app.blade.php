<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @if(!$isGoogleBot)
        <!-- Google Tag Manager -->
        <!-- End Google Tag Manager -->
    @endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="publisher" content=""/>
    <meta name="author" content=""/>
    <meta name="copyright" content="" />

    <base href="{{ url('/') }}">

    @include('app.components.seoRules')

{{--    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">--}}
{{--    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">--}}
{{--    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">--}}
{{--    <link rel="manifest" href="/site.webmanifest">--}}
{{--    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">--}}
{{--    <meta name="msapplication-TileColor" content="#da532c">--}}
{{--    <meta name="theme-color" content="#ffffff">--}}

    <link href="{{ strtok(LaravelLocalization::getNonLocalizedURL(), '?') }}" rel="canonical">

{{--    @foreach(LaravelLocalization::getSupportedLocales() as $locale => $localeData)--}}
{{--        <link href="{{ strtok(LaravelLocalization::getLocalizedUrl($locale), '?') }}" rel="alternate" hreflang="{{ $locale }}"/>--}}
{{--    @endforeach--}}
{{--    <link href="{{ strtok(LaravelLocalization::getNonLocalizedURL(), '?') }}" rel="alternate" hreflang="x-default"/>--}}

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

{{ $jsBottom ?? '' }}
</body>
</html>
