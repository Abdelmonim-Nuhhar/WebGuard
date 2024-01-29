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
    <main class="mx-auto p-4">
        <section class="mb-8">
            <h2 class="text-2xl font-bold text-purple-600 mb-2">Educational Articles and Blog Posts</h2>
            <ul class="list-disc pl-8">
                <li><a href="https://www.sitepoint.com/top-app-security-vulnerabilities/" class="text-green-500 hover:underline">
                    The Top 10 Web Application Vulnerabilities and How to Mitigate Them</a></li>
                <li><a href="https://owasp.org/www-project-secure-coding-practices-quick-reference-guide/stable-en/01-introduction/05-introduction" class="text-green-500 hover:underline">
                    Secure Coding Practices for Web Applications</a></li>
                <li><a href="https://www.testhouse.net/blogs/penetration-testing-101-a-beginners-guide-to-ethical-hacking/" class="text-green-500 hover:underline">
                    Penetration Testing 101: A Beginner's Guide</a></li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold text-purple-600 mb-2">Online Courses</h2>
            <ul class="list-disc pl-8">
                <li><a href="https://www.offsec.com/offsec/web-application-security-fundamentals/" class="text-green-500 hover:underline">
                    Understanding the Fundamentals of Web Application Security</a></li>
                <li><a href="https://eitca.org/programmes/eitc-is-wasf-web-applications-security-fundamentals/" class="text-green-500 hover:underline">
                    EITC/IS/WASF Web Applications Security Fundamentals</a></li>
                <li><a href="https://www.testhouse.net/blogs/penetration-testing-101-a-beginners-guide-to-ethical-hacking/" class="text-green-500 hover:underline">
                    A Beginner’s Guide to Ethical Hacking</a></li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold text-purple-600 mb-2">Webinars and Workshops</h2>
            <ul class="list-disc pl-8">
                <li><a href="https://owasp.org/www-project-secure-coding-practices-quick-reference-guide/stable-en/01-introduction/05-introduction" class="text-green-500 hover:underline">
                    Secure Coding Practices</a></li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-bold text-purple-600 mb-2">Tools and Resources</h2>
            <ul class="list-disc pl-8">
                <li><a href="https://www.zaproxy.org/" class="text-green-500 hover:underline">
                    OWASP ZAP</a></li>
                <li><a href="https://www.tenable.com/products/nessus" class="text-green-500 hover:underline">
                    Nessus Vulnerability Scanner</a></li>
                <li><a href="https://portswigger.net/burp/communitydownload" class="text-green-500 hover:underline">
                    Burp Suite</a></li>
            </ul>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-purple-600 mb-2">Community Forums</h2>
            <p class="mb-4 text-gray-700">Join our community forums to interact with other web developers and security experts. Share your experiences and knowledge about web application security, and learn from others.</p>
            <a href="#" class="text-green-600 hover:underline">Join the Community</a>
        </section>
    </main>
@endsection
