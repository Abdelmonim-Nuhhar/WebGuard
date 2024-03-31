@extends('layouts.new-app')

@section('content')

<div class="flex justify-between">
   
    <!-- XSS Menu Section -->
    <div class="w-1/3 bg-gray-100 rounded-2xl mr-4 shadow-md p-1">
        <x-reflectedXSS-levels></x-reflectedXSS-levels>
    </div>
   
    <!-- Practice Section -->
    <div class="w-2/3 bg-gray-200 rounded-xl p-6">

    <div class="bg-gray-100 p-4 rounded-2xl">
            <h1 class="text-lg font-bold mb-4 font-mono">Reflected XSS Vulnerability - Low Level</h1>

            <!-- Form -->
            <form method="GET" action="{{ route('xss.reflected') }}" class="space-y-2 bg-gray-200 p-2 rounded-xl">
                <div>
                    <label for="name" class="block text-lg mb-2 font-medium text-gray-700">Enter your name please:</label>
                    <input type="text" id="name" name="name" class="mt-2 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-lg font-mono">
                </div>
                <button type="submit" class="w-full px-3 py-1 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-300">Submit</button>
            </form>

            <!-- Congratulatory Message -->
            @if($name)
                <div class="mt-6 bg-green-100 p-2 rounded-xl">
                    <p class="text-base">You successfully submitted: <span class="text-indigo-600">{!! $name !!}</span></p>
   
                </div>
            @endif

            @if($name)
    @php
                // Check if the submitted string contains <script> tags
                $containsScript = preg_match("/<script.*?>.*?<\/script>/is", $name);
                @endphp

                @if($containsScript)
                    <div class="mt-6 bg-blue-100 p-4 rounded-xl">
                        <h2 class="text-lg font-bold mb-2 text-green-500">Congratulations, <span class="text-indigo-600">{{ Auth::user()->name }}!</span></h2>
                        <p class="text-base">You successfully submitted a script!</p>
                        <p class="text-base mt-2">Here's your flag: <span class="font-bold text-green-500">flag:{43a4435a862473bab7f12b6d51b5b818}</span></p>
                        <p class="text-indigo-600">Don't forget to submit your flag in the flag section of the menu to track your learning progress.</p>
                    </div>
                    
                @else
                    <div class="mt-6 bg-red-100 p-4 rounded-xl">
                        <p class="text-base">Please attempt to complete the challenge by injects malicious code in order to obtain a flag</p>
                    </div>
                @endif
            @endif
        </div>
        
        <!-- Explanation Section -->
        <div class="text-sm mb-4 bg-white p-2 rounded-2xl font-mono">
            <p>
                Reflected XSS (Cross-Site Scripting) at the low level represents one of
                the most prevalent security vulnerabilities in web applications. In this scenario,
                the attacker injects malicious code, typically JavaScript, into the application,
                which is then executed in the context of another user's browser.
            </p>

            <button onclick="toggleFileContent()" id="ToggleSourceCode" class="bg-indigo-600 text-white px-4 py-1 rounded-md mb-2 mt-2">
                Toggle Source Code
            </button>
            <div class="font-mono text-sm mt-2 bg-green-100 p-2 rounded-2xl border border-blue-900" id="fileContent" style="display: block;">
                <pre class="font-mono text-sm text-black">{{ $fileContent }}</pre>
            </div>

        </div>

            
        <x-security-awareness-message>
        For example, Try this URL:<br>
            <code>
                <span class="text-indigo-700 text-sm font-bold">http://127.0.0.1:8000/xss/reflected?name=&lt;script&gt;alert('XSS');&lt;/script&gt;</span>
            </code><br>,
            or enter the following code as your name into the input field to steal user cookie: <br>
            <code>
                <span class="text-indigo-700 text-sm font-bold">&lt;script type='text/javascript'&gt;alert(document.cookie);&lt;/script&gt;<br></span>
            </code>

        <!-- Button to toggle content visibility -->
        <button id="toggleButton" class="bg-indigo-600 text-white px-3 py-1 rounded-md mb-2">
            Toggle XSS Testing Suggestions
        </button>

        </x-security-awareness-message>

        <div id="xssSuggestions" style="display: none;" class="bg-white rounded-2xl p-2 mb-2">
            <x-xss-injection-examples></x-xss-injection-examples>
        </div>

  
    </div>
</div>
@endsection
