@extends('layouts.new-app')

@section('content')
<div class="flex justify-center items-start space-x-4 p-6">

    <div class="w-1/3 rounded-lg shadow-md p-4">
        
        <div class="m-2 flex items-center bg-indigo-200 hover:bg-indigo-300 rounded-xl p-2 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
            <a href="{{ route('sql.injections') }}" class="text-gray-700 font-semibold text-lg font-mono flex items-center pl-8">
                <span class="text-2xl mr-2">&#8592;</span> <!-- Big back sign -->
                SQL Intro & Menu
            </a>
        </div>

        <form method="POST" action="{{ route('customer.search') }}" class="space-y-4 space-y-4 bg-gray-200 p-4 rounded-lg font-mono border border-blue-700">
            @csrf
            <div>
                <label for="id" class="block text-lg font-mono font-bold text-gray-700">Enter Customer ID:</label>
                <div class="mt-1">
                    <input type="text" name="id" id="id" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>
            <div>
                <input type="submit" value="Search" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            </div>
        </form>
    </div>

    <div class="w-2/3 bg-gray-200 rounded-xl shadow-lg p-6 space-y-4">



        <p class="mb-2 text-lg">Basic SQL Injection:</p>
        <div class="bg-white p-4 rounded-lg font-mono">
            <p>SQL injection is a critical security vulnerability that enables attackers to manipulate the queries executed by an application on its database. In the case of basic SQL vulnerability, input fields within the application are inadequately sanitized. These fields, typically used to display customer details retrieved from the database, become susceptible to exploitation by injecting malicious SQL code.</p>
        </div>

        <p class="mb-2 text-lg">The scenario:</p>
        <div class="bg-white p-4 rounded-lg font-mono">
            <p>To assess if a field is vulnerable to SQL injection, attackers often attempt to inject basic SQL code such as '1. If the field is vulnerable, the application may display SQL errors, indicating the presence of a SQL injection vulnerability. In the scenario of a user ID input field, entering the string ( A'!='1@1.1 ) can manipulate the SQL query to return all records from the customers table. This manipulation effectively bypasses any user authentication checks, granting unauthorized access to sensitive information.</p>
        </div>
    </div>
</div>
@endsection
