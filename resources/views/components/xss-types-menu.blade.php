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

<div class="m-2 rounded-lg shadow-lg border-1 bg-white font-mono mb-8 text-white">
    <div class="bg-white p-3 mb-4 rounded-2xl">
        <hr class="my-2 border-blue-800">
        <h1 class="text-lg font-bold mb-2 text-gray-800 pl-2">Practice Section</h1>
        <div class="transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl p-4 rounded-2xl bg-indigo-200 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
            <a href="{{ route('xss') }}" class="text-gray-700 font-semibold text-lg font-mono">
                XSS Types Menu
            </a>
        </div>
        <hr class="my-2 border-blue-800">
        
        <div class="rounded-2xl bg-indigo-200 hover:bg-indigo-300 p-1 mb-1 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
            <button id="toggleReflectedXssButton" class="w-full text-gray-700 font-bold text-lg py-2 px-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50">
                Reflected XSS
            </button>
        </div>

        <div class="rounded-2xl shadow-lg bg-white border-2" id="toggleReflectedXssLevels" style="display: none;">

            <div class="flex justify-center">
                <div class="w-60 rounded-2xl bg-indigo-200 hover:bg-indigo-300 p-1 mb-1 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                    <a href="{{ route('xss.reflected') }}" class="text-gray-900 p-2 font-semibold text-lg font-mono">
                        Reflected Low
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="w-60 rounded-2xl bg-indigo-200 hover:bg-indigo-300 p-1 mb-1 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                    <a href="{{ route('xss.medium') }}" class="text-gray-900 p-2 font-semibold text-lg font-mono">
                        Reflected Medium
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="w-60 rounded-2xl bg-indigo-200 hover:bg-indigo-300 p-1 mb-1 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                    <a href="{{ route('xss.high') }}" class="text-gray-900 p-2 font-semibold text-lg font-mono">
                        Reflected High
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="w-60 rounded-2xl bg-indigo-200 hover:bg-indigo-300 p-1 mb-1 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                    <a href="{{ route('xss.impossible') }}" class="text-black p-2 font-semibold text-lg font-mono">
                        Reflected Impossible
                    </a>
                </div>
            </div>
        </div>

        <div class="rounded-2xl bg-indigo-200 hover:bg-indigo-300 p-1 mb-1 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
            <button id="toggleStoredXssButton" class="w-full text-gray-700 font-bold text-lg py-2 px-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50">
                Stored XSS
            </button>
        </div>

        <div class="rounded-2xl shadow-lg bg-white border-2" id="toggleStoredXssLevels" style="display: none;">

            <div class="flex justify-center">
                <div class="w-60 rounded-2xl bg-indigo-200 hover:bg-indigo-300 p-1 mb-1 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                    <a href="{{ route('storedXSS.low') }}" class="text-gray-900 p-2 font-semibold text-lg font-mono">
                        Stored XSS Low
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="w-60 rounded-2xl bg-indigo-200 hover:bg-indigo-300 p-1 mb-1 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                    <a href="{{ route('storedXSS.medium') }}" class="text-gray-900 p-2 font-semibold text-lg font-mono">
                        Stored XSS Medium
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="w-60 rounded-2xl bg-indigo-200 hover:bg-indigo-300 p-1 mb-1 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                    <a href="{{ route('storedXSS.high') }}" class="text-gray-900 p-2 font-semibold text-lg font-mono">
                        Stored High
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="w-60 rounded-2xl bg-indigo-200 hover:bg-indigo-300 p-1 mb-1 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                    <a href="{{ route('storedXSS.impossible') }}" class="text-black p-2 font-semibold text-lg font-mono">
                        Stored Impossible
                    </a>
                </div>
            </div>
        </div>

        <div class="rounded-2xl bg-indigo-200 hover:bg-indigo-300 p-1 mb-1 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
            <button id="toggleDomXssButton" class="w-full text-gray-700 font-bold text-lg py-3 px-5 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50">
                DOM-based XSS
            </button>
        </div>

        <div class="rounded-2xl shadow-lg bg-white border-2" id="toggleDomXssLevels" style="display: none;">

            <div class="flex justify-center">
                <div class="w-60 rounded-2xl bg-indigo-200 hover:bg-indigo-300 p-1 mb-1 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                    <a href="{{ route('domXSS.low') }}" class="text-gray-900 p-2 font-semibold text-lg font-mono">
                        Dom Low
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
