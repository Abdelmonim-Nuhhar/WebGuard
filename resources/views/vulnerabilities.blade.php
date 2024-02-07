@extends('layouts.new-app')

@section('content')
<section class="py-12 bg-white text-center mb-3 rounded-2xl">

    <!-- Conditional check for user permissions -->
    @can('create', App\Models\Vulnerability::class)
        <!-- Admin Welcome Message -->
        <h3 class="text-xl font-bold text-blue-800 mb-6">Welcome Learning Hub Management For administrators</h3>
        <p class="text-lg font-semibold text-gray-700 mb-6 font-mono">
            This is the editing page for administrators.
            <br>Click "Edit" to update or remove a vulnerability.
        </p>
    @else
        <!-- User Welcome Message -->
        <h2 class="text-4xl font-bold text-blue-800 mb-6">Welcome to Web Vulnerabilities Learning Hub</h2>
        <p class="text-lg text-gray-600 mb-8">
            Explore the fascinating world of web vulnerabilities and enhance your understanding of web security.
            Click on any vulnerability below to learn more about it and discover how to protect against potential threats.
        </p>
    @endcan

</section>


<section class="contact bg-white py-4 rounded-2xl">
    @php $counter = 0 @endphp
    @foreach($vulnerabilities as $vulnerability)
    <div class="flex">
        <!-- Check user permissions for vulnerability edit -->
        @can('create', App\Models\Vulnerability::class)
            <!-- Check for even number of vulnerabilities -->
            @if($counter % 2 == 0)
                <div class="flex flex-wrap justify-between pl-16">
            @endif

            <!-- Vulnerability Details Card -->
            
            <div class="p-4 mx-2 my-2 rounded-2xl shadow-lg bg-gray-200 border-2 border-blue-900 max-w-xl ">
                
                <div class="flex justify-start">
                
                    <!-- Vulnerability Details -->
                    <p class="text-gray-700 p-5 font-medium text-base font-mono">
                    <span class="text-red-600 font-bold text-2xl">{{ $vulnerability->name }}</span>
                        <br><br>A Vulnerability details are as follows:
                        <br>
                        <br>The Vulnerability ID: <span class="text-red-500">{{ $vulnerability->id }}</span>
                        <br>The name: <span class="text-red-500">{{ $vulnerability->name }}</span>
                        <br>The description: <span class="text-red-500">{{ $vulnerability->description }}</span>
                        <br>The severity: <span class="text-red-500">{{ $vulnerability->severity }}</span>
                        <br>The mitigation could be: <span class="text-red-500">{{ $vulnerability->mitigation }}</span>
                        <br>The status (1 for fixed, 0 for not fixed): <span class="text-red-500">{{ $vulnerability->is_fixed }}</span>
                    </p>
                </div>
                <!-- Edit Button -->
                <div class="m-5 flex justify-center items-center transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl hover:underline bg-red-700 border-blue-300 p-5">
                    <a href="{{ route('index') . '/' . $vulnerability->id . '/' .'edit'}}" class="text-white font-semibold text-2xl font-mono">
                        Edit
                    </a>
                </div>
            </div>

            @php $counter++ @endphp

            <!-- Check for even number of vulnerabilities or last loop -->
            @if($counter % 2 == 0 || $loop->last)
                </div>
            @endif
        @else

        <!-- Vulnerabilities lists Section Starts -->
            <div class="flex mb-2">
                <!-- Vulnerability Name Column -->
                <div class="w-full sm:w-1/4">
                    <div class="bg-white hover:bg-gray-200 text-gray-800 p-3 rounded-2xl shadow-md text-center text-gray-800 p-5 font-semibold text-1xl font-mono">
                        The Vulnerability Name
                    </div>
                </div>

                <!-- Vulnerability Description Column -->
                <div class="w-full sm:w-3/4">
                    <div class="bg-white hover:bg-gray-200 text-gray-800 ml-2 p-3 rounded-2xl shadow-md text-center text-gray-800 p-5 font-semibold text-1xl font-mono">
                        The Vulnerability Description
                    </div>
                </div>
            </div>

            <!-- Non-Admin View of Vulnerabilities -->
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
        @endcan
    </div>
    @endforeach

    <!-- Additional Content -->
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

<!-- Components for later use -->
<x-vulnerability-card>
    <x-section-container>
        <strong>Hello there</strong> this is section 1
    </x-section-container>

    <x-section-container>
        <strong>Hello there</strong> this is section 2
    </x-section-container>
</x-vulnerability-card>
@endsection
