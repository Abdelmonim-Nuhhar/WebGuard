<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Menu</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

    <div class="p-2 m-1 rounded-lg shadow-lg bg-white border-1 font-mono mb-8 text-white">
        <div class="bg-white p-1 mb-2 rounded-2xl">
            <div class="m-2 transition-transform transform hover:scale-110 focus:scale-110  Hover:bg-indigo-700 shadow-2xl p-3 rounded-2xl bg-indigo-600 border-green-800 flex items-center">
                <a href="{{ route('file.upload') }}" class="text-white font-semibold text-md font-mono flex items-center">
                    {{ $slot }}
                    File Upload vulnerability</a>
            </div>

            <hr class="my-1">
            <h1 class="text-md font-bold mb-2 text-gray-800 pl-4">Practice Section</h1>

            <hr class="my-1">

            <div class="m-1 rounded-2xl bg-indigo-300 hover:bg-indigo-400 p-1 mb-4 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 shadow-lg">
                <button  class="w-full text-gray-700 font-bold text-md py-1 px-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50">
                Security Levels
                </button>
            </div>

            <div class="m-1 rounded-lg shadow-lg white border-2" id="toggleReflectedXssLevels" style="display: block;">

                <div class="flex justify-center">
                    <div class="m-2 w-72 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-indigo-200 p-2 mb-1 hover:bg-indigo-300">
                        <a href="{{ route('upload.form') }}" class="text-gray-900 p-2 font-semibold text-md font-mono">1- Basic</a>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="m-2 w-72 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-indigo-200 p-2 mb-1 hover:bg-indigo-300">
                        <a href="{{ route('upload.beyond.basic.form') }}" class="text-gray-900 p-2 font-semibold text-md font-mono">2- Beyond Basic</a>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="m-2 w-72 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-indigo-200 p-2 mb-1 hover:bg-indigo-300">
                        <a href="{{ route('upload.intermediate.form') }}" class="text-gray-900 p-2 font-semibold text-md font-mono">3- Intermediate</a>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="m-2 w-72 transition-transform transform hover:scale-110 focus:scale-110 shadow-xl rounded-2xl bg-indigo-200 p-2 mb-1 hover:bg-indigo-300">
                        <a href="{{ route('upload.advanced.form') }}" class="text-black p-2 font-semibold text-md font-mono">4- Advanced</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
