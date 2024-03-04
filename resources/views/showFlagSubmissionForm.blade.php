@extends('layouts.new-app')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-center">
        <div class="w-full md:w-3/4 lg:w-1/2">
            <div class="bg-white shadow-md rounded-lg p-8">
                <h1 class="text-2xl font-bold mb-6">Submit Flag</h1>

                @if (session('status'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                @if (session('success'))
                <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mb-6" role="alert">
                    {{ session('success') }}
                </div>
                @endif

                <form method="POST" action="{{ route('submitFlag') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="text" class="block text-gray-700 font-bold mb-2">Flag Text</label>
                        <input id="text" type="text" class="form-input w-full @error('text') border-red-500 @enderror" name="text" required autofocus>
                        @error('text')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="level" class="block text-gray-700 font-bold mb-2">Flag Level</label>
                        <select id="level" name="level" class="form-select w-full @error('level') border-red-500 @enderror">
                            <option value="">Select Level</option>
                            <option value="low">Low</option>
                            <option value="medium">Medium</option>
                            <option value="high">High</option>
                            <option value="impossible">Impossible</option>
                        </select>
                        @error('level')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Submit Flag
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
