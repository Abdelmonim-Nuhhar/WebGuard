@extends('layouts.new-app')



@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations!</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-green-400 to-blue-500 h-screen flex flex-col justify-center items-center">
    <div class="bg-blue-100 p-8 rounded-2xl shadow-2xl t">
        <h1 class="text-4xl font-bold text-green-600 mb-4">Congratulations!  <span class="text-red-500 text-3xl mono">{{ Auth::user()->name }}. </span></h1>
        @if ($vulnerabilityLevel === 'Low')
        <div class="mb-4 bg-white p-6 rounded-2xl">
            <p class="text-2xl text-blue-500  font-bold mb-4 font-mono">
                You have successfully identified and mitigated a low-level weak session ID vulnerability.
            </p>
            <hr class="my-2 border-blue-800">
            <div class="font-mono text-1g text-yellow-600" id="fileContent" style="display: none;">
                <pre>{{ $fileContent }}</pre>
            </div>
            <button onclick="toggleFileContent()" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                Toggle Source Code
            </button>

        </div>
        <div class="mb-4 bg-white p-6 rounded-2xl">
            <p class="text-2xl text-blue-500  font-bold mb-4 font-mono mb-8">
                Well done keep practices, try Meduim Level 
            </p>
                <a href="{{ route('sessionID') }}" 
                class="text-gray bg-yellow-500 p-4 font-semibold text-2xl font-mono rounded-2xl">
                Meduim Level
            </a>          
        </div>
        @endif
        @if ($vulnerabilityLevel === 'Medium')
        <div class="mb-4 bg-white p-6 rounded-2xl">
            <p class="text-2xl text-yellow-500  font-bold mb-4 font-mono">
                You have successfully identified and mitigated a medium-level weak session ID vulnerability.
            </p>
            <hr class="my-2 border-blue-800">
            <div class="font-mono text-1g text-yellow-600" id="fileContent" style="display: none;">
                <pre>{{ $fileContent }}</pre>
            </div>
            <button onclick="toggleFileContent()" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                Toggle Source Code
            </button>
        </div>

        <div class="mb-4 bg-white p-6 rounded-2xl">
            <p class="text-2xl text-blue-500  font-bold mb-4 font-mono mb-8">
                Well done keep practices, try Meduim Level 
            </p>
                <a href="{{ route('sessionID') }}" 
                class="text-gray bg-red-500 p-4 font-semibold text-2xl font-mono rounded-2xl">
                High Level
            </a>          
        </div>
        @endif
        @if ($vulnerabilityLevel === 'High')
        <div class="mb-4 bg-white p-6 rounded-2xl">
            <p class="text-2xl text-red-500  font-bold mb-4 font-mono">
                You have successfully identified and mitigated a high-level weak session ID vulnerability.
            </p>
            <hr class="my-2 border-blue-800">
            <div class="font-mono text-1g text-yellow-600" id="fileContent" style="display: none;">
                <pre class="font-mono text-1g text-yellow-600">{{ $fileContent }}</pre>
            </div>
            <button onclick="toggleFileContent()" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                Toggle Source Code
            </button>
        </div>

        <div class="mb-4 bg-white p-6 rounded-2xl">
            <p class="text-xl text-blue-500  font-bold mb-4 font-mono mb-8">
                Well done keep practices, try Impossible Level 
            </p>
                <a href="{{ route('sessionID') }}" 
                class="text-gray bg-red-800 p-4 font-semibold text-2xl font-mono rounded-2xl">
                Impossible Level
            </a>          
        </div>
        @endif
        @if ($vulnerabilityLevel === 'Impossible')
        <div class="mb-4 bg-white p-6 rounded-xl">
            <p class="text-2xl text-red-500  font-bold mb-4 font-mono">
                You have successfully identified and mitigated an impossible-level weak session ID vulnerability.
            </p>

            <h2 class="text-xl text-red-500  font-bold mb-4 font-mono">Source code for a low-level weak session ID vulnerability</h2>
            <pre>{{ $fileContent }}</pre>
        </div>
        @endif
        <div class="mb-4 bg-white p-6 rounded-2xl">
            <p class="text-xl text-green-500  font-bold mb-4 font-mono">To further mitigate the risk of weak session IDs, consider implementing the following best practices:</p>
            <ul class="list-disc text-1g text-gray-700  font-bold mb-4 font-mono">
                <li class="mb-2">Use long and random session IDs to increase the difficulty of guessing.</li>
                <li class="mb-2">Regenerate session IDs after successful login or privilege escalation.</li>
                <li class="mb-2">Implement secure session handling mechanisms such as session expiration and session invalidation.</li>
                <li class="mb-2">Utilize HTTPS to encrypt session data during transmission.</li>
                <li class="mb-2">Regularly audit your application for security vulnerabilities, including weak session IDs.</li>
            </ul>
        </div>
        <p class="text-xl text-green-500  font-bold mb-4 font-mono">By following these practices, you can enhance the security of your application and protect user sessions from exploitation.</p>

        </p>
        <a href="{{ route('sessionID') }}" class="inline-block bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-4 rounded transition-colors duration-300">
            <span class="mr-2">&larr;</span> Back
        </a>

        <script>
            function toggleFileContent() {
                var fileContentDiv = document.getElementById("fileContent");
                if (fileContentDiv.style.display === "none") {
                    fileContentDiv.style.display = "block";
                } else {
                    fileContentDiv.style.display = "none";
                }
            }
        </script>

        <!-- Add script for toggling file content for other levels -->
        <script>
            function toggleFileContentMedium() {
                var fileContentDiv = document.getElementById("fileContentMedium");
                if (fileContentDiv.style.display === "none") {
                    fileContentDiv.style.display = "block";
                } else {
                    fileContentDiv.style.display = "none";
                }
            }
        </script>
    </div>
</body>
</html>
@endsection