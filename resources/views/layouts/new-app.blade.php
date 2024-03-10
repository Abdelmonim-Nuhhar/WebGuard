<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>WEB GUARD</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <!--link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    < Scripts -->
    <!-- external JavaScript file -->
    <script src="{{ asset('js/xss_toggle.js') }}"></script>
    <script src="{{ asset('js/toggleFileContent.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!--script src="{{ asset('js/my.js') }}"></script-->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="font-sans bg-gray-100">

<header class="flex justify-between items-center border-b-2 border-blue-500 border-gray-300 p-4  shadow-md bg-gray-800 rounded-2xl ">
        <div class="flex items-center">
            <img src="{{ asset('images/LBU.png') }}" alt="logo" class="h-32 w-auto">
            <h2 class="text-white p-5 font-bold text-4xl font-mono pl-32 font-italic ">Web Guard</h2>
        </div>

        <div class="space-x-4">
            @auth
            @include('components.settings_dropdown')
            @endauth
            @guest
            <a href="{{ route('login') }}" class="text-white p-5 font-semibold text-2xl font-mono underline">Login</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-white p-5 font-semibold text-2xl font-mono underline">Register</a>
            @endif
            @endguest
        </div>
    </header>

    <main class="border-b-2 border-gray-300 p-8">
        <!-- Menu -->
        @include('layouts.menu')
        @yield('content')
    </main>

    {{-- Footer Section --}}
    <footer class="bg-gray-800 text-white text-center p-4 border-blue-500 border-gray-300   shadow-md bg-gray-800 rounded-2xl">
        {{-- Include your footer content here --}}
        <h2 class="text-white p-5 font-bold text-2xl font-mono pl-32 font-italic "> &copy; {{ date('Y') }} Web Guard Vulnerabilities. All rights reserved.</h2>
    </footer>

</body>

</html>
