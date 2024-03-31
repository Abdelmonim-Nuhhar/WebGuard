<!-- reflected-xss-high.blade.php -->

@extends('layouts.new-app')

@section('content')

<div class="flex justify-between">
   
    <!-- XSS Menu Section -->
    <div class="w-1/3 bg-white rounded-2xl mr-4 shadow-md p-4">
        <x-reflectedXSS-levels></x-reflectedXSS-levels>
    </div>
    
    <!-- Practice Section -->
    <div class="w-2/3 bg-white rounded-xl p-6">
        <!-- Explanation Section -->
        <div class="bg-white p-6 rounded-2xl font-mono">
            <h1 class="text-lg font-bold mb-4">Reflected XSS Vulnerability - High Level</h1>
            <form method="GET" action="{{ route('xss.high') }}" class="space-y-6 bg-gray-300 p-3 rounded-xl">
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
                In the high-level demonstration, an advanced approach is taken to address reflected XSS vulnerabilities with enhanced filtering mechanisms...
                <!-- Content continues -->
            </p>

            <button onclick="toggleFileContent()" id="ToggleSourceCode" class="bg-indigo-600 text-white px-4 py-2 rounded-md mb-2 mt-2">Toggle Source Code</button>
            <div class="mt-4 bg-green-100 p-4 rounded-2xl border-2 border-blue-900" id="fileContent" style="display: none;">
                <pre class="text-base text-black">{{ $fileContent }}</pre>
            </div>
        </div>

        <x-security-awareness-message>
            <p class="text-base">
                For the high XSS level, try using scripts, tags, or any malicious code that could be executed.
            </p>
            <!-- Button to toggle content visibility -->
            <button id="toggleButton" class="bg-indigo-600 text-white px-4 py-2 rounded-md mb-4">Toggle XSS Testing Suggestions</button>
        </x-security-awareness-message>

        <div id="xssSuggestions" style="display: none;" class="bg-white rounded-2xl p-4 mb-4">
            <x-xss-injection-examples></x-xss-injection-examples>
        </div>
    </div>
</div>

@endsection
