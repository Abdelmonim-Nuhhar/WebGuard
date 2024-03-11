

<!-- reflected-xss-impossible.blade.php -->

@extends('layouts.new-app')

@section('content')
<div class="flex justify-between">
   
    <!-- XSS Menu Section -->
    <div class="w-1/3 bg-white-100 rounded-2xl mr-4 shadow-md p-1">
    <x-reflectedXSS-levels></x-reflectedXSS-levels>
    </div>
   
    <!-- Practice Section -->
    <div class="w-2/3 bg-white-100 rounded-xl p-6">

    <div class="bg-gray-200 p-8 rounded-2xl">
            <h1 class="text-2xl font-bold mb-4 font-mono">Reflected XSS Vulnerability - Impossible Level</h1>

            <form method="GET" action="{{ route('xss.impossible') }}">
                <label for="name" class="block text-xl mb-4 font-medium text-gray-700">Enter your name:</label>
                <input type="text" id="name" name="name" class="mt-4 p-4 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-2xl font-mono">
                <!-- Include Anti-CSRF token -->
                <input type="hidden" name="user_token" value="{{ csrf_token() }}">
                <button type="submit" class="mt-4 w-full px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-300">Submit</button>
            </form>

            @isset($name)
                <h2 class="text-2xl font-bold mt-4">Hello, <span class="text-indigo-600">{!! $name !!}</span>!</h2>
            @endisset
        </div>

    <div class="text-1g mb-4 bg-white p-4 rounded-2xl font-mono p-2">
            <p>
            In the impossible-level demonstration, an exhaustive approach is undertaken to combat reflected XSS
             vulnerabilities with multiple layers of defense mechanisms. This method employs stringent checks
              and sanitization procedures to ensure the utmost protection against malicious script injections. <br><br>

        Firstly, the function verifies the existence of user input and ensures it is not null. It then proceeds
         to validate the Anti-CSRF token provided by the user against the session token to prevent CSRF attacks.
          This step helps guarantee the authenticity of the request and mitigates the risk of unauthorized 
          actions. <br><br>

        Next, the input is sanitized using the htmlspecialchars function, which converts special characters
         to their corresponding HTML entities. This sanitization process ensures that any potentially harmful
          content, including script tags and other HTML elements, is neutralized before being displayed to users.

        By implementing these rigorous security measures, the impossible-level demonstration sets a high 
        standard for protecting against reflected XSS vulnerabilities. It showcases the importance of 
        comprehensive security practices in web development to safeguard against a wide range of attack 
        vectors and ensure the integrity of web applications.
            </p>


            <button onclick="toggleFileContent()" id="ToggleSourceCode" class="bg-indigo-600 text-white px-8 py-2 rounded-md mb-2 mt-2">
                Toggle Source Code
            </button>
            <div class="font-mono text-1g  mt-4 bg-green-100 p-4 rounded-2xl border-2 border-blue-900" id="fileContent" style="display: none;">
                <pre class="font-mono text-1g text-black">{{ $fileContent }}</pre>
            </div>

        </div>

            
        <x-security-awareness-message>
        <br><br> Try your best if you can get any vulnerabilities:<br>
            
                <!-- Button to toggle content visibility -->
        <button id="toggleButton" class="bg-indigo-600 text-white px-4 py-2 rounded-md mb-4">
            Toggle XSS Testing Suggestions
        </button>

        </x-security-awareness-message>

        <div id="xssSuggestions" style="display: none;" class="bg-white rounded-2xl p-4 mb-4">
            <x-xss-injection-examples></x-xss-injection-examples>
        </div>

        

    </div>
</div>
@endsection