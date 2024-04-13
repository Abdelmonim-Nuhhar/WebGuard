@extends('layouts.new-app')

@section('content')
<div class="flex justify-between ">
   
    <div class="w-1/2 bg-gray-200 rounded-xl shadow-lg p-3 font-mono ">
        <div class="m-2 flex items-center bg-indigo-200 hover:bg-indigo-300 rounded-xl p-2 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
            <a href="{{ route('sql.injections') }}" class="text-gray-700 font-semibold text-lg font-mono flex items-center pl-8">
                <span class="text-2xl mr-2">&#8592;</span> <!-- Big back sign -->
                XSS Types Menu
            </a>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <p class="text-lg font-bold mb-4">What is DOM-based XSS (Cross-Site Scripting)?</p>
            
            <p class="text-gray-700 mb-4">
                DOM-based XSS, also known as "client-side" or "DOM XSS," is a type of security vulnerability that occurs when an attacker is able to inject malicious code into a web application, which is then executed by the victim's browser within the Document Object Model (DOM).
            </p>

            <p class="text-lg font-bold mb-2">How Does DOM-based XSS Work?</p>

            <p class="text-gray-700">
                In a DOM-based XSS attack, the malicious code is injected into the web page's HTML or JavaScript code dynamically, typically through user input or other untrusted data sources. The injected code is then executed by the victim's browser when the compromised web page is loaded or interacted with.
            </p>
        </div>

        

    </div>

    <!-- Practice Section -->
    <div class="w-1/2 bg-gray-200 rounded-xl shadow-lg p-3 font-mono">
        
        
        <!-- Instructions -->
        <div class="max-w-4xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-gray-800">DOM-based XSS Challenge</h2>
    <p class="mt-4 text-gray-600">
        Enter a search term such as <pre class="inline-block bg-gray-100 text-red-500 p-2 rounded"><code>javascript:alert('Dom-based XSS')</code></pre> in the search box. This example demonstrates the ease with which JavaScript can be injected and executed due to the improper handling of user input within the DOM. Successfully completing this will reward you with a flag.
    </p>

        
        <!-- Search Input -->
        <div class="bg-white p-4 rounded-lg shadow">
            <label for="search" class="block text-sm font-medium text-gray-700">Search:</label>
            <input type="text" id="search" name="search" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm">
            <button onclick="performSearch()" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">Search</button>
        </div>
        
        <!-- Search Results Placeholder -->
        <div id="searchResults" class="mt-4 bg-white p-4 rounded-lg shadow">
            <p class="text-sm text-gray-700">Your search results will appear here...</p>
        </div>

        <!-- Flag Section -->
        <div id="flagSection" class="hidden mt-4 bg-indigo-100  font-mono p-4 rounded-lg shadow">
            <h3 class="text-lg font-bold mb-2">Congratulations!</h3>
            
            <x-submit-flag-reminder>
            <p class="text-green-600">flag:{378a7072c7fddc6a322904d2b444a905}</p>
            </x-submit-flag-reminder>
            <p class="mb-4">You have successfully exploited the DOM-based XSS vulnerability and earned a flag.</p>
            <p class="mb-2">To mitigate DOM-based XSS vulnerabilities:</p>
            <ul class="list-disc pl-5">
                <li>Sanitize and validate user input before incorporating it into the DOM.</li>
                <li>Use Content Security Policy (CSP) to restrict the execution of scripts from unauthorized sources.</li>
                <li>Encode or escape user input when dynamically generating HTML content.</li>
            </ul>
        </div>
    </div>
</div>

<script>
function performSearch() {
    var searchTerm = document.getElementById('search').value;
    var resultsDiv = document.getElementById('searchResults');
    var flagSection = document.getElementById('flagSection');

    // Clear previous results and flags
    resultsDiv.innerHTML = '';
    flagSection.classList.add('hidden');

    // Create a text node for "Results for: " label
    var resultsLabel = document.createTextNode('Results for: ');
    resultsDiv.appendChild(resultsLabel);

    // Check if searchTerm contains JavaScript to execute
    if (searchTerm.includes('javascript:')) {
        var scriptToExecute = searchTerm.split('javascript:')[1];
        try {
            // Execute the JavaScript code
            eval(scriptToExecute);
            // Show flag section if successful
            flagSection.classList.remove('hidden');
        } catch(e) {
            console.error('Error executing script: ', e);
        }
    } else {
        // If no script to execute, just display the search term
        var searchTermNode = document.createTextNode(searchTerm);
        resultsDiv.appendChild(searchTermNode);
    }
}
</script>

@endsection
