

    
@extends('layouts.new-app')

@section('content')

<div class="flex justify-between">
   
    <!-- XSS Menu Section -->
    <div class="w-1/3 bg-gray-100 rounded-2xl mr-4 shadow-md p-1">
        <x-sessionID-levels-menu></x-sessionID-levels-menu>
    </div>
   
    <!-- Practice Section -->


    <div class="w-2/3 bg-white rounded-xl p-6">
    <x-sessionID-practise-style>
    Challenge Level: <br><br>
     This level presents a session ID with seemingly strong security measures, challenging participants 
    to attempt to crack it. Despite its complexity, understanding the factors influencing its generation can provide 
    valuable insights into strengthening session security.
    If you succeed, you will receive a flag. Don't forget to submit your flag.

    </x-sessionID-practise-style>

    <div class="bg-gray-300 p-6 mb-8 rounded-2xl hover:bg-gray-200 level-section" id="impossible" style="display: block;">
            <h2 class="text-xl font-semibold mb-2 text-red-800">Challenge Level</h2>
            <form method="POST" action="{{ route('weak_session.impossible') }}">
                @csrf 
                <button type="submit" class="bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-4 rounded">
                        Generate Session Challenge ID 
                </button>
                </form>

                <form method="POST" action="{{ route('weak_session.impossible') }}">
            @csrf 
            <div class="mt-4">
                <label for="found_session_id_high" class="block text-gray-700 text-sm font-bold mb-2">Please enter your guess for the next session ID:</label>
                <input type="text" id="found_session_id_impossible" name="found_session_id_impossible" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-4 rounded">
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
