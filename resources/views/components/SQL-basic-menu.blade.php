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

    

        <hr class="my-2 border-blue-800">
        <h1 class="text-lg font-bold mb-3 text-gray-800 pl-16">Practice Section</h1>

        <hr class="my-2 border-blue-800">

        <div class="m-4 rounded-2xl bg-indigo-400  hover:bg-indigo-400 p-4  transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 shadow-lg">
            <a href="{{ route('sql.injections') }}" id="toggleSqlBasic" class="w-full text-black font-bold text-lg py-2  rounded-lg  p-2 mb-1">
            <span class="text-xl mr-1">&#8592;</span> <!-- Big back sign -->
            Challenges Menu
            </a>
        </div>

        <div class="m-2 rounded-lg shadow-lg border-2 ">

            <div class="flex justify-center">
                <div class="m-3 w-52 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-indigo-300 p-3 mb-2 hover:bg-indigo-400">
                    <button class="text-gray-900  font-semibold text-md font-mono">
                        {{$slot }}
                    </button>
                </div>
            </div>

        
        </div>

    


</body>
</html>
