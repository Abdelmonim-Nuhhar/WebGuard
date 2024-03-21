@extends('layouts.new-app') <!-- Extend main layout -->

@section('content')
<div class="flex justify-center items-start space-x-4 p-10">
   
    <!-- SQL Menu Section -->
    <div class="w-1/3  rounded-2xl shadow-md p-4">
        <x-sql-basic-menu></x-sql-basic-menu>
    </div>
   
    <!-- Practice Section -->
    <div class="w-2/3 bg-gray-200 rounded-xl shadow-lg p-6 space-y-6">
        <form method="POST" action="{{ route('customer.search') }}" class=" space-y-4 bg-white p-4 rounded-2xl">
            @csrf 
            <div>
                <label for="id" class="block text-2xl font-mono font-bold font-medium text-gray-700">Enter Customer ID:</label>
                <div class="mt-1">
                    <input type="text" name="id" id="id" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>
            <div>
                <input type="submit" value="Search" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            </div>
        </form>


        <p class="mb-2 text-2xl ">Basic SQL Injection:</p>
                <div class=" mb-2 bg-white p-4 rounded-2xl font-mono text-gl">
                    <p>SQL injection is a critical security vulnerability that enables attackers to manipulate the
                         queries executed by an application on its database. In the case of basic SQL vulnerability,
                          input fields within the application are inadequately sanitized. These fields, 
                          typically used to display customer details retrieved from the database, become susceptible 
                          to exploitation by injecting malicious SQL code.</p>
                          <br>
                          <br>

                </div>

                <p class="mb-2 text-2xl ">The scenario:</p>
                <div class="text-1g mb-2 bg-white font-mono text-gl p-4 rounded-2xl">

                <p>
                          To assess if a field is vulnerable to SQL injection, attackers often attempt to inject basic
                           SQL code such as( '1 ). If the field is vulnerable, 
                          the application may display SQL errors, indicating the presence of a SQL injection vulnerability.
                          </p>
                    <p>In the scenario of a user ID input field, entering the string <code> ( A'!='1@1.1  )</code> can manipulate 
                        the SQL query to return all records from the customers table. This manipulation effectively
                         bypasses any user authentication checks, granting unauthorized access to sensitive information."</p>
                </div>

    </div>
</div>
@endsection
