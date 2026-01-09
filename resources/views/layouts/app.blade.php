<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Devobyte Innovators | Digital Solutions & Marketing')</title>

    {{-- GOOGLE FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat+Alternates:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    {{-- FONT AWESOME --}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet"/>

    {{-- TAILWIND CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    @stack('head')
</head>

<body class="bg-white text-gray-800 overflow-x-hidden">

    {{-- HEADER --}}
    @include('partials.header')

    {{-- PAGE CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER (ALWAYS before popups) --}}
    @include('partials.footer')

    {{-- GLOBAL CONTACT POPUP (LAST in body) --}}
    @include('partials.contact-popup')

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 900,
            once: true,
            easing: 'ease-out-cubic'
        });
    </script>

    @stack('scripts')

</body>
</html>
