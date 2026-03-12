<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ✅ FAVICON -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/favicon.svg') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon.svg') }}">

    {{-- GOOGLE FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat+Alternates:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    {{-- FONT AWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <div class="flex min-h-screen">

        {{-- Sidebar --}}
        @include('admin.layout.sidebar')

        {{-- Main Content --}}
        <div class="flex-1 flex flex-col">

            {{-- Navbar --}}
            @include('admin.layout.navbar')

            {{-- Page Content --}}
            <main class="p-6">
                @yield('content')
            </main>

        </div>
    </div>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-out-cubic',
    });
</script>

</body>

</html>
