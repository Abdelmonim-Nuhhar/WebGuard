<div class="p-2 m-2 rounded-lg shadow-lg font-mono mb-8 text-white">
    <div class=" p-2 mb-3 rounded-2xl">

       {{$slot}}


        <hr class="my-1 border-blue-800">
        <hr class="my-1 border-blue-800">
        <div class="m-3 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105
         p-3 rounded-xl bg-indigo-300 flex items-center justify-center">
            <a href="" class="text-gray-700 font-semibold text-lg font-mono flex items-center">
                Session ID Security Levels
            </a>
        </div>

        <div class="m-2 rounded-lg shadow-lg bg-white border-2">
            <div class="flex justify-center">
                <div class="m-1 w-80 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105 rounded-xl bg-indigo-200 
                flex items-center justify-center   hover:bg-indigo-300">
                    <a href="{{ route('basic.level') }}" class="text-gray-900 p-4 font-semibold text-base font-mono">
                        Basic Level
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="m-3 w-80 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105 rounded-xl bg-indigo-200
                flex items-center justify-center hover:bg-indigo-300">
                    <a href="{{ route('intermediate.session') }}" class="text-gray-900 p-4 font-semibold text-base font-mono">
                        Intermediate Level
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="m-3 w-80 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105 rounded-xl bg-indigo-200
                flex items-center justify-center hover:bg-indigo-300">
                    <a href="{{ route('advance.session') }}" class="text-gray-900 p-4 font-semibold text-base font-mono">
                        Advanced Level
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="m-3 w-80 border border-blue-700 transition duration-200 ease-in-out transform hover:scale-105 rounded-xl bg-indigo-200 
                flex items-center justify-center hover:bg-indigo-300">
                    <a href="{{ route('challenge.session') }}" class="text-black p-4 font-semibold text-base font-mono">
                        Challenge Level
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
