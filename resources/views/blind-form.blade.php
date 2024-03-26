@extends('layouts.new-app')

@section('content')
<div class="flex flex-col md:flex-row justify-center md:space-x-4 p-6 md:p-10">

    <div class="md:w-1/4 bg-white rounded-lg shadow-lg p-4 mb-6 md:mb-0">
        <x-sql-basic-menu>Blind SQL</x-sql-basic-menu>
    </div>

    <div class="md:w-1/3 container px-4 py-8 bg-white rounded-lg">
        <h2 class="text-xl font-bold mb-4 font-mono bg-gray-100 rounded-lg p-2">Vulnerable To Blind SQL injection</h2>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                <span class="block">{{ session('success') }}</span>
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
                <span class="block">{{ session('error') }}</span>
            </div>
        @endif

        <form action="{{ route('blind.challenge') }}" method="POST" class="mb-4 bg-gray-200 p-2  rounded-xl">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-lg font-mono font-bold text-gray-700 mb-4">Username:</label>
                <input type="text" class="form-input w-full rounded-md border-gray-300 shadow-sm" id="username" name="username" placeholder="Enter username" required>
            </div>
            <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded text-lg font-mono">Submit</button>
        </form>

        <div class="bg-gray-200 p-4 rounded-lg">
            <h2 class="text-lg font-bold mb-4 font-mono">Note:</h2>
            <p class="text-gray-800 font-mono">It's crucial to highlight the importance of secure coding practices, such as using parameterised queries and input validation, to protect applications from such attacks.</p>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 font-mono" role="alert">
                <span class="block">Performing these actions on systems without permission is illegal and unethical.</span>
            </div>
            <div class="m-5 w-80 transition-transform transform hover:scale-110 focus:scale-110 shadow-lg rounded-lg bg-green-600 p-2 font-bold mb-2 hover:bg-green-700">
                <a href="{{ route('secureBlind.form') }}" class="text-white p-8 font-mono">Mitigating Vulnerabilities</a>
            </div>
        </div>
    </div>

    <div class="md:w-1/2">
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <h2 class="text-xl font-bold mb-4 font-mono bg-gray-100 rounded-lg p-2">Blind SQL Injection Challenge</h2>
            <h2 class="text-xl font-bold mb-4 font-mono">Why Blind</h2>
            <p class="text-gray-800 font-mono">Blind SQL injection is a type of SQL Injection attack that asks the database true or false questions and determines the answer based on the application's response.</p>
            <p class="text-black font-bold font-mono">This attack is called "blind" because the attacker cannot see data from the database directly through the application. Instead, they infer data based on the application's behavior.</p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-bold mb-4 font-mono">Practical Scenarios</h2>
            <p class="mt-4 text-gray-800 font-mono mb-3">To explore blind SQL injection safely in an educational or authorized testing environment, utilize the following payloads in the username field to grasp the nuances of blind SQL injection vulnerabilities.</p>
            <p class="text-gray-800 font-mono">1. Enter <code>any known username</code> into the <span class="font-bold">Username</span> field. It should return "No admin user found." However, if you use "Admin" (assuming admin users exist in the system), it should return "Yes, there is at least one admin user!" due to the blind SQL injection yielding a True or False response.</p>
            <p class="text-gray-800 font-mono">2. Input the <code class="font-bold">(' OR '1'='1')</code> payload into the <span class="font-bold">Username</span> field. This tactic checks the database for admin users, signaling a possible blind SQL injection vulnerability. Such a flaw might be leveraged to circumvent authentication on susceptible login forms, as detailed earlier in this lesson on SQL injection.</p>
            <p class="text-gray-800 font-mono">3. The payload <code class="font-bold">( admin' AND SLEEP(10) AND '1'='1 )</code> directs the database to pause for 5 seconds if the query is altered successfully. This pause is a telltale sign of a successful query manipulation, indicating a susceptibility to blind SQL injection.</p>
            <p class="bg-gray-200 font-bold">This code potentially cause a denial of service (DoS) attack, depending on the configuration of the database server and the impact of the SLEEP function.</p>
        </div>
    </div>

</div>
@endsection
