

<!-- reflected-xss-impossible.blade.php -->

@extends('layouts.new-app')

@section('content')
<div class="flex justify-between">
   
    <!-- XSS Menu Section -->
    <div class="w-1/3 bg-white-100 rounded-2xl mr-4 shadow-md p-1">
        <x-xss-types-menu></x-xss-types-menu>
    </div>
   
    <!-- Practice Section -->
    <div class="w-2/3 bg-white-100 rounded-xl p-6">
        
        <div class="bg-gray-200 p-8 rounded-2xl">
            <h1 class="text-2xl font-bold mb-4 font-mono">Reflected XSS Vulnerability - Impossible Level</h1>

            <form method="GET" action="{{ route('xss.impossible') }}">
                <label for="name" class="block text-xl mb-4 font-medium text-gray-700">Enter your name:</label>
                <input type="text" id="name" name="name" class="mt-4 p-4 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-2xl font-mono">
                <!-- Include Anti-CSRF token -->
                <input type="hidden" name="user_token" value="{{ csrf_token() }}">
                <button type="submit" class="mt-4 w-full px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-300">Submit</button>
            </form>

            @isset($name)
                <h2 class="text-2xl font-bold mt-4">Hello, <span class="text-indigo-600">{!! $name !!}</span>!</h2>
            @endisset
        </div>
    </div>
</div>
@endsection