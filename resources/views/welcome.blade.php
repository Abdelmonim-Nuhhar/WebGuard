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
    <header class="bg-gradient-to-r from-blue-300 via-blue-100 to-blue-300 text-white p-4 rounded-3xl">
        <div class="container mx-auto">
            <h1 class="text-4xl font-semibold text-gray-500 p-4 font-semibold text-3xl font-mono">Welcome to Web Guard</h1>
            <p class="text-gray-800 leading-loose">
                Enhance your knowledge of web application security with Web Guard. <a href="{{ route('register') }}" class="bg-blue-300 text-red-500 font-bold py-2 p-5 rounded-full mt-4 inline-block hover:bg-gray-200 transition duration-300 underline">Register</a>
                 now to access exclusive Learning Hub and resources.
            </p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto mt-4 p-4">
    <div class="flex">
        <div class="w-full sm:w-2/3 hover:bg-green-200 text-white p-2 rounded-2xl shadow-md text-center mr-2">
            
        <section class="mb-8">
            <h2 class="text-gray-700 p-2 font-semibold text-2xl font-mono">Features </h2>
            <div class="flex flex-wrap sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Featured Course Card -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-gray-700 p-2 font-semibold text-2xl font-mono font-semibold mb-2">Web Vulnerabilities Learning Hub</h3>
                    <p class="text-gray-700">
                        Educate web developers about common web vulnerabilities to build a secure website.
                    </p>
                    <a href="#" id="learnMoreLink" class="text-blue-500 mt-4 inline-block" onclick="toggleDescription()">Learn More</a>
                    <div id="expandedDescription" class="hidden mt-4">
                        <p class="text-gray-700">
                            This course covers a wide range of web vulnerabilities, including SQL injection, cross-site scripting (XSS), and more. Gain hands-on experience and practical skills to secure your web applications.
                        </p>
                        <a href="#" id="viewLessLink" class="text-blue-500 mt-4 inline-block" onclick="toggleDescription()">View Less</a>
                    </div>
                </div>
            </div>
             
        </section>
            
    </div>

        <div class="w-full sm:w-1/3 rounded-3xl overflow-hidden">
            
        <img src="{{asset('images/home2.jpg')}}" alt="logo" class="w-full h-full object-cover rounded-3xl">
            
        </div>
    </div>

        
       


    


        <section class="mb-8">
            <h2 class="text-gray-700 p-2 font-semibold text-2xl font-mono font-semibold mb-2">Why Register with Web Guard?</h2>
            <div class="bg-white p-6 rounded-lg shadow-md">
            <ul class="list-disc pl-6 text-gray-800 leading-loose">
                <li>Unlock the full potential of Web Guard by registering for an account.</li>
                <li>Access to our Learning Hub with hands-on exercises on common web vulnerabilities.</li>
                <li>Exclusive educational resources to help you build a secure website.</li>
                <li>Engage with a community of like-minded web developers and security enthusiasts.</li>
                <li>Stay updated with the latest trends and best practices in web application security.</li>
            </ul>
            </div>
        </section>

        <section class="mb-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-gray-700 p-2 font-semibold text-2xl font-mono font-semibold mb-2">Ready to Get Started?</h2>
                <p class="text-gray-800 leading-loose">
                    Register now and dive into the world of web application security. Join a community passionate about building and securing the web.
                </p>
                <a href="{{ route('register') }}" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-full mt-4 inline-block hover:bg-blue-600 transition duration-300">Get Started</a>
            
            </div>
        </section>
    </main>

    <!-- JavaScript to toggle description and scroll -->
    <script src="{{ asset('js/jsFile.js') }}"></script>

@endsection
