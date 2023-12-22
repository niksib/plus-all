@if(!empty($seoRule))
    <title>{{ $seoRule->lang->meta_title }}</title>

    <meta name="description" content="{{ $seoRule->lang->meta_description }}">
    <meta name="keywords" content="{{ $seoRule->lang->meta_keywords }}">

    <meta property="og:title" content="{{ $seoRule->lang->social_name }}">
    <meta property="og:site_name" content="{{ $seoRule->lang->social_site_name }}">
    <meta property="og:url" content="{{ $seoRule->lang->social_link }}">
    <meta property="og:description" content="{{ $seoRule->lang->social_description }}">
    <meta property="og:locale" content="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() }}">
    <meta property="og:image" content="{{ $seoRule->lang->social_image ? request()->root() . '/storage/' . $seoRule->lang->social_image : request()->root() . '/images/share_main.png' }}" />
    <meta property="og:type" content="website">

    <meta name="twitter:url" content="{{ $seoRule->lang->social_link }}">
    <meta name="twitter:title" content="{{ $seoRule->lang->social_name }}">
    <meta name="twitter:description" content="{{ $seoRule->lang->social_description }}">
    <meta name="twitter:site" content="{{ $seoRule->lang->social_site_name }}">
    <meta name="twitter:card" content="summary">
@else
    <title>{{ $metaTitle ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? '' }}">
    <meta name="keywords" content="{{ $metaKeywords ?? '' }}">

    <meta property="og:title" content="{{ $metaTitle ?? '' }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ $ogImage ?? request()->root() . '/images/share_main.png'}}" />
    <meta property="og:locale" content="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() }}">
@endif
