<!-- reflected-xss-high.blade.php -->

@extends('layouts.new-app')

@section('content')
<div class="flex justify-between">
   
    <!-- XSS Menu Section -->
    <div class="w-1/3 bg-red-100 rounded-2xl mr-4 shadow-md p-1">
        <x-xss-types-menu></x-xss-types-menu>
    </div>
   
     <!-- Practice Section -->
    <div class="w-2/3 bg-red-100 rounded-xl  p-6">
        
        <div class="bg-gray-100 p-8 rounded-2xl">
            <h1 class="text-2xl font-bold mb-4 font-mono">Reflected XSS Vulnerability - High Level</h1>

            <form method="GET" action="{{ route('xss.high') }}" class="space-y-8">
                <div>
                    <label for="name" class="block text-xl mb-4 font-medium text-gray-700">Enter your name please:</label>
                    <input type="text" id="name" name="name" class="mt-4 p-4 border border-gray-300 rounded-md focus:outline-none focus:ring
                     focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-2xl font-mono">
                </div>
                <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-300">Submit</button>
            </form>

            @if($name)
                <h2 class="text-2xl font-bold mt-4">Hello, <span class="text-indigo-600">{!! $name !!}</span>!</h2>
            @endif
        </div>
    </div>
</div>
@endsection
