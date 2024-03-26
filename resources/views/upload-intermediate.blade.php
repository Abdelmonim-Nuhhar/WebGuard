@extends('layouts.new-app')

@section('content')


<div class="flex justify-between">
   
    <div class="w-1/3 bg-white rounded-2xl mr-4 shadow-md p-1">
        <x-file-upload-menu><span class="mr-2">&#8592;</span> <!-- Back sign --></x-file-upload-menu>
    </div>



<!--  Intermediat File Upload Section -->
    <div class="flex flex-col m-1 w-2/3 bg-white rounded-lg shadow-md p-6 ">
        <h2 class="text-xl font-semibold font-mono text-gray-800 mb-4">Intermediate File Upload</h2>

        @if (session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded-md mb-4" role="alert">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 text-red-800 px-4 py-2 rounded-md mb-4" role="alert">{{ session('error') }}</div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 text-red-800 px-4 py-2 rounded-md mb-4" role="alert">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('upload.intermediate') }}" method="POST" enctype="multipart/form-data" class="space-y-4 bg-gray-200 rounded-2xl p-4">
            @csrf
            <input type="file" name="file" class="block w-full text-sm text-green-700 file-input">
            <button type="submit" class="px-6 py-2 bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 text-white font-bold rounded-md">Upload</button>
        </form>
    </div>

    <!-- Intermediat Basic INFO Section -->
    <div class="bg-white rounded-lg shadow-lg p-6 font-sans">
            <h2 class="text-xl font-bold font-mono text-gray-800 mb-2">3- Intermediat Security Level Upload</h2>
            <p class="text-gray-600">This level implements stricter validation rules, allowing only 
                specific image MIME types (JPEG, PNG) and further reducing the maximum file size to 1MB.
                </p> <br>

            <p class="text-gray-900 font-bold font-mono "> This level aims to reduce the risk of uploading disguised malicious files by checking the MIME type,
                  though it's still not foolproof against sophisticated attacks that spoof MIME types.</p>
        </div>

</div>



@endsection