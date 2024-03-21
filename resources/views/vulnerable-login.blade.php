@extends('layouts.new-app') <!-- Extend main layout -->

@section('content')
<div class="flex flex-col md:flex-row justify-center md:space-x-4 p-6 md:p-10">

    <!-- XSS Menu Section -->
    <div class="md:w-1/3 bg-white rounded-2xl shadow-lg p-6 mb-6 md:mb-0">
        <x-sql-basic-menu></x-sql-basic-menu>
    </div>
   
    <!-- Login Form Section -->
    <div class="md:w-1/3">
        <div class="bg-white rounded-2xl shadow-lg p-6 mb-6">
            <h2 class="text-2xl font-bold mb-6">Vulnerable Login Form</h2>
            {{-- Check for error messages and display them --}}
            @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('vulnerable.login.submit') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username:</label>
                    <input type="text" id="username" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div>
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                    <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex items-center justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Educational Content Section -->
    <div class="md:w-1/2 space-y-6">
    <div class="bg-white rounded-2xl shadow-lg p-6 font-mono">
        <h2 class="text-2xl font-bold mb-4 font-mono">Exploiting Vulnerable Login Form</h2>
        <p class="text-gray-800">SQL injection poses significant risks, including unauthorized access to sensitive data, data loss, or corruption. This vulnerability specifically affects the "name" field within the application. It emerges due to the direct integration of user input into application queries without adequate sanitization or parameterization measures in place.</p>
        <p class="text-gray-800 font-bold">To safeguard the integrity of the primary application, the password field is secured by using Laravel's Hash::check() function.</p>
    </div>

    <div class="bg-white rounded-2xl shadow-lg p-6">
        <h2 class="text-2xl font-bold mb-4 font-mono">A Practical Login Scenario:</h2>
        <p class="text-gray-800">For instance, an attacker can exploit the SQL injection vulnerability by entering a payload like <code>' OR '1'='1</code> into the <span class="font-bold">Name</span> field. This payload alters the query's logic to always evaluate as true, effectively bypassing any authentication checks and granting unauthorized access.</p>

        <p class="text-gray-800 mt-4 font-mono">To safely explore and demonstrate this vulnerability, follow these steps in a controlled environment:</p>

        
            <li class="font-mono">Exploit the Vulnerability:
                <ol class="list-decimal list-inside">
                    <li>Enter the SQL injection payload <code>' OR '1'='1</code> into the <span class="font-bold">Name</span> field.</li>
                    <li>Use the password (1234) in the <span class="font-bold">Password</span> field. Only one password per user is provided for practice purposes to safeguard the integrity of the primary application.</li>
                </ol>
            </li>
        
    </div>
</div>


</div>
@endsection
