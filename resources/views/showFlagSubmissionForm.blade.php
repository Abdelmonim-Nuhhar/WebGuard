@extends('layouts.new-app')

@section('content')
<div class="flex justify-between">
    <div class="w-2/3 bg-white rounded-2xl mr-2 shadow-md p-4">

    <div class=" bg-gray-200 text-gray-600  font-mono rounded-2xl p-2">
    You need to copy your flag from the challenges. Flags look like this: (<span class="text-green-600 font-bold">flag:{somethingrandom}</span>). 
    Insert it in the below form in the 'Flag Here' field. For ' Selecting Vulnerability ' filed, 
    choose the relevant vulnerability.
    </div>
        <div class="bg-white rounded-lg p-2 mt-2 rounded-2xl">
            <h1 class="text-2xl font-bold mb-2 font-mono">Submit Flag</h1>

            <!-- Status Messages -->
            @if (session('status'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-2 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @if (session('success'))
                <div class="bg-blue-100 border-l-4 border-blue-500 text-green-700 font-mono text-lg p-2 mb-4 rounded-2xl" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="bg-blue-100 border-l-4 border-blue-500 text-red-700 font-mono text-lg p-2 mb-4 rounded-2xl" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('submitFlag') }}" class="space-y-2 bg-gray-200 p-4 rounded-2xl">
                @csrf

                <!-- Flag Input -->
                <div class="mb-2">
                    <label for="text" class="block text-gray-700 font-bold mb-1 text-lg font-mono">Flag Here</label>
                    <input id="text" type="text" class="form-input w-full rounded-lg p-1 text-base" name="text" required autofocus value="{{ old('text') }}">
                    @error('text')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Level Selection -->
                <div class="mb-2">
                    <label for="level" class="block text-gray-700 font-bold text-lg font-mono">Flag Vulnerability</label>
                    <select id="level" name="level" class="form-select w-full rounded-lg p-2 font-mono text-base">
                        <option value="">Selecting Vulnerability</option>
                        
                        <option value="Session Id low Security">Session Id low Security</option>
                        <option value="Session Id medium Security">Session Id medium Security</option>
                        <option value="Session Id high Security">Session Id high Security</option>
                        <option value="Session Id impossible Security">Session Id impossible Security</option>
                        <option value="File Upload Challenge">File Upload Challenge</option>
                        <option value="XSS Reflected">XSS Reflected</option>
                        <option value="XSS Store">XSS Store</option>
                        <option value="XSS BaseDom">XSS BaseDom</option>
                        <option value="Security MisConfig">Security MisConfig</option>
                        <option value="SQL basic">SQL basic</option>
                        <option value="SQL Medium">SQL Medium</option>
                        <option value="SQL Advance">SQL Advance</option>
                    </select>
                    @error('level')
                        <p class="text-red-500 text-base font-mono mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Form Actions -->
                <div class="flex items-center justify-between mt-4">
                    <a href="{{ url()->previous() }}" class="px-6 py-2 bg-green-600 hover:bg-grren-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 text-white font-bold rounded-md">
                        <span class="mr-2">&larr;</span> Back
                    </a>
                    <button type="submit" class="px-6 py-2 bg-green-600 hover:bg-grren-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 text-white font-bold rounded-md">
                        Submit Flag
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="w-1/3 bg-white -lg shadow-md p-4">
        <div>
            <!-- Welcoming Message -->
            <p class="text-lg font-bold font-mono">Welcome, <span class="text-indigo-600">{{ Auth::user()->name }}! </span></p>
            <p class="mb-4 text-sm font-semibold font-mono">Track your learning progress here:</p>

            <!-- Flags Display -->
            @foreach ($flags as $flag)
                @if (Auth::user()->id == $flag->user_id)
                    <div class="flex items-center space-x-2 mb-2">
                        <span class="text-green-600 font-bold bg-indigo-100 p-2  rounded-2xl">✓</span>
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded-lg">
                            {{ $flag->level }} : COMPLETED
                        </button>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    

    

    
</div>
@endsection
