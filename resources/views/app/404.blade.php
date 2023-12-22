<x-app-layout>
    <x-slot:css>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <link rel="stylesheet" href="/css/baner-generator.css"/>
        <link rel="stylesheet" href="/css/404.css"/>
    </x-slot:css>

    <x-slot:js>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="/js/main.js"></script>
    </x-slot:js>

    <section class="error-page section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="error-inner">
                        <h1>404</h1>
                        <span>{{ trans('404.message') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
