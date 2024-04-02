@extends('layouts.new-app') <!-- Extend main layout -->

@section('content')

<div class="flex justify-between space-x-4">
   
    <!-- XSS Menu Section -->
    <div class="w-1/3 bg-gray-100 rounded-2xl shadow-md p-4">
    <x-storedXSS-levels></x-storedXSS-levels>
    </div>
   
    <!-- Practice Section -->
    <div class="w-1/3 bg-gray-200 rounded-xl shadow-lg p-6 space-y-6">
        
   
        <!-- Form for submitting new entries -->
        <form action="{{ route('storedXSS.storeHigh') }}" method="POST" class="space-y-4 bg-white p-4 rounded-lg shadow">
            @csrf <!-- CSRF token for security -->
            <div>
            <label for="name" class="block mb-4 text-1g font-bold font-mono text-gray-700">Stored XSS High Level Vulnerability:</label>
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

        <!-- Displaying the flag -->
        @if(session('message'))
            <div class="alert bg-blue-100 p-2 rounded-xl font-mono">{{ session('message') }}</div>
        @endif
        <!-- Displaying comments -->
        <div class="space-y-4">
            @foreach ($comments as $comment)
                <div class="bg-white p-4 rounded-lg shadow">
                    <strong class="text-sm font-medium">{{ $comment->name }}</strong>: <span class="text-sm">{!! $comment->comment !!}</span>
                </div>
            @endforeach
        </div>

        <!-- Form for clearing the guestbook -->
        <form action="{{ route('guestbook.clear') }}" method="POST" class="text-right">
            @csrf
            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50" onclick="return confirm('Are you sure you want to clear all entries?')">
                Clear Guestbook
            </button>
        </form>
    </div>


    <div class="w-1/3 bg-gray-200 rounded-xl shadow-lg p-6 space-y-6">
        <div class="bg-gray-100 p-6 rounded-lg shadow-md">
            <p class="text-lg text-gray-800">
                At the High Level, more comprehensive sanitization and validation are implemented. This might include using more strict content security policies, employing additional layers of input filtering, and aggressively whitelisting content that can be displayed. Despite these measures, there may still be loopholes or advanced techniques that can bypass the protections.
            </p>
            <div class="mt-4 p-4 bg-gray-100 rounded-lg">
    <p class="text-red-600 text-sm font-mono">
        To test the vulnerability , attempt the following code snippet:<br>
    </p>
    
    <pre class="bg-white p-1 mt-2 rounded"><code class="text-gray-900 text-sm">&lt;div onmouseover="alert('XSS')"&gt;Hover over me!&lt;/div&gt;</code></pre>
    <p class="mt-2 text-red-600 text-xl">On this level, there is a flag to find. Once located, remember to submit it in the flags section to track your learning progress.</p>
</div>

            </p>

        </div>
    </div>

</div>


@endsection
