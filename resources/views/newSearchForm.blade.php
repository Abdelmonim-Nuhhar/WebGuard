@extends('layouts.new-app')

@section('content')
<div class="flex justify-center items-start space-x-4 p-6">

    <div class="w-1/3 bg-white rounded-lg shadow-md p-4">
        <x-SQL-basic-menu> 2-Beyond Basic</x-SQL-basic-menu>
    </div>

    <div class="w-2/3 bg-gray-00 rounded-xl shadow-lg p-6 space-y-4">
        <form method="POST" action="{{ route('customer.search') }}" class="space-y-4 bg-white p-4 rounded-lg">
            @csrf
            <div>
                <label for="id" class="block text-lg font-semibold font-mono text-gray-700">Select Customer ID:</label>
                <select name="id" id="id" class="mt-1 block w-full p-2 font-mono text-lg border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 rounded-lg">
                    @for ($i = 9; $i <= 16; $i++)
                        <option class="text-lg" value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div>
                <input type="submit" value="Search" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            </div>
        </form>

        <p class="mb-2 text-lg">Beyond Basic:</p>
        <div class="bg-white p-4 rounded-lg font-mono">
            <p>At this level of security, measures have been implemented to mitigate SQL injection vulnerabilities. The input field has been replaced with a dropdown list, making it challenging for attackers to directly insert SQL injection attacks. Instead, attackers may resort to using web proxies like ZAP to bypass the frontend restrictions and exploit potential vulnerabilities.</p>
        </div>

        <p class="mb-2 text-lg">ZAPping Through Security:</p>
        <div class="bg-white p-4 rounded-lg font-mono">
            <p>To test for vulnerabilities, an attacker can utilize tools like ZAP. By entering '1' into the dropdown list, the attacker can check for SQL errors. If the application is vulnerable, SQL errors will be displayed. Additionally, attackers can employ the same code used in previous attacks to exploit any identified vulnerabilities.</p>
        </div>
    </div>
</div>
@endsection
