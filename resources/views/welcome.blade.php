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
    <div class="bg-gradient-to-r from-blue-200 via-blue-100 to-blue-300 text-white p-4 rounded-3xl pt-16 pb-16">

    @auth 
    @can('create', App\Models\Vulnerability::class)
    <p class="text-blue-800 p-4 font-bold text-xl font-mono mb-4 rounded-3xl">
    Welcome, Admin  

                            <span class="text-gray-800 text-2xl">{{ Auth::user()->name }}. </span>You can manage the Learning Hub.

                               <br>
                               <br>
                               <p class="text-gray-700 p-4 font-bold text-xl font-mono ">

                               Click <a href="{{ route('index') }}" class="bg-indigo-500 p-2 text-white pl-4 rounded-2xl">Edit L-Hub</a> to edit the existing vulnerabilities.
                               <br>
                               <br>
                               Click  <a href="{{ route('create') }}" class="bg-indigo-500 p-2  pl-4 rounded-2xl  text-white" >Add Vulnerability</a>  to add a new vulnerability.
                            </p>

    </p>
    </div>
    @else
    <p class="text-gray-700 p-4 font-bold text-1g font-mono ">
    Welcome <span class="text-red-600 text-2xl">{{ Auth::user()->name }}</span> to Learning Hub. You can now click on Learning Hub to learn and practice.
</div>
                               
    </p>
    <div class="w-full sm:w-1/3 rounded-3xl overflow-hidden">
        <div class="transition-transform transform-gpu hover:scale-110">
            <img src="{{asset('images/home5.jpeg')}}" alt="logo" class="w-full h-full object-cover rounded-3xl">
        </div>
    </div>

    
    @endcan

    @else
        <div class="container mx-auto  ">
            <h1 class=" font-semibold text-gray-500 p-4 font-semibold text-xl font-mono">Welcome to  Web Guard</h1>
            <p class="text-gray-800 leading-loose">
                Enhance your knowledge of web application security with Web Guard. <a href="{{ route('register') }}" class="bg-blue-300 text-red-500 font-bold py-2 p-5 rounded-full mt-4 inline-block hover:bg-gray-200 transition duration-300 underline">Register</a>
                 now to access exclusive Learning Hub and resources.
            </p>
        </div>

        <!-- Main Content -->
    <main class="container mx-auto mt-4 p-4">
    <div class="flex">
        <div class="w-full sm:w-2/3  text-white p-2 rounded-2xl shadow-md text-center mr-2">
            
        <section class="mb-8">
            <h2 class="text-gray-700 p-2 font-semibold text-xl font-mono">Features </h2>
            <div class="flex flex-wrap sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Featured Course Card -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:bg-blue-100">
                    <h3 class="text-gray-700 p-2 font-semibold text-xl font-mono font-semibold mb-2">Web Vulnerabilities Learning Hub</h3>
                    <p class="text-gray-700 font-mono">
                        Educate web developers about common web vulnerabilities to build a secure website.
                    </p>
                    <a href="#" id="learnMoreLink" class="text-blue-500 mt-4 inline-block" onclick="toggleDescription()">Learn More</a>
                    <div id="expandedDescription" class="hidden mt-4">
                        <p class="text-gray-700 font-mono">
                            This course covers a wide range of web vulnerabilities, including SQL injection, cross-site scripting (XSS), and more. Gain hands-on experience and practical skills to secure your web applications.
                        </p>
                        <a href="#" id="viewLessLink" class="text-blue-500 mt-4 inline-block" onclick="toggleDescription()">View Less</a>
                    </div>
                </div>
            </div>
             
        </section>
            
    </div>

    <div class="w-full sm:w-1/3 rounded-3xl overflow-hidden">
        <div class="transition-transform transform-gpu hover:scale-110">
            <img src="{{asset('images/home5.jpeg')}}" alt="logo" class="w-full h-full object-cover rounded-3xl">
        </div>
    </div>

    </div>

        
       


    


    <div class="flex">
    <div class="w-full sm:w-2/3 text-white p-2 rounded-2xl shadow-md text-center mr-2">
    <section class="mb-8">
        <h2 class="text-gray-700 p-2 font-semibold text-xl font-mono mb-2">Why Register with Web Guard?</h2>
        <div class="bg-white p-4 rounded-lg shadow-md font-mono hover:bg-blue-100">
            <ul class="list-disc  text-gray-800 ">
                <li>Unlock the full potential of Web Guard by registering for an account.</li>
                <li>Access to our Learning Hub with hands-on exercises on common web vulnerabilities.</li>
                <li>Exclusive educational resources to help you build a secure website.</li>
                <li>Engage with a community of like-minded web developers and security enthusiasts.</li>
                <li>Stay updated with the latest trends and best practices in web application security.</li>
            </ul>
        </div>
    </section>
</div>

<div class="w-full sm:w-1/3 rounded-3xl overflow-hidden">
        <div class="transition-transform transform-gpu hover:scale-110">
            <img src="{{asset('images/home2.jpeg')}}" alt="logo" class="w-full h-full object-cover rounded-3xl">
        </div>
    </div>
</div>
        <section class="mb-8">
            <div class="bg-white p-6 rounded-lg shadow-md hover:bg-blue-100">
                <h2 class="text-gray-700 p-2 font-semibold text-xl font-mono font-semibold mb-2">Ready to Get Started?</h2>
                <p class="text-gray-800 leading-loose font-mono">
                    Register now and dive into the world of web application security. Join a community passionate about building and securing the web.
                </p>
                <a href="{{ route('register') }}" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-full mt-4 inline-block hover:bg-blue-600 transition duration-300">Get Started</a>
            
            </div>
        </section>
    </main>
        @endauth
</div>

    

    <!-- JavaScript to toggle description and scroll -->
    <script src="{{ asset('js/jsFile.js') }}"></script>

@endsection
