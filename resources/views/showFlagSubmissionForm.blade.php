@extends('layouts.new-app')



@section('content')


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>WEB GUARD</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <!--link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    < Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!--script src="{{ asset('js/my.js') }}"></script-->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

            <!-- Display vulnerability information -->
            @if ($vulnerability)
            <div class="bg-blue-100 border-l-4 border-blue-500 text-green-700 font-mono text-2xl p-4 mb-6 rounded-2xl" role="alert">
                <p>Vulnerability Name: {{ $vulnerability->name }}</p>
                <p>Level: {{ session('vulnerabilityName') }}</p>
            </div>
            @endif
</head>

    <div class="flex justify-center mb-16">
        <div class="w-full md:w-3/4 lg:w-1/2">
            <div class="bg-white shadow-md rounded-lg p-8 mt-16 rounded-2xl">
                <h1 class="text-3xl font-bold mb-6 font-mono">Submit Flag</h1>

                @if (session('status'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                    {{ session('status') }}
                </div>
                @endif
   <!-- Display success message -->
   @if (session('success'))
            <div class="bg-blue-100 border-l-4 border-blue-500 text-green-700 font-mono text-2xl p-4 mb-6 rounded-2xl" role="alert">
                {{ session('success') }}
            </div>
            @endif


                @if (session('error'))
                <div class="bg-blue-100 border-l-4 border-blue-500 text-red-700 font-mono text-2xl p-4 mb-6 rounded-2xl" role="alert">
                    {{ session('error') }}
                </div>
                @endif

                <form method="POST" action="{{ route('submitFlag') }}">
                    @csrf

                    <div class="mb-4 ">
                        <label for="text" class="block text-gray-700 font-bold mb-2 font-semibold text-xl">Flag Here</label>
                        <input id="text" type="text" class="form-input w-full @error('text') border-red-500 @enderror rounded-2xl p-4 text-xl" 
                        name="text" required autofocus>
                        @error('text')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="level" class="block text-gray-700 font-bold text-2xl font-mono">Flag Level</label>
                        <select id="level" name="level" class="form-select w-full @error('level') border-red-500 @enderror mb-4 p-4 
                        text-xl font-semibold rounded-2xl pt-4">
                            <option value="">Select Level</option>
                            <option value="Session Id low Security">Session Id low Security</option>
                            <option value="Session Id medium Security">Session Id medium Security</option>
                            <option value="Session Id high Security">Session Id high Security</option>
                            <option value="Session Id impossible Security">Session Id impossible Security</option>
                            <option value="File Upload Challenge">File Upload Challenge</option>
                            <option value="XSS Reflected">XSS Reflected</option>
                            <option value="XSS Store">XSS Store</option>
                            <option value="XSS BaseDom">XSS BaseDom</option>
                            <option value="Security MisConfig">Security MisConfig</option>
                            <option value="SQL basic">SQL basic</option>
                            <option value="SQL Medium">SQL Medium</option>
                            <option value="SQL Advance">SQL Advance</option>


                        </select>
                        @error('level')
                        <p class="text-red-500 text-2xl font-mono mt-1">{{ $message }}</p>
                        @enderror
                    </div>


                    
                    <div class="flex items-center justify-between mt-4 p-8 bg-gray-200 mt-4 rounded-2xl">

                    <a href="{{ route('sessionID') }}"  class="bg-blue-800 hover:bg-green-600 text-white p-4 font-bold  rounded-2xl">
                    <span class="mr-2">&larr;</span> Back
                    </a>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-4 rounded-2xl">
                        Submit Flag
                    </button>
                    

                    </div>

                </form>
            </div>
        </div>
    </div>
    <div>
        
 


    @if (session('success'))
    @if (session('vulnerabilityName'))
        <div class="bg-blue-100 border-l-4 border-blue-500 text-green-700 font-mono text-2xl p-4 mb-6 rounded-2xl" role="alert">
            <p>Vulnerability Name: {{ session('vulnerabilityName') }}</p>
            <p>Level: {{ $vulnerability->name }}</p>
            <p>Flag Submitted Successfully!</p>
        </div>
    @endif
@endif
    </div>

@endsection
