@extends('layouts.new-app')

@section('content')
<section class="py-12 bg-white text-center  mb-3 rounded-2xl ">
    <h2 class="text-4xl font-bold text-blue-800 mb-6">Welcome to Web Vulnerabilities Learning Hub</h2>
    <p class="text-lg text-gray-600 mb-8">
        Explore the fascinating world of web vulnerabilities and enhance your understanding of web security.
        Click on any vulnerability below to learn more about it and discover how to protect against potential threats.
    </p>
</section>


<!-- vulnerabilities lists Section Starts -->
<div class="flex mb-2">
    <div class="w-full sm:w-1/4">
        <div class="bg-white hover:bg-gray-200 text-gray-800 p-3 rounded-2xl shadow-md text-center text-gray-800 p-5 font-semibold text-1xl font-mono">
        The Vulnerability Name
        </div>
    </div>

    <div class="w-full sm:w-3/4">
        <div class="bg-white hover:bg-gray-200 text-gray-800 ml-2 p-3 rounded-2xl shadow-md text-center text-gray-800 p-5 font-semibold text-1xl font-mono">
        The Vulnerability Description
        </div>
    </div>
</div>

<section class="contact bg-white py-4 rounded-2xl">
@foreach($vulnerabilities as $vulnerability)


    <div class="flex">
        <div class="m-6 w-full sm:w-1/4 p-3 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-red-300 border-blue-300">
            <a href="{{ route('index') . '/' . $vulnerability->id }}" class="text-gray-800 p-5 font-semibold text-1xl font-mono underline">
            {{ $vulnerability->name }}
            </a>
        </div>

        <div class="m-8 m-5w-full sm:w-3/4">
            <div class="bg-blue-100 hover:bg-blue-200 text-gray-800 p-6 rounded-2xl shadow-md text-center text-1xl">
                <p>
                {{ $vulnerability->description }}
                </p>
            </div>
        </div>

    </div>

    

@endforeach

<div class="flex">
    <div class="w-full sm:w-1/4">
        <div class="bg-green-500 hover:bg-green-400 text-white p-6 rounded shadow-md text-center">
            1
        </div>
    </div>

    <div class="w-full sm:w-3/4">
        <div class="bg-green-500 hover:bg-green-400 text-white p-6 rounded shadow-md text-center">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
    </div>
</div>

    
</section>

<div class="flex">
<div class="w-full sm:w-1/4">
    <div class="bg-green-500 hover:bg-green-400 text-white p-6 rounded shadow-md text-center">
        1
    </div>
</div>

<div class="w-full sm:w-3/4">
    <div class="bg-green-500 hover:bg-green-400 text-white p-6 rounded shadow-md text-center">
        2
    </div>
</div>
</div>



<!-- Vulnerabilities lists Section Ends -->

<!-- This are components   will be use later  -->
<x-vulnerability-card >
       <x-section-container>
        <strong>Hello there</strong> this is section 1
       </x-section-container>

       <x-section-container>
        <strong>Hello there</strong> this is section 2
       </x-section-container>
     
</x-vulnerability-card>
@endsection


   




