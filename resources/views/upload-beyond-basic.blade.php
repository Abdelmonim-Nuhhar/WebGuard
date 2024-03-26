

@extends('layouts.new-app')

@section('content')

<div class="flex justify-between">
   
    <div class="w-1/3 bg-white rounded-2xl mr-4 shadow-md p-1">
        <x-file-upload-menu><span class="mr-2">&#8592;</span> <!-- Back sign --></x-file-upload-menu>
    </div>




 
    <!-- Beyond Basic File Upload Section -->
    <div class="flex flex-col m-1 w-2/3 bg-white rounded-lg shadow-md p-6 ">
    <h2 class="text-xl  font-semibold font-mono text-gray-800 mb-4"> Beyond Basic File Upload</h2>

        @if (session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded-md" role="alert">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 text-red-800 px-4 py-2 rounded-md" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('upload.beyond_basic') }}" method="POST" enctype="multipart/form-data" class="space-y-4 bg-gray-200 rounded-2xl p-4 mt-2">
            @csrf
            <input type="file" name="file" class="block w-full text-sm text-green-700 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100 required">
            <button type="submit" class="px-6 py-2 bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 text-white font-bold rounded-md">Upload</button>
        </form>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-6 font-sans">
            <h2 class="text-xl font-bold font-mono text-gray-800 mb-2">2-Beyond Basic  Level Upload</h2>
            <p class="text-gray-600">At this level, basic validation is introduced to restrict uploads to image files only.
                 The file size is also limited to 2MB. </p> <br>
            <p class="text-gray-900 font-bold font-mono ">While this adds a layer of security by preventing the upload of
                  potentially dangerous non-image files, it relies solely on client-side file extension and MIME type, 
                  which can be spoofed. As such, it offers minimal security enhancement.</p>
        </div>

</div>




@endsection






