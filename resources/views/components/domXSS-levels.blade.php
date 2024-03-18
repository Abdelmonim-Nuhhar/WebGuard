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

<div class="p-4 m-2 rounded-lg shadow-lg font-mono mb-8 bg-white ">
    <div class="bg-white-200 p-3 mb-4 rounded-2xl ">
        <hr class="my-2 border-blue-800">
        <h1 class="text-2xl font-bold mb-4 text-gray-800 pl-24">Practice Section</h1>
        <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl p-4 rounded-2xl bg-red-200 border-blue-300">
            <a href="{{ route('xss') }}" class="text-gray-700  font-semibold text-2xl font-mono pl-24">
                XSS Types Menu
            </a>
        </div>

        <hr class="my-2 border-blue-800">
        
       

        







      

        <div class="m-4 rounded-2xl bg-indigo-300 hover:bg-indigo-400 p-2 mb-6 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 shadow-lg">
            <button id="toggleDomXssButton" class="w-full  text-gray-700 font-bold text-2xl py-3 px-5 rounded-lg  focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50">
                DOM-based XSS
            </button>
        </div>

        <div class=" m-2 rounded-lg shadow-lg bg-white  " >


            <div class="flex justify-center ">
                <div class="m-5 w-80 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-indigo-200  p-4 mb-2 hover:bg-blue-300">
                    <a href="{{ route('domXSS.low') }}" class="text-gray-900 p-8 font-semibold text-xl font-mono">
                        Dom  Low 
                        </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="m-5 w-80 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-indigo-200  p-4 mb-2 hover:bg-blue-300">
                    <a href="#" class="text-gray-900 p-8 font-semibold text-xl font-mono">
                        Dom Medium 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>





</body>
</html>
