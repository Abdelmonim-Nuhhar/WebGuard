<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Types Menu</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="p-4 m-2 rounded-lg shadow-lg font-mono mb-8 bg-white ">
    <div class="bg-white p-3 mb-4 rounded-2xl">
        <hr class="my-2 border-blue-800">
        <h1 class="text-2xl font-bold mb-4 text-gray-800 pl-8">Practice Section</h1>
        <div class="m-2 flex items-center bg-indigo-200 hover:bg-indigo-300 rounded-xl p-2 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
            <a href="{{ route('xss') }}" class="text-gray-700 font-semibold text-lg font-mono flex items-center pl-8">
                <span class="text-2xl mr-2">&#8592;</span> <!-- Big back sign -->
                XSS Types Menu
            </a>
        </div>

        <hr class="my-2 border-blue-800">

       
        <div class="m-2 rounded-lg shadow-lg bg-white border-2">
            <div class="flex justify-center ">
                <div class="w-60 m-2 flex items-center bg-indigo-200 hover:bg-indigo-300 rounded-xl p-2 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105">
                    <a href="{{ route('domXSS.low') }}" class="text-gray-900 p-2 w-full font-semibold text-sm font-mono">
                        Dom Low
                    </a>
                </div>
            </div>


        </div>
    </div>
</div>

</body>
</html>
