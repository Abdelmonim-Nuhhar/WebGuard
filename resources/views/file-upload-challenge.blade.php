@extends('layouts.new-app')

@section('content')

<div class="flex justify-between">
   
    <div class="w-1/3 bg-white rounded-2xl mr-4 shadow-md p-1">
        <x-file-upload-menu><span class="mr-2">&#8592;</span> <!-- Back sign --></x-file-upload-menu>
    </div>



<!--  Basic File Upload Section -->
    <div class="flex flex-col m-1 w-2/3 bg-white rounded-lg shadow-md p-6 ">

    

<h2 class="text-xl font-bold font-mono text-gray-800 mb-2">Challenge File:</h2>
            <p class="text-gray-600">
            Your task is to create a file that includes a hidden JavaScript snippet or a secret phrase that
             triggers the vulnerability simulation in the application.


              </p> <br>
            <p class="text-gray-600 font-bold font-mono ">
            Click the basic upload file security level form to upload the file
            </p>
            <div class="m-2 w-72 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-indigo-200 p-2 mb-1 hover:bg-indigo-300">
                        <a href="{{ route('upload.form') }}" class="text-gray-900 p-2 font-semibold text-md font-mono">Basic upload file</a>
                    </div>
    </div>

    <!-- Beyond Basic INFO Section -->
    <div class="bg-indigo-100 rounded-xl shadow-lg p-6 font-sans">
            <h2 class="text-xl font-bold font-mono text-gray-800 mb-2 underline">Challenge Objective:</h2>
            <p class="text-gray-600">
            The goal of this challenge is to demonstrate an understanding of file upload vulnerabilities
             by successfully uploading a file that contains specific content.
              </p> <br>
            <p class="text-gray-600 font-bold font-mono ">
                Completing this challenge will unlock a congratulatory message and a unique flag as a reward
            </p>
        </div>

</div>




@endsection
