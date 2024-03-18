@extends('layouts.new-app')

@section('content')

<div class="flex justify-between">
   
    <!-- XSS Menu Section -->
    <div class="w-1/3 bg-gray-100 rounded-2xl mr-4 shadow-md p-1">
        <x-reflectedXSS-levels></x-reflectedXSS-levels>
    </div>
   
    <!-- Practice Section -->
    <div class="w-2/3 bg-gray-200 rounded-xl p-6">

    <div class="bg-gray-100 p-8 rounded-2xl">
            <h1 class="text-2xl font-bold mb-4 font-mono">Reflected XSS Vulnerability - Low Level</h1>

            <!-- Form -->
            <form method="GET" action="{{ route('xss.reflected') }}" class="space-y-8">
                <div>
                    <label for="name" class="block text-xl mb-4 font-medium text-gray-700">Enter your name please:</label>
                    <input type="text" id="name" name="name" class="mt-4 p-4 border border-gray-300 rounded-md focus:outline-none focus:ring
                    focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-2xl font-mono">
                </div>
                <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-300">Submit</button>
            </form>

            <!-- Congratulatory Message -->
            @if($name)
                <div class="mt-8 bg-green-100 p-4 rounded-xl">
                    <h2 class="text-2xl font-bold mb-4">Congratulations, <span class="text-indigo-600">{{ Auth::user()->name }}!</span></h2>
                    <p class="text-lg">You successfully submitted: <span class="text-indigo-600">{!! $name !!}</span></p>
                    <p class="text-lg mt-4">Here's your flag: <span class="text-indigo-600">FLAG{XSS_Low_Level_Exploited}</span></p>
                </div>
            @endif
        </div>
        
        <!-- Explanation Section -->
        <div class="text-1g mb-4 bg-white p-4 rounded-2xl font-mono p-2">
            <p>
                Reflected XSS (Cross-Site Scripting) at the low level represents one of
                the most prevalent security vulnerabilities in web applications. In this scenario,
                the attacker injects malicious code, typically JavaScript, into the application,
                which is then executed in the context of another user's browser.
            </p>

            <button onclick="toggleFileContent()" id="ToggleSourceCode" class="bg-indigo-600 text-white px-8 py-2 rounded-md mb-2 mt-2">
                Toggle Source Code
            </button>
            <div class="font-mono text-1g  mt-4 bg-green-100 p-4 rounded-2xl border-2 border-blue-900" id="fileContent" style="display: block;">
                <pre class="font-mono text-1g text-black">{{ $fileContent }}</pre>
            </div>

        </div>

            
        <x-security-awareness-message>
        For example,Try this URL:<br>
            <code>
                <span class="text-indigo-700 text-xl font-bold">http://127.0.0.1:8000/xss/reflected?name=&lt;script&gt;alert('XSS');&lt;/script&gt;</span>
            </code><br>,
            or enter the following code as your name into the input field to steal user cookie: <br>
            <code>
                <span class="text-indigo-700 text-xl font-bold">&lt;script type='text/javascript'&gt;alert(document.cookie);&lt;/script&gt;<br></span>
            </code>

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
