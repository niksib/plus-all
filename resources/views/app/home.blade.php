<x-app-layout>
    <x-slot:critical-css></x-slot:critical-css>

    <x-slot:css>
        <link rel="stylesheet" href="{{ mix('app/css/pages/home.css') }}" media="print" onload="this.media='all'">
    </x-slot:css>

    <x-slot:js>
        <script src="{{ mix('app/js/pages/home.js') }}" defer></script>
    </x-slot:js>


    <x-slot:js-bottom></x-slot:js-bottom>

    <div>Content</div>
</x-app-layout>
