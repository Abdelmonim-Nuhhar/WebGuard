@extends('layouts.new-app') <!-- Extend main layout -->

@section('content')
<div class="flex justify-between space-x-4">
   
    <!-- XSS Menu Section -->
    <div class="w-1/3 bg-gray-100 rounded-2xl shadow-md p-4">
        <x-domXSS-levels></x-domXSS-levels> <!-- Assuming you have a similar component for DOM XSS levels -->
    </div>
   
    <!-- Practice Section -->
    <div class="w-2/3 bg-gray-200 rounded-xl shadow-lg p-6 space-y-6">
        <h2 class="text-xl font-bold mb-4">DOM-based XSS - Low Level Vulnerability</h2>
        
        <!-- Instructions -->
        <p class="mb-4">Enter a search term (javascript:alert('Dom-base XSS')). This example shows how easily JavaScript can be injected and executed due to improper handling of user input within the DOM.</p>
        
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
    </div>
</div>

<script>

function performSearch() {
    var searchTerm = document.getElementById('search').value;
    var resultsDiv = document.getElementById('searchResults');

    // Clear previous results
    resultsDiv.innerHTML = '';

    // Create a text node for "Results for: " label
    var resultsLabel = document.createTextNode('Results for: ');
    resultsDiv.appendChild(resultsLabel);

    // Check if searchTerm contains JavaScript to execute
    if (searchTerm.includes('javascript:')) {
        var scriptToExecute = searchTerm.split('javascript:')[1];
        try {
            // Execute the JavaScript code
            eval(scriptToExecute);
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
