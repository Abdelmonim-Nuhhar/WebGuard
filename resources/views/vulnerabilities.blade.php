@extends('layouts.new-app')

@section('content')
<div class="flex justify-between">
   
    <!-- Vulnerabilities Display Section -->
    <div class="w-1/3 bg-white rounded-2xl mr-4 shadow-md p-4">
        <section class="bg-white rounded-xl">
            <div class="bg-blue-100 p-4 rounded-lg">
                @php $counter = 0 @endphp
                @foreach($vulnerabilities as $vulnerability)
                    <!-- Check user permissions for vulnerability edit -->
                    @can('create', App\Models\Vulnerability::class)
                        <div class="mb-4 last:mb-0">
                            <!-- Edit Button -->
                            <div class="flex flex-col justify-between bg-gray-100 p-3 rounded-lg border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                                <!-- Vulnerability Details -->
                                <div class="text-gray-600 text-sm mb-2">
                                    <strong class="font-semibold text-red-500">{{ $vulnerability->name }}</strong>
                                    <div>ID: <span class="text-red-400">{{ $vulnerability->id }}</span></div>
                                    <div>Description: <span class="text-red-400">{{ $vulnerability->description }}</span></div>
                                    <div>Severity: <span class="text-red-400">{{ $vulnerability->severity }}</span></div>
                                    <div>Mitigation: <span class="text-red-400">{{ $vulnerability->mitigation }}</span></div>
                                    <div>Status: <span class="text-red-400">{{ $vulnerability->is_fixed ? 'Fixed' : 'Not fixed' }}</span></div>
                                </div>
                    
                                <a href="{{ route('index') . '/' . $vulnerability->id . '/edit'}}" class="text-white text-sm bg-blue-600 hover:bg-blue-700 rounded-md px-3 py-2 mt-2 transition duration-150 ease-in-out">
                                    Edit
                                </a>
                            </div>
                        </div>
                    @else
                        <!-- Display for non-editable users -->
                        <div class="mb-4 last:mb-0 p-2 bg-indigo-200  hover:bg-indigo-300 rounded-xl border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                            <div class="flex justify-center items-center p-3">
                                <a href="{{ route('index') . '/' . $vulnerability->id }}" class="text-gray-900 hover:text-blue-900 font-medium text-1g font-mono font-bold">
                                    {{ $vulnerability->name }}
                                </a>
                            </div>
                        </div>
                    @endcan
                    @php $counter++ @endphp
                @endforeach
            </div>
        </section>
    </div>
   
    <!-- Practice Section -->
    <div class="w-2/3 bg-gray-200 rounded-lg shadow-md p-6">
        <section class="py-8  text-center rounded-xl bg-white">
            <!-- Conditional check for user permissions -->
            @can('create', App\Models\Vulnerability::class)
                <!-- Admin Welcome Message -->
                <h3 class="text-xl font-semibold text-blue-700 mb-4  font-mono">Welcome <span class="text-red-500">{{ Auth::user()->name }}</span>, you are an administrator.</h3>
                <p class="text-sm text-gray-800 mb-4">
                    This is the editing page for administrators.
                    <br>Click "Edit" to update or remove a vulnerability.
                </p>
            @else
                <!-- User Welcome Message -->
                <h2 class="text-xl font-semibold text-blue-700 mb-4 font-mono">Welcome, <span class="text-red-500">{{ Auth::user()->name }}</span>. This is the Web Vulnerabilities Learning Hub.</h2>
                <p class="text-sm text-gray-800 mb-4 font-mono" >
                    Explore the fascinating world of web vulnerabilities and enhance your understanding of web security.
                    <br>Click on any vulnerability to learn and practice more about it and how to protect against potential threats.
                </p>
            @endcan
        </section>

        <section class="py-8  text-center rounded-xl ">
            <!-- news-->
        </section>
    </div>
</div>
@endsection
