@extends('layouts.new-app') <!-- Extend main layout -->

@section('content')
<div class="flex justify-between ">
   
    <!-- XSS Menu Section -->
    <div class="w-1/3 bg-gray-100 rounded-2xl shadow-md p-2">
        <x-storedXSS-levels></x-storedXSS-levels>
    </div>
   
    <!-- Practice Section -->
    <div class="w-1/3 bg-gray-200 rounded-xl shadow-lg p-2 space-y-4">
   
        <!-- Form for submitting new entries -->
        <form action="{{ route('storedXSS.storeLow') }}" method="POST" class="space-y-4 bg-white p-4 rounded-lg shadow">
            @csrf <!-- CSRF token for security -->
            <div>
            <label for="name" class="block mb-4 text-2xl font-bold font-mono text-gray-700">Stored XSS Low Level Vulnerability:</label>

                <label for="name" class="block text-sm font-medium text-gray-700">Your Name:</label>
                <input type="text" id="name" name="name" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Your Message:</label>
                <textarea id="message" name="message" rows="4" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm"></textarea>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white font-bold hover:bg-blue-800 text-lg py-3 px-5 rounded-lg  focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50">
            Submit
            </button>
        </form>

        <!-- Displaying comments -->
        <div class="space-y-4">
            @foreach ($comments as $comment)
                <div class="bg-white p-4 rounded-lg shadow">
                    <strong class="text-sm font-medium">{{ $comment->name }}</strong>: <span class="text-sm">{!! $comment->comment !!}</span>
                </div>
            @endforeach
        </div>

        <!-- Form for clearing the guestbook(database) -->
        <form action="{{ route('guestbook.clear') }}" method="POST" class="text-right">
            @csrf
            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50" onclick="return confirm('Are you sure you want to clear all entries?')">
                Clear Guestbook
            </button>
        </form>
    </div>

    <div class="w-1/3 bg-gray-200 rounded-xl shadow-lg p-2 space-y-4">
    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
    <p class="text-sm font-mono text-gray-800">
        At the Low Level, the application lacks basic input sanitization or escaping. User input is directly stored in the database and rendered in the browser without any filtering, allowing attackers to inject scripts that are executed when other users view the content. This level demonstrates the fundamental risk associated with trusting user input.
    </p>
    <p class="mt-4 text-red-600 text-sm">
        To understand the danger of stored XSS, try the following code snippet:<br>
        <code class="text-gray-900">&lt;script type='text/javascript'&gt;alert(document.cookie);&lt;/script&gt;</code>
    </p>
    <p class="mt-2 text-gray-700 text-sm font-mono">
        This script attempts to display the user's cookie information. Imagine if a malicious user injected such a script into the system; they could steal sensitive user data, such as authentication tokens or session IDs. Stored XSS vulnerabilities pose a significant threat to the security of web applications, making proper input validation and output encoding essential security practices.
    </p>
</div>


    </div>

</div>
@endsection


