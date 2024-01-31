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

    <!-- link rel="stylesheet" href="css/styles.css" -->

    <main class="mx-auto p-4">

        <div class="bg-white p-4 rounded-lg shadow-md mb-2">
            <section>
                <h2 class="text-2xl text-purple-600 font-bold mb-4 text-blue-600 font-semibold text-gray-500 p-3 font-semibold  font-mono bg-gray-200 rounded-2xl ">Educational Articles and Blog Posts</h2>
                
                <p class="text-gray-800 font-mono font-bold mb-8 text-1xl">
                    <ul class="list-disc pl-8 text-gray-800 font-mono font-bold mb-4 text-1xl underline">
                        <li><a href="https://www.sitepoint.com/top-app-security-vulnerabilities/" class="text-blue-500 hover:text-red-500 transition duration-300 text-base md:text-lg">
                            The Top 10 Web Application Vulnerabilities and How to Mitigate Them</a></li>
                        <li><a href="https://owasp.org/www-project-secure-coding-practices-quick-reference-guide/stable-en/01-introduction/05-introduction" class="text-blue-500 hover:text-red-500 transition duration-300 text-base md:text-lg">
                            Secure Coding Practices for Web Applications</a></li>
                        <li><a href="https://www.testhouse.net/blogs/penetration-testing-101-a-beginners-guide-to-ethical-hacking/" class="text-blue-500 hover:text-red-500 transition duration-300 text-base md:text-lg">
                            Penetration Testing 101: A Beginner's Guide</a></li>
                    </ul>
                </p>
            </section>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md mb-2">
            <section>
                <h2 class="text-2xl text-purple-600 font-bold mb-4 text-blue-600 font-semibold text-gray-500 p-3 font-semibold  font-mono bg-gray-200 rounded-2xl ">Online Courses</h2>
                
                <p class="text-gray-800 font-mono font-bold mb-4 text-1xl">
                    <ul class="list-disc pl-8 text-gray-800 font-mono font-bold mb-8 text-1xl underline">
                        <li><a href="https://www.offsec.com/offsec/web-application-security-fundamentals/" class="text-blue-500 hover:text-red-500 transition duration-300 text-base md:text-lg">
                            Understanding the Fundamentals of Web Application Security</a></li>
                        <li><a href="https://eitca.org/programmes/eitc-is-wasf-web-applications-security-fundamentals/" class="text-blue-500 hover:text-red-500 transition duration-300 text-base md:text-lg">
                            EITC/IS/WASF Web Applications Security Fundamentals</a></li>
                        <li><a href="https://www.testhouse.net/blogs/penetration-testing-101-a-beginners-guide-to-ethical-hacking/" class="text-blue-500 hover:text-red-500 transition duration-300 text-base md:text-lg">
                            A Beginner’s Guide to Ethical Hacking</a></li>
                    </ul>
                </p>
            </section>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md mb-2">
            <section>
                <h2 class="text-2xl text-purple-600 font-bold mb-4 text-blue-600 font-semibold text-gray-500 p-3 font-semibold  font-mono bg-gray-200 rounded-2xl ">Webinars and Workshops</h2>
                
                <p class="text-gray-800 font-mono font-bold mb-4 text-1xl">
                    <ul class="list-disc pl-8 text-gray-800 font-mono font-bold mb-8 text-1xl underline">
                    <li><a href="https://owasp.org/www-project-secure-coding-practices-quick-reference-guide/stable-en/01-introduction/05-introduction" class="text-blue-500 hover:text-red-500 transition duration-300 text-base md:text-lg">
                    Secure Coding Practices</a></li>
                    </ul>
                </p>
            </section>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md mb-2">
            <section>
                <h2 class="text-2xl text-purple-600 font-bold mb-4 text-blue-600 font-semibold text-gray-500 p-3 font-semibold  font-mono bg-gray-200 rounded-2xl ">Tools and Resources</h2>
                
                <p class="text-gray-800 font-mono font-bold mb-4 text-1xl">
                    <ul class="list-disc pl-8 text-gray-800 font-mono font-bold mb-8 text-1xl underline">
                        <li><a href="https://www.zaproxy.org/" class="text-blue-500 hover:text-red-500 transition duration-300 text-base md:text-lg">
                            OWASP ZAP</a></li>
                        <li><a href="https://www.tenable.com/products/nessus" class="text-blue-500 hover:text-red-500 transition duration-300 text-base md:text-lg">
                            Nessus Vulnerability Scanner</a></li>
                        <li><a href="https://portswigger.net/burp/communitydownload" class="text-blue-500 hover:text-red-500 transition duration-300 text-base md:text-lg">
                            Burp Suite</a></li>
                    </ul>
                </p>
            </section>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md mb-2">
            <section>
                <h2 class="text-2xl text-purple-600 font-bold mb-4 text-blue-600 font-semibold text-gray-500 p-3 font-semibold  font-mono bg-gray-200 rounded-2xl ">Community Forums</h2>
                
                <p class="mb-4 text-gray-700 font-semibold">Join our community forums to interact with other web developers and security experts. Share your experiences and knowledge about web application security, and learn from others.</p>
                    <a href="#" class="text-green-600 hover:underline font-semibold">Join the Community</a>
                </p>
            </section>
        </div>

    </main>
@endsection
