
<link rel="preconnect" href="https://fonts.bunny.net">
    <!--link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    < Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!--script src="{{ asset('js/my.js') }}"></script-->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<<!-- xss-types-menu.blade.php -->

<div class="p-4 m-2 rounded-lg shadow-lg bg-gray-100 border-2 border-blue-900 font-mono mb-16">
    <div class="bg-gray-200 p-3 mb-4 rounded-2xl hover:bg-gray-300 border-blue-700 border-2">
        <h1 class="text-xl font-bold mb-2 text-gray-800">Cross-Site Scripting (XSS)</h1>
        <hr class="my-2 border-blue-800">
        <h1 class="text-xl font-bold mb-2 text-gray-800">Practice Section</h1>

        <h2 class="text-xl font-bold mb-2 text-black-600 mb-16 mt-16">Select a type of Cross-Site Scripting (XSS):</h2>

        <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-red-200 border-blue-300 p-8 mb-16 hover:bg-yellow-100">
            <a href="{{ route('xss.reflected') }}" class="text-gray-900 p-8 font-semibold text-2xl font-mono">
                Reflected XSS
            </a>
        </div>

        <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-red-200 border-blue-300 p-8 mb-16 hover:bg-yellow-100">
            <a href="{{ route('xss.medium') }}" class="text-gray-900 p-8 font-semibold text-2xl font-mono">
                Reflected meduim XSS
            </a>
        </div>

        <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-red-200 border-blue-300 p-8 mb-16 hover:bg-yellow-100">
            <a href="{{ route('xss.high') }}" class="text-gray-900 p-8 font-semibold text-2xl font-mono">
                Reflected High XSS
            </a>
        </div>

        <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-red-200 border-blue-300 p-8 mb-16 hover:bg-yellow-100">
            <a href="{{ route('xss.impossible') }}" class="text-gray-900 p-8 font-semibold text-2xl font-mono">
                Reflected impossible XSS
            </a>
        </div>

        <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-red-200 border-blue-300 p-8 mb-16 hover:bg-yellow-100">
            <a href="{{ route('xss.stored') }}" class="text-gray-900 p-8 font-semibold text-2xl font-mono">
                Stored XSS
            </a>
        </div>

        <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-red-200 border-blue-300 p-8 mb-16 hover:bg-yellow-100">
            <a href="{{ route('xss.dom') }}" class="text-gray-900 p-8 font-semibold text-2xl font-mono">
                DOM-based XSS
            </a>
        </div>
        
    </div>
</div>

