<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    {{-- Include your stylesheets and scripts here --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans bg-gray-100">

    {{-- Header Section --}}
    <header class="justify-flex border-bottom-double border-2 mb-0">
        <div class="flex flex-col items-start border-2 rounded-lg m-2">
            <img src="{{asset('images/logo.png')}}" alt="logo" class="w-full h-40 object-cover"> {{-- Updated with object-cover --}}
            <h2 class="font-bold text-lg self-center">web Guard</h2>
        </div>
    </header>

    {{-- Main Content Section --}}
    <main class="container mx-auto mt-0 p-4">
        {{-- Login Section --}}
        <section class="mb-8">
            {{-- Include your login content here --}}
            @yield('login')
        </section>

        {{-- Page Content --}}
        <section>
            {{-- Yield for the dynamic content of each page --}}
            @include('layouts.menu')
            @yield('content')
        </section>
    </main>

    {{-- Footer Section --}}
    <footer class="bg-gray-800 text-white text-center p-4">
        {{-- Include your footer content here --}}
        &copy; {{ date('Y') }} Your App Name. All rights reserved.
    </footer>

</body>

</html>
