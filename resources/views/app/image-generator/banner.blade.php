<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico">
    <meta name='robots' content='noindex, nofollow' />
    <title>Generator</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/baner.css"/>
    <link rel="stylesheet" href="/css/baner-generator.css"/>
</head>
<body id="">
<div>
    <div class="generator-parent">
        <img src="/storage/{{ $banner->image }}" alt="exemple">
        <div class="generator {{ $banner->dark_theme ? 'generator--inversion' : '' }}" id="generator" style="background-color: {{ $banner->bg_color }}">
            <p class="generator-title">
                {{ trans('generator.image-title') }}<br>
                {{ trans('generator.image-subtitle') }} <br><span class="generator-title-name" id="generator-text2">{{ $banner->company }}</span>
                {{ trans('generator.image-from') }} <span class="generator-title-name" id="generator-text">{{ $banner->name }}</span>
            </p>
            <div class="generator-border-img" id="generator-border">
                <svg width="249" height="291" viewBox="0 0 249 291" fill="{{ $banner->border_color }}" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_291_945)">
                        <path
                            d="M232.651 0.840088H217.113H201.921H201.574H186.482H186.382H170.944H155.768H155.406H140.333H140.234H124.795H109.273H109.257H93.7345H78.2123H78.1964H62.6741H47.331H47.1359H31.9162H31.7928H16.378H0.839844V16.4051V31.9702V47.5353H16.378V31.9702V16.4051H31.7928H31.9162H47.1359H47.331H62.6741H78.1964H78.2123H93.7345H109.257H109.273H124.795H140.234H140.333H155.406H155.768H170.944H186.382H186.482H201.574H201.921H217.113H232.651V31.9702V47.5353H248.185V31.9702V16.4051V0.840088H232.651Z"
                            fill="#1C73FF"></path>
                        <path
                            d="M232.651 290.205H217.113H201.921H201.574H186.482H186.382H170.944H155.768H155.406H140.333H140.234H124.795H109.273H109.257H93.7345H78.2123H78.1964H62.6741H47.331H47.1359H31.9162H31.7928H16.378H0.839844V274.64V259.075V243.51H16.378V259.075V274.64H31.7928H31.9162H47.1359H47.331H62.6741H78.1964H78.2123H93.7345H109.257H109.273H124.795H140.234H140.333H155.406H155.768H170.944H186.382H186.482H201.574H201.921H217.113H232.651V259.075V243.51H248.185V259.075V274.64V290.205H232.651Z"
                            fill="#1C73FF"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_291_945">
                            <rect width="247.345" height="289.365" fill="white"
                                  transform="translate(0.839844 0.840088)"></rect>
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="generator-logo">
                <img class="generator-logo-sticker" src="/svg/sticker-logo.svg" alt="Maid in Ukraine">
            </div>
            <div class="generator-product" id="generator-product">
                <img src="/storage/{{ $banner->image }}" id="product-img" width="{{ $banner->width }}" height="{{ $banner->height }}">
            </div>
        </div>
    </div>
</div>
</body>
</html>
