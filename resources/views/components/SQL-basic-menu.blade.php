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

<div class="m-2 rounded-lg shadow-lg font-mono mb-8 text-white">
    <div class="p-3 mb-4 rounded-2xl bg-white ">
        <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl p-4 rounded-2xl bg-red-200 border-blue-300 flex items-center">
            <a href="{{ route('sql.injections') }}" class="text-gray-700 font-semibold text-2xl font-mono flex items-center">
                <span class="text-3xl mr-2">&#8592;</span> <!-- Big back sign -->
                SQL Challenges
            </a>
        </div>

        <hr class="my-2 border-blue-800">
        <h1 class="text-2xl font-bold mb-4 text-gray-800 pl-24">Practice Section</h1>

        <hr class="my-2 border-blue-800">

        <div class="m-4 rounded-2xl bg-indigo-400  hover:bg-indigo-300 p-2 mb-6 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 shadow-lg">
            <button id="toggleSqlBasic" class="w-full  text-gray-800 font-bold text-2xl py-3 px-5 rounded-lgbg-gray-300  p-4 mb-2 ">
                Basic Challenges
            </button>
        </div>

        <div class="m-2 rounded-lg shadow-lg  border-2 ">

            <div class="flex justify-center">
                <div class="m-5 w-80 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-indigo-300  p-4 mb-2 hover:bg-indigo-400">
                    <a href="{{ route('customer.showSearchForm') }}" class="text-gray-900 p-8 font-semibold text-xl font-mono">
                        1- Basic SQL
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="m-5 w-80 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-indigo-300  p-4 mb-2 hover:bg-indigo-400">
                    <a href="{{ route('customer.newShowSearchForm') }}" class="text-black p-8 font-semibold text-xl font-mono">
                        2- Beyond Basic
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="m-5 w-80 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-indigo-300  p-4 mb-2 hover:bg-indigo-400">
                    <a href="" class="text-gray-900 p-8 font-semibold text-xl font-mono">
                        3- Blind SQL
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="m-5 w-80 transition-transform transform hover:scale-110 focus:scale-110 shadow-xl rounded-2xl bg-indigo-300  p-4 mb-2 hover:bg-indigo-400">
                    <a href="" class="text-gray-800 p-8 font-semibold text-xl font-mono">
                        4- SQL Injection
                    </a>
                </div>
            </div>
        </div>

        <div class="m-2 rounded-lg shadow-lg bg-blue-100 border-2 border-blue-900" id="toggleDomXssLevels" style="display: none;">
        </div>
    </div>
</div>

</body>
</html>
