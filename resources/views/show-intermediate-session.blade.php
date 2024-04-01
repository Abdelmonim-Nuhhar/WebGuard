
@extends('layouts.new-app')

@section('content')

<div class="flex justify-between">
   
    <!-- XSS Menu Section -->
    <div class="w-1/3 bg-gray-100 rounded-2xl mr-4 shadow-md p-1">
        <x-sessionID-levels-menu>
            <x-session-id-intro-link></x-session-id-intro-link>
        </x-sessionID-levels-menu>
    </div>
   
    <!-- Practice Section -->


    <div class="w-2/3 bg-white rounded-xl p-6">
    <x-sessionID-practise-style>
    Intermediate Level:<br><br>
    <p class="text-sm font-mono">
     At this level, session ID generation is slightly improved compared to the basic level,
     but still poses vulnerabilities that can be exploited by attackers.
    <br>
    Click <span class="font-bold text-1g text-blue-800">"Generate Session  Intermediate ID" </span> multiple times to observe the session pattern. 
    Enter your guess for the next session Intermediate ID and click on <span class="font-bold text-1g text-blue-800">"Check Session ID" </span>
    to verify your prediction for the next session ID. <br>
    If you succeed, you will receive a flag. Don't forget to submit your flag.
    </p>

    </x-sessionID-practise-style>

    <div class="bg-gray-300 p-2 mb-8 rounded-xl hover:bg-gray-200 level-section" >
           
    <form method="POST" action="{{ route('weak_session.medium') }}">
        @csrf 
        <button type="submit" class="px-6 py-2 bg-green-600 hover:bg-grren-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 text-white font-bold rounded-md">
                Generate Session Intermediate ID 
        </button>
    </form>

    <form method="POST" action="{{ route('weak_session.medium') }}">
    @csrf 
    <div class="mt-4">
        <label for="found_session_id_medium" class="block text-gray-700 text-sm font-bold mb-2">Please enter your guess for the next session ID:</label>
        <input type="text" id="found_session_id_medium" name="found_session_id_medium" class="px-6 py-2 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 text-black font-bold rounded-md">
    </div>
    <div class="mt-4">
        <button type="submit" class="px-6 py-2 bg-green-600 hover:bg-grren-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 text-white font-bold rounded-md">
            Check Session ID
        </button>
    </div>
</form>
</div>


    <div class="bg-gray-100 p-3 mb-4 rounded-2xl hover:bg-gray-200 border-blue-700 border-2">
        <hr class="my-2 border-blue-800">
        @if (session('message'))
            <div class="alert alert-info text-xl font-semibold mb-2 text-red-600">
            Generated {{ session('message') }}
            </div>
            
        @endif
    </div>
    
    </div>
</div>
@endsection
