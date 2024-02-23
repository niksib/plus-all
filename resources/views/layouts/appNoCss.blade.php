<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @if(!$isGoogleBot)
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-TBLGFSZ');</script>
        <!-- End Google Tag Manager -->
    @endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="publisher" content="Meest Poshta"/>
    <meta name="author" content="Meest Poshta"/>
    <meta name="copyright" content="Meest Poshta" />

    @if(LaravelLocalization::getCurrentLocale() === 'en')
        <meta name="robots" content="noindex, nofollow" />
    @endif

    <base href="{{ url('/') }}">

    @include('app.components.seoRules')

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link href="{{ strtok(LaravelLocalization::getNonLocalizedURL(), '?') }}" rel="canonical">

{{--    @foreach(LaravelLocalization::getSupportedLocales() as $locale => $localeData)--}}
{{--        <link href="{{ strtok(LaravelLocalization::getLocalizedUrl($locale), '?') }}" rel="alternate" hreflang="{{ $locale }}"/>--}}
{{--    @endforeach--}}
{{--    <link href="{{ strtok(LaravelLocalization::getNonLocalizedURL(), '?') }}" rel="alternate" hreflang="x-default"/>--}}

    <!-- Fonts -->
    <link rel="preload" href="/app/fonts/Montserrat-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="/app/fonts/Montserrat-SemiBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="/app/fonts/Montserrat-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="/app/fonts/Montserrat-Regular.ttf" as="font" type="font/ttf" crossorigin>

    <style>{{ file_get_contents(public_path('app/css/critical/helpers.css')) }}</style>
    <style>{{ file_get_contents(public_path('app/css/critical/header.css')) }}</style>
    <style>{{ file_get_contents(public_path('app/css/critical/sidebar.css')) }}</style>
    {{ $criticalCss ?? '' }}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('app/css/app.css') }}" media="print" onload="this.media='all'">
    {{ $css ?? '' }}
</head>
<body>
@if(!$isGoogleBot)
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TBLGFSZ" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
@endif

@include('app.components.header')

<div class="container container--main">
    @include('app.components.sidebar')

    {{ $slot }}

    @include('app.components.footer')

    <div class="scroll-top">
        >
    </div>
</div>

<div class="df__popup" id="payment-popup">
    <div class="df__popup-backdrop"></div>
    <div class="df__popup-body">
        <svg class="df__popup-cross df__popup-close" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.48726 11.0275L22.9135 25.4538C23.6161 26.1564 24.7552 26.1564 25.4578 25.4538C26.1604 24.7512 26.1604 23.6121 25.4578 22.9095L11.0316 8.48323C10.329 7.78064 9.18986 7.78064 8.48726 8.48323C7.78467 9.18582 7.78467 10.325 8.48726 11.0275Z" fill="#B2BAC4"/>
            <path d="M11.0316 25.4577L25.4578 11.0314C26.1604 10.3288 26.1604 9.18971 25.4578 8.48712C24.7552 7.78453 23.6161 7.78453 22.9135 8.48712L8.48726 22.9134C7.78467 23.616 7.78467 24.7551 8.48726 25.4577C9.18985 26.1603 10.329 26.1603 11.0316 25.4577Z" fill="#B2BAC4"/>
        </svg>

        <div class="df__popup-body-inner">
            <p class="df__popup-body-title">{{ trans('payment.title') }}</p>
            <div class="form-group">
                <input id="payment-parcel-id" type="text" class="input-simple border" placeholder="{{ trans('payment.placeholder') }}">
                <p id="payment-popup-error" class="form-group-error"></p>
            </div>
            <div class="w-100 d-flex justify-center">
                <a href="#" id="payment-popup-submit" class="btn btn-blue-dark">{{ trans('payment.button') }}</a>
            </div>
        </div>
    </div>
</div>

@if(!$isGoogleBot)
    <div class="df__cookie-popup">
        <svg class="df__cookie-popup-close df__cookie-popup-confirm" width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.22953 9.39371L19.5181 21.6823C20.1166 22.2808 21.0869 22.2808 21.6854 21.6823C22.2839 21.0838 22.2839 20.1135 21.6854 19.515L9.39682 7.22641C8.79834 6.62793 7.82801 6.62793 7.22952 7.22641C6.63104 7.82489 6.63104 8.79522 7.22953 9.39371Z" fill="#99A4AF"/>
            <path d="M9.39682 21.6856L21.6854 9.397C22.2839 8.79852 22.2839 7.82819 21.6854 7.22971C21.0869 6.63122 20.1166 6.63122 19.5181 7.22971L7.22952 19.5183C6.63104 20.1168 6.63104 21.0871 7.22952 21.6856C7.82801 22.2841 8.79834 22.2841 9.39682 21.6856Z" fill="#99A4AF"/>
        </svg>
        <div class="df__cookie-popup-title">{{ trans('cookie-popup.title') }}</div>
        <div class="df__cookie-popup-body">
            <p class="df__cookie-popup-body-text">{!! trans('cookie-popup.text') !!}</p>
            <a href="#" class="df__cookie-popup-btn df__cookie-popup-confirm">{{ trans('cookie-popup.btn') }}</a>
        </div>
    </div>
@endif

<!-- Scripts -->
<script src="{{ mix('app/js/app.js') }}" defer></script>
{{ $js ?? '' }}

{{ $jsBottom ?? '' }}

@if(!$isGoogleBot)
    <script>
        (function(d, s, id, companyId) {
            var js, sjs = d.getElementsByTagName(s)[0];
            js = d.createElement(s);
            js.id = id;
            js.src = "/app/vendor/loader.js";
            js.setAttribute('data-company-id', companyId);
            sjs.parentNode.insertBefore(js, sjs);
        })(document, "script", "sender-connect", "i727304593");
    </script>
@endif
</body>
</html>
