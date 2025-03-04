<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <title>{{ $title ?? 'AGLE 2025' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {!! RecaptchaV3::initJs() !!}
</head>

<body>
    <x-header />
    <main>
        {{ $slot }}
    </main>
    <x-footer />
    <!-- ====== Back To Top Start -->
    <a href="javascript:void(0)"
        class="back-to-top fixed bottom-8 right-8 left-auto z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-primary text-white shadow-md transition duration-300 ease-in-out hover:bg-dark">
        <span class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"></span>
    </a>
    <!-- ====== Back To Top End -->
    <script src="{{ @asset('js/dropdown.js') }}"></script>
    <script src="{{ @asset('js/scrollmenu.js') }}"></script>
    <script src="{{ @asset('js/stickymenu.js') }}"></script>
    <script src="{{ @asset('js/scrolltop.js') }}"></script>
</body>

</html>
