@extends('layouts.new-app') <!-- Extend main layout -->

@section('content')
<div class="flex flex-wrap justify-center items-start gap-4 p-10">
   
    <!-- XSS Menu Section -->
    <div class="flex-1 min-w-1/3 bg-gray-200 dark:bg-gray-700 rounded-2xl shadow-md p-4">
        <x-sql-basic-menu></x-sql-basic-menu>
    </div>
   
    <!-- Practice Section -->
    <div class="flex-1 min-w-2/3 bg-gray-200 dark:bg-gray-700 rounded-xl shadow-lg p-6 space-y-6">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 border-b border-gray-200 dark:border-gray-600">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </div>
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __("You're logged in!") }}

                @if(session('success'))
                    <div class="mt-4 p-4 bg-green-100 dark:bg-green-700 text-green-800 dark:text-green-200 rounded-md">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
