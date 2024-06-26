<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Demo</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!--link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /-->
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!--script src="{{ asset('js/my.js') }}"></script-->
</head>

<body class="bg-gray-100">
    <div class="p-4 m-2 rounded-lg shadow-lg bg-white border-1 font-mono mb-8 text-white">
        <div class="bg-white p-3 mb-4 rounded-2xl  ">
            <hr class="my-2 border-blue-800">
            <div class="m-2 flex items-center bg-indigo-200 hover:bg-indigo-300 rounded-xl p-2 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                <a href="{{ route('xss') }}" class="text-gray-700 font-semibold text-lg font-mono flex items-center">
                    <span class="text-2xl mr-2">&#8592;</span> <!-- Big back sign -->
                    XSS Types Menu
                </a>
            </div>

            <hr class="my-2 border-blue-800">

            <div class="m-2 rounded-lg shadow-lg bg-indigo-300 hover:bg-indigo-400 p-2 mb-6 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                <button id="toggleStoredXssButton" class="w-full  text-gray-700 font-bold text-lg py-2 px-4 rounded-lg  focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50">
                    Stored XSS Levels
                </button>
            </div>

            <div class="m-2 rounded-lg shadow-lg bg-white border-2 ">
                <div class="flex justify-center ">
                    <div class="w-60 m-2 flex items-center bg-indigo-200 hover:bg-indigo-300 rounded-xl p-2 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                        <a href="{{ route('storedXSS.low') }}" class="text-gray-900 p-2 w-full font-semibold text-sm font-mono">
                            Stored XSS Low
                        </a>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="w-60 m-2 flex items-center bg-indigo-200 hover:bg-indigo-300 rounded-xl p-2 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                        <a href="{{ route('storedXSS.medium') }}" class="text-gray-900 p-2 w-full font-semibold text-sm font-mono">
                            Stored XSS Medium
                        </a>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="w-60 m-2 flex items-center bg-indigo-200 hover:bg-indigo-300 rounded-xl p-2 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                        <a href="{{ route('storedXSS.high') }}" class="text-gray-900 p-2 w-full font-semibold text-sm font-mono">
                            Stored High
                        </a>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="w-60 m-2 flex items-center bg-indigo-200 hover:bg-indigo-300 rounded-xl p-2 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                        <a href="{{ route('storedXSS.impossible') }}" class="text-black p-2 w-full font-semibold text-sm font-mono">
                            Stored Impossible
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
