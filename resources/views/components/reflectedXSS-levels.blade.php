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

    <div class="p-4 m-2 rounded-lg shadow-lg bg-blue-900 border-1 border-blue-900 font-mono mb-8 text-white">
        <div class="bg-gray-200 p-3 mb-4 rounded-2xl hover:bg-gray-300 ">
        <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl p-4 rounded-2xl bg-red-200 border-blue-300 flex items-center">
        <a href="{{ route('xss') }}" class="text-gray-700 font-semibold text-2xl font-mono flex items-center">
            <span class="text-3xl mr-2">&#8592;</span> <!-- Big back sign -->
            XSS Types Menu
        </a>
    </div>

        <hr class="my-2 border-blue-800">
        <h1 class="text-2xl font-bold mb-4 text-gray-800 pl-24">Practice Section</h1>


        <hr class="my-2 border-blue-800">
        
       

        <div class="m-4 rounded-2xl bg-blue-200 border-blue-400 p-6 mb-6 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 shadow-lg">
            <button id="toggleReflectedXssButton" class="w-full bg-blue-500 text-white font-bold text-lg py-3 px-5 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50">
            Reflected XSS Levels
            </button>
        </div>




        <div  class=" m-2 rounded-lg shadow-lg bg-blue-100 border-2 border-blue-900 " id="toggleReflectedXssLevels" style="display: block;">

            <div class="flex justify-center ">
                <div class="m-5 w-80 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-blue-400 border-blue-400 p-4 mb-2 hover:bg-blue-300">
                    <a href="{{ route('xss.reflected') }}" class="text-gray-900 p-8 font-semibold text-xl font-mono">
                        Reflected Low 
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="m-5 w-80 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-yellow-400 border-blue-300 p-4 mb-2 hover:bg-yellow-300">
                    <a href="{{ route('xss.medium') }}" class="text-gray-900 p-8 font-semibold text-xl font-mono">
                        Reflected Medium 
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="m-5 w-80 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-red-400 border-blue-300 p-4 mb-2 hover:bg-red-300">
                    <a href="{{ route('xss.high') }}" class="text-gray-900 p-8 font-semibold text-xl font-mono">
                        Reflected High 
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="m-5 w-80 transition-transform transform hover:scale-110 focus:scale-110 shadow-xl rounded-2xl bg-red-700 border-blue-300 p-4 mb-2 hover:bg-red-600">
                    <a href="{{ route('xss.impossible') }}" class="text-white p-8 font-semibold text-xl font-mono">
                        Reflected Impossible 
                    </a>
                </div>
            </div>
        </div>






        <div class=" m-2 rounded-lg shadow-lg bg-blue-100 border-2 border-blue-900 " id="toggleDomXssLevels" style="display: none;">




            
        </div>
    </div>
</div>





</body>
</html>
