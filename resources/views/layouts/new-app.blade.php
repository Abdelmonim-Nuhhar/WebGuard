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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!--script src="{{ asset('js/my.js') }}"></script-->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="font-sans bg-gray-100">

    <header class="flex justify-between items-center border-b-2 border-gray-300 p-4">
        <div class="flex flex-between items-start">
            <img src="{{asset('images/LBU.png')}}" alt="logo" class="m-2">
            <h2 class="text-black-700 p-5 font-bold text-3xl font-mono " >Web Guard</h2>
        </div>
        <div class="space-x-4">
            @auth
            @include('components.settings_dropdown')
            @endauth
            @guest
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-sm text-gray-700 underline">Register</a>
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
    <footer class="bg-gray-800 text-white text-center p-4">
        {{-- Include your footer content here --}}
        &copy; {{ date('Y') }} Web Guard Vulnerabilities. All rights reserved.
    </footer>

</body>

</html>
