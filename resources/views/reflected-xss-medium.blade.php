<!-- reflected-xss-medium.blade.php -->

@extends('layouts.new-app')

@section('content')
<div class="flex justify-between">
   
    <!-- XSS Menu Section -->
    <div class="w-1/3 bg-gray-200 rounded-2xl mr-4 shadow-md p-4">
        <x-reflectedXSS-levels></x-reflectedXSS-levels>
    </div>
   
    <!-- Practice Section -->
    <div class="w-2/3 bg-gray-200 rounded-xl p-6">
        
        <!-- Explanation Section -->
        <div class="bg-white p-6 rounded-2xl font-mono">
            <h1 class="text-lg font-bold mb-4">Reflected XSS Vulnerability - Medium Level</h1>

            <form method="GET" action="{{ route('xss.medium') }}" class="space-y-6 bg-gray-300 rounded-2xl p-2">
                <div>
                    <label for="name" class="block text-base mb-2 font-medium text-gray-700">Enter your name please:</label>
                    <input type="text" id="name" name="name" class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring
                        focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-lg">
                </div>
                <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-300">Submit</button>
            </form>

            @if($name)
                <h2 class="text-lg font-bold mt-4">Hello, <span class="text-indigo-600">{!! $name !!}</span>!</h2>
            @endif

            <p class="text-base mt-4">
                In the medium-level demonstration, a fundamental method for addressing reflected XSS vulnerabilities
                is showcased. This involves the implementation of a filtering mechanism to sanitize user input by 
                removing any &lt;/script&gt; tags before rendering the content to users within a web application.
                <br><br>
                It is common for web developers to develop their own protective measures to mitigate the risks 
                associated with cross-site scripting attacks. In this context, a filtering mechanism is incorporated 
                utilizing a regular expression pattern. This pattern is designed to detect occurrences of
                &lt;/script&gt; tags within the user input and subsequently replace them with an empty string. 
                This proactive step helps prevent potentially malicious scripts from being executed within the 
                application.
            </p>

            <button onclick="toggleFileContent()" id="ToggleSourceCode" class="bg-indigo-600 text-white px-4 py-2 rounded-md mb-2 mt-2">
                Toggle Source Code
            </button>
            <div class="mt-4 bg-green-100 p-4 rounded-2xl border-2 border-blue-900" id="fileContent" style="display: none;">
                <pre class="text-base text-black">{{ $fileContent }}</pre>
            </div>
        </div>

        <x-security-awareness-message>
            <p class="text-base mt-4">
                For the medium level, try using scripts, tags, or any malicious code that could be executed.
            </p>
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
