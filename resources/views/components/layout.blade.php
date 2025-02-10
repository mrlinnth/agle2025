<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <title>{{$title ?? 'AGLE 2025'}}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <x-header />
    <main>
      {{ $slot }}
    </main>

    <script src="{{ @asset('js/dropdown.js') }}"></script>
    <script src="{{ @asset('js/scrollmenu.js') }}"></script>
    <script src="{{ @asset('js/stickymenu.js') }}"></script>
    <script src="{{ @asset('js/scrolltop.js') }}"></script>
  </body>
</html>
