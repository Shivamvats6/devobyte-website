<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Login | Devobyte Innovators</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100">

    <div class="min-h-screen flex flex-col justify-center items-center px-4">

        {{-- Logo --}}
        <div class="mb-6">
            <a href="{{ route('home') }}">
                <img
                    src="{{ asset('assets/images/logo.png') }}"
                    alt="Devobyte Innovators"
                    class="h-14 mx-auto"
                >
            </a>
        </div>

        {{-- Auth Card --}}
        <div class="w-full max-w-md bg-white shadow-lg rounded-xl px-6 py-6">

            {{ $slot }}

        </div>

        {{-- Footer text (optional but professional) --}}
        <p class="mt-6 text-xs text-gray-500 text-center">
            © {{ date('Y') }} Devobyte Innovators. All rights reserved.
        </p>

    </div>

</body>
</html>
