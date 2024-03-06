
<link rel="preconnect" href="https://fonts.bunny.net">
    <!--link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    < Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!--script src="{{ asset('js/my.js') }}"></script-->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="p-4 m-2 rounded-lg shadow-lg bg-gray-100 border-2 border-blue-900 font-mono mb-16">

    <div class="bg-gray-200 p-3 mb-4 rounded-2xl hover:bg-gray-300 border-blue-700 border-2">
        <h1 class="text-xl font-bold mb-2 text-gray-800">Cross-Site Scripting(XSS)</h1>
        <hr class="my-2 border-blue-800">
        <h1 class="text-xl font-bold mb-2 text-gray-800">Practice Section</h1>


        
        <h2 class="text-xl font-semibold mb-2 text-blue-600">Select a type of Cross-Site Scripting(XSS).</h2>

        <div class="bg-gray-300 p-6 mb-8 rounded-2xl hover:bg-gray-200 level-section" id="xss-low" >
            <h2 class="text-xl font-semibold mb-2 text-blue-600"></h2>
           
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">
                Reflected XSS
                </button>
        </div>

        <div class="bg-gray-300 p-6 mb-8 rounded-2xl hover:bg-gray-200 level-section" id="xss-medium" >
            <h2 class="text-xl font-semibold mb-2 text-yellow-600">Medium Level</h2>
            
                <button type="submit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                Stored XSS
                </button>
        </div>

        <div class="bg-gray-300 p-6 mb-8 rounded-2xl hover:bg-gray-200 level-section" id="xss-high" >
        
            <h2 class="text-xl font-semibold mb-2 text-red-600">High Level</h2>
 
                <button type="submit" class="bg-red-300 hover:bg-red-700 text-gray-700 font-bold py-2 px-4 rounded">
                DOM-based XSS
                    </button>
                
        </div>





        <div class="bg-gray-300 p-6 mb-8 rounded-2xl hover:bg-gray-200 level-section" id="xss-impossible" >
            <h2 class="text-xl font-semibold mb-2 text-red-800">impossible Level</h2>
           
                <button type="submit" class="bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-4 rounded">
                        Generate Session ID (Impossible)
                </button>
            
        </div>
    </div>
    </div>
