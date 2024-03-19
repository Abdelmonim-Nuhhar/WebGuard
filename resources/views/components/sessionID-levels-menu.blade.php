
<div class="p-4 m-2 rounded-lg shadow-lg  font-mono mb-8 text-white">
        <div class="bg-white p-3 mb-4 rounded-2xl  ">

        <hr class="my-2 border-blue-800">
            <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl p-4 rounded-2xl bg-red-200 border-blue-300 flex ">
                <a href="{{ route('sessionID') }}" class="text-gray-700 font-semibold text-2xl font-mono flex items-center">
                
                    Session ID 
                </a>
            </div>

            <hr class="my-2 border-blue-800">
            <hr class="my-2 border-blue-800">
            <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl p-4 rounded-2xl bg-indigo-400 border-indigo-300 flex items-center">
                <a href="" class="text-gray-700 font-semibold text-2xl font-mono flex items-center">
                    
                    Session ID Security Levels
                </a>
            </div>



            <div class=" m-2 rounded-lg shadow-lg bg-white border-2 ">
                <div class="flex justify-center ">
                    <div class="m-5 w-80 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-indigo-200 p-4 mb-2 hover:bg-indigo-300">
                        <a href="{{ route('basic.level') }}" class="text-gray-900 p-8 font-semibold text-xl font-mono">
                        Basic Level
                        </a>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="m-5 w-80 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-indigo-200 p-4 mb-2 hover:bg-indigo-300">
                        <a href="{{ route('intermediate.session') }}" class="text-gray-900 p-8 font-semibold text-xl font-mono">
                        Intermediate Level
                        </a>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="m-5 w-80 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-2xl bg-indigo-200 p-4 mb-2 hover:bg-indigo-300">
                        <a href="{{ route('advance.session') }}" class="text-gray-900 p-8 font-semibold text-xl font-mono">
                        Advanced Level
                        </a>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="m-5 w-80 transition-transform transform hover:scale-110 focus:scale-110 shadow-xl rounded-2xl bg-indigo-200 p-4 mb-2 hover:bg-indigo-300">
                        <a href="{{ route('challenge.session') }}" class="text-black p-8 font-semibold text-xl font-mono">
                        Challenge Level
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
