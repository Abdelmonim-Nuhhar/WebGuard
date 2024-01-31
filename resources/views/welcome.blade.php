@extends('layouts.new-app')

@section('login')
    {{-- Your login form or content --}}
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif
@endsection

@section('content')
    <!-- Header -->
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-2xl font-semibold">Web Guard</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto mt-4 p-4">
        <section class="mb-8">
            <h2 class="text-3xl font-bold mb-4">Welcome to Web Guard</h2>
            <p class="text-gray-800">
                Explore our educational resources to enhance your knowledge of web application security.
            </p>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Featured Course</h2>
            <div class="flex flex-between sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Featured Course Card -->
                <div class="bg-white p-4 rounded shadow-md">
                    <h3 class="text-lg font-semibold mb-2">Web Vulnerabilities Learning Hub</h3>
                    <p class="text-gray-600">
                        Educate web developers about common web vulnerabilities to build a secure website.
                    </p>
                    <a href="#" class="text-blue-500 mt-2 inline-block" onclick="expandDescription()">Learn More</a>
                    <div id="expandedDescription" class="hidden mt-2">
                        <p class="text-gray-600">
                            This course covers a wide range of web vulnerabilities, including SQL injection, cross-site scripting (XSS), and more. Gain hands-on experience and practical skills to secure your web applications.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

   

    <!-- JavaScript to toggle description -->
    <script>
        function expandDescription() {
            var expandedDescription = document.getElementById('expandedDescription');
            expandedDescription.classList.toggle('hidden');
        }
    </script>
@endsection
