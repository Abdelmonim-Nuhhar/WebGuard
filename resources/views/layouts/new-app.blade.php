<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>WEB GUARD</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <!-- External fonts and scripts -->
    <script src="{{ asset('js/xss_toggle.js') }}"></script>
    <script src="{{ asset('js/toggleFileContent.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Tailwind CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex flex-col min-h-screen bg-gray-100 font-sans">

    <header class="border-b border-blue-500 border-gray-300 p-4 shadow-md bg-gray-800 rounded">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ asset('images/LBU.png') }}" alt="logo" class="h-20 w-auto">
                <h2 class="text-white p-2 font-bold text-2xl font-mono pl-4 font-italic">Web Guard</h2>
            </div>
            <div class="space-x-2">
                @auth
                @include('components.settings_dropdown')
                @endauth
                @guest
                <a href="{{ route('login') }}" class="text-white p-2 font-semibold text-xl font-mono underline">Login</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-white p-2 font-semibold text-xl font-mono underline">Register</a>
                @endif
                @endguest
            </div>
        </div>
    </header>

    <main class="flex-grow border-b border-gray-300 p-4">
        <!-- Main content goes here -->
        @include('layouts.menu')
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center p-4">
        <h2 class="text-white font-bold text-lg font-mono italic">&copy; {{ date('Y') }} Web Guard Vulnerabilities. All rights reserved.</h2>
    </footer>
    @stack('scripts')
</body>

</html>
