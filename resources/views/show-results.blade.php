@extends('layouts.new-app') <!-- Extend main layout -->

@section('content')
<div class="flex justify-center items-start space-x-4 p-10">
   

    <!-- Practice Section -->
    <div class="w-2/3 bg-gray-200 rounded-xl shadow-lg p-6 space-y-6">

    <p class="text-xl font-bold "> search Results</p>
        <div class="m-2 flex items-center bg-indigo-200 hover:bg-indigo-300 rounded-xl p-2 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
            <a href="{{ route('sql.injections') }}" class="text-gray-700 font-semibold text-lg font-mono flex items-center pl-8">
                <span class="text-2xl mr-2 ">&#8592;</span> <!-- Big back sign -->
                SQL Intro & Menu
            </a>
        </div>
    @if($results)
        @foreach($results as $row)
        <div class="p-4 bg-white rounded-2xl border shadow-sm">
            <h3 class="text-2xl font-semibold  font-mono text-gray-800">User ID: {{ $row->id }}</h3>
            <p class="text-gray-600 font-semibold  font-mono">First Name: {{ $row->first_name }}</p>
            <p class="text-gray-600 font-semibold  font-mono">Last Name: {{ $row->last_name }}</p>
            <p class="text-gray-600 font-semibold  font-mono">Username: {{ $row->username }}</p>
            <p class="text-gray-600 font-semibold  font-mono">Password: {{ $row->password }}</p> <!-- Ensure to not display passwords in plain text in real applications -->
            <p class="text-gray-600 font-semibold  font-mono">Email: {{ $row->email }}</p>
            <p class="text-gray-600 font-semibold  font-mono">Created At: {{ $row->created_at ?? 'N/A' }}</p>
            <p class="text-gray-600 font-semibold  font-mono">Updated At: {{ $row->updated_at ?? 'N/A' }}</p>
        </div>
        @endforeach
    @else
        <p class="text-red-600 font-mono text-2xl">No results found.</p>
    @endif




    </div>
</div>
@endsection
