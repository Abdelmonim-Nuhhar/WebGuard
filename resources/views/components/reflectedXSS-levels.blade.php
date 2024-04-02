<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Types Menu</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<div class="p-4 m-2 rounded-lg shadow-lg bg-white border-1 font-mono mb-8 text-white">
    <div class="bg-white mb-4 rounded-2xl">
        <div class="m-2 flex items-center bg-indigo-500 hover:bg-indigo-400 rounded-xl p-2 border border-blue-700 transition duration-200
        flex items-center justify-center ease-in-out transform hover:scale-105">
            <a href="{{ route('xss') }}" class="text-white font-semibold text-lg font-mono flex items-center">
                <span class="text-2xl mr-2">&#8592;</span> <!-- Big back sign -->
                XSS Types Menu
            </a>
        </div>

        <hr class="my-2">
        <h1 class="text-lg font-bold mb-2 text-gray-800">Practice Section</h1>
        <hr class="my-2">

        <div class="m-2 flex items-center bg-indigo-200 hover:bg-indigo-300 rounded-xl p-2 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
            <button id="toggleReflectedXssButton" class="w-full text-gray-700 font-bold text-sm py-1 px-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50">
                Reflected XSS Levels
            </button>
        </div>

        <div class="m-2 rounded-lg shadow-lg border-2 bg-white" id="toggleReflectedXssLevels" style="display: block;">

            <div class="flex justify-center">
                <div class="w-60 m-2 flex items-center bg-indigo-200 hover:bg-indigo-300 rounded-xl p-2 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                    <a href="{{ route('xss.reflected') }}" class="text-gray-900 p-2 w-full font-semibold text-sm font-mono">
                        Reflected Low
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="w-60 m-2 flex items-center bg-indigo-200 hover:bg-indigo-300 rounded-xl p-2 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                    <a href="{{ route('xss.medium') }}" class="text-gray-900 p-2 font-semibold text-sm font-mono">
                        Reflected Medium
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="w-60 m-2 flex items-center bg-indigo-200 hover:bg-indigo-300 rounded-xl p-2 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                    <a href="{{ route('xss.high') }}" class="text-gray-900 p-2 font-semibold text-sm font-mono">
                        Reflected High
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="w-60 m-2 flex items-center bg-indigo-200 hover:bg-indigo-300 rounded-xl p-2 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                    <a href="{{ route('xss.impossible') }}" class="text-black p-2 font-semibold text-sm font-mono">
                        Reflected Impossible
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
