@extends('layouts.new-app')

@section('content')
<section class="py-12 bg-white text-center mb-3 rounded-2xl">

    <!-- Conditional check for user permissions -->
    @can('create', App\Models\Vulnerability::class)
        <!-- Admin Welcome Message -->
        <h3 class="text-2xl font-bold text-blue-800 mb-6 font-mono">Welcome <span class="text-red-500">{{ Auth::user()->name }}</span> you are an administrator</h3>
        <p class="text-lg font-semibold text-gray-700 mb-6 font-mono">
            This is the editing page for administrators.
            <br>Click "Edit" to update or remove a vulnerability.
        </p>
    @else
        <!-- User Welcome Message -->
        <h2 class="text-4xl font-bold text-blue-800 mb-6 font-mono">Welcome <span class="text-red-600 text-4xl">{{ Auth::user()->name }}</span> This is the Web Vulnerabilities Learning Hub</h2>
        <p class="text-lg text-gray-600 mb-8">
            Explore the fascinating world of web vulnerabilities and enhance your understanding of web security.
            Click on any vulnerability below to learn more about it and discover how to protect against potential threats.
        </p>
    @endcan

</section>

<!-- Vulnerabilities Display Section -->
<section class="contact bg-white py-4 rounded-2xl">
    <div class="flex flex-wrap justify-center mx-auto">
        @php $counter = 0 @endphp
        @foreach($vulnerabilities as $vulnerability)
            <!-- Check user permissions for vulnerability edit -->
            @can('create', App\Models\Vulnerability::class)
                <div class="p-4 m-2 w-full sm:w-1/2 md:w-1/3 flex flex-wrap justify-center mx-auto rounded-2xl shadow-lg bg-gray-200 border-2 border-blue-900 transition-all ease-in-out duration-300 hover:scale-105">
                   
                
                <!-- Edit Button -->
                    <div class="flex justify-center items-center w-full h-full p-4 transition-transform transform h focus:scale-110 shadow-2xl rounded-2xl bg-white border-blue-900">
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
                
                    <a  href="{{ route('index') . '/' . $vulnerability->id . '/edit'}}" class="text-white font-semibold text-xl md:text-2xl font-mono 
                    flex justify-center items-center w-full  p-2 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-indigo-600   underline">
                            Edit
                        </a>
                    </div>
                </div>
            @else
                <!-- Display for non-editable users -->
                <div class="p-2 m-6 w-full sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/3  flex flex-wrap justify-center mx-auto rounded-2xl shadow-lg bg-white  transition-all ease-in-out duration-300 hover:scale-105">
                    <!-- Vulnerability Details Button -->
                    <div class="flex justify-center items-center w-full h-full p-4 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-indigo-700  hover:underline p-4">
                        <a href="{{ route('index') . '/' . $vulnerability->id }}" class="text-white font-semibold text-xl md:text-2xl font-mono">
                            {{ $vulnerability->name }}
                        </a>
                    </div>
                </div>
            @endcan
            @php $counter++ @endphp
        @endforeach
    </div>
</section>



@endsection
