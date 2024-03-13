<div class="p-4 m-2 rounded-lg shadow-lg bg-gray-100 border-2 border-blue-900 font-mono">
                <div class="text-1g mb-4 bg-white p-4 rounded-2xl">
                    <p class="text-gray-700 p-4 font-bold text-xl font-mono ">
                        Welcome back, <span class="text-red-600 text-1g">{{ Auth::user()->name }}</span>, to SQL Injection (SQLi) vulnerability.
                    </p>
                    <hr class="my-2 border-blue-800">
                    <p class="mb-3 text-3xl font-bold "><span class="text-gray-500">Introduction </span></p>
                    <hr class="my-2 border-blue-800">
                    <div class="text-1g mb-4 bg-white p-4 rounded-2xl">
                        <p>
                        {{ $slot}}
                        </p>
                    </div>
                    
                    <p class="mb-3 text-2xl font-bold "><span class="text-blue-500">SQL Injection (SQLi) vulnerability TYPES </span></p>
                    <hr class="my-2 border-blue-800">

                    <p class="mb-3 text-2xl font-bold "><span class="text-yellow-500">In-band SQLi (Classic SQLi): </span></p>
                    <hr class="my-2 border-blue-800">
                    <div class="text-1g mb-4 bg-white p-4 rounded-2xl">
                        <p>
                         This is the most common and straightforward kind of attack, 
                        where the attacker uses the same communication channel to launch the attack and gather results.
                        </p>
                    </div>

                    <p class="mb-3 text-2xl font-bold "><span class="text-red-500">Inferential SQLi (Blind SQLi): </span></p>
                    <hr class="my-2 border-blue-800">
                    <div class="text-1g mb-4 bg-white p-4 rounded-2xl">
                        <p>
                         The attacker sends data payloads to the server and observes the response or behavior of the server 
                         to learn about its structure. This type of attack is called "blind" because the attacker
                          cannot see data from the database directly.
                    </div>

                    <p class="mb-3 text-2xl font-bold "><span class="text-red-800">Out-of-band SQLi: </span></p>
                    <hr class="my-2 border-blue-800">
                    <div class="text-1g mb-4 bg-white p-4 rounded-2xl">
                        <p>
                        Out-of-band SQLi: This occurs when an attacker is unable to use the same
                         channel to launch the attack and gather information.
                         This type is rare and depends on the features enabled on the database server. 


                        </p>
                    </div>
                    
                </div>
            


            </div>