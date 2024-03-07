
<link rel="preconnect" href="https://fonts.bunny.net">
    <!--link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    < Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!--script src="{{ asset('js/my.js') }}"></script-->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<!-- xss-types-menu.blade.php -->

<div class="p-4 m-2 rounded-lg shadow-lg bg-blue-900 border-1 border-blue-900 font-mono mb-8 text-white">
    <div class="bg-gray-200 p-3 mb-4 rounded-2xl hover:bg-gray-300 ">
        <h1 class="text-xl font-bold mb-2 text-gray-800">Cross-Site Scripting (XSS)</h1>
        <hr class="my-2 border-blue-800">
        <h1 class="text-xl font-bold mb-2 text-gray-800">Practice Section</h1>

        <h2 class="text-xl font-bold mb-2 text-gray-900 mb-4 mt-4">Select a type of Cross-Site Scripting (XSS):</h2>


        <div class=" m-2 rounded-lg shadow-lg bg-blue-100 border-2 border-blue-900 ">
        <div class="m-5   rounded-2xl bg-red-200 border-blue-300 p-8 mb-8">
            <a href="" class="text-gray-900 p-8 font-semibold text-2xl font-mono">
                Reflected  XSS
            </a>
        </div>
        <div class="flex justify-center">
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
        <div class=" m-2 rounded-lg shadow-lg bg-blue-100 border-2 border-blue-900 ">
        <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-red-200 border-blue-300 p-8 mb-8 hover:bg-yellow-100">
            <a href="{{ route('xss.stored') }}" class="text-gray-900 p-8 font-semibold text-2xl font-mono">
                Stored XSS
            </a>
        </div>
</div>

<div class=" m-2 rounded-lg shadow-lg bg-blue-100 border-2 border-blue-900 ">

        <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-red-200 border-blue-300 p-8 mb-8 hover:bg-yellow-100">
            <a href="{{ route('xss.dom') }}" class="text-gray-900 p-8 font-semibold text-2xl font-mono">
                DOM-based XSS
            </a>
        </div>
</div>
    </div>
</div>
