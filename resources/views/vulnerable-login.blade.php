@extends('layouts.new-app')

@section('content')
<div class="flex flex-col md:flex-row justify-center md:space-x-4 p-6 md:p-10">

    <div class="md:w-1/2 bg-white rounded-lg shadow-lg p-4 mb-6 md:mb-0">
    <div class="m-2 flex items-center bg-indigo-200 hover:bg-indigo-300 rounded-xl p-2 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
            <a href="{{ route('sql.injections') }}" class="text-gray-700 font-semibold text-lg font-mono flex items-center pl-8">
                <span class="text-2xl mr-2 ">&#8592;</span> <!-- Big back sign -->
                SQL Intro & Menu
            </a>
        </div>
        <p class="text-xl font-bold "> Practise Sections</p>

        <div class="bg-white rounded-lg shadow-lg p-4 mb-6">
            <h2 class="text-lg font-bold mb-4">Vulnerable Login Form</h2>

            @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 rounded-lg mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('vulnerable.login.submit') }}" method="POST" class="space-y-2 bg-gray-200 rounded-xl p-4">
                @csrf
                <div>
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-1">Username:</label>
                    <input type="text" id="username" name="username" class="shadow appearance-none border rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div>
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-1">Password:</label>
                    <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded focus:outline-none focus:shadow-outline">
                        Login
                    </button>
                </div>
            </form>
        </div>
    

    </div>

 

    <div class="md:w-1/2 space-y-4">
        <div class="bg-white rounded-lg shadow-lg p-4 font-mono">
            <h2 class="text-lg font-bold mb-2">Exploiting Vulnerable Login Form</h2>
            <p class="text-gray-800">SQL injection poses significant risks, including unauthorized access to sensitive data, data loss, or corruption.</p>
            <p class="text-gray-800 font-bold">To safeguard the integrity of the primary application, the password field is secured by using Laravel's Hash::check() function.</p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-4">
            <h2 class="text-lg font-bold mb-2">A Practical Login Scenario:</h2>
            <p class="text-gray-800">For instance, an attacker can exploit the SQL injection vulnerability by entering a payload like <code>' OR '1'='1</code> into the <span class="font-bold">Name</span> field.</p>

            <p class="text-gray-800 mt-2 font-mono">To safely explore and demonstrate this vulnerability, follow these steps in a controlled environment:</p>

            <ol class="list-decimal list-inside">
                <li>Enter the SQL injection payload <code>' OR '1'='1</code> into the <span class="font-bold">Name</span> field.</li>
                <li>Use the password (1234) in the <span class="font-bold">Password</span> field.</li>
            </ol>
        </div>
    </div>

</div>
@endsection
