<div class="p-4 m-2 rounded-lg shadow-lg bg-gray-100 border-2 border-blue-900 font-mono">
                <div class="text-1g mb-4 bg-white p-4 rounded-2xl">
                    <p class="text-gray-700 p-4 font-bold text-xl font-mono ">
                        Welcome back, <span class="text-red-600 text-1g">{{ Auth::user()->name }}</span>, to Cross-Site Scripting (XSS) Section.
                    </p>
                    <hr class="my-2 border-blue-800">
                    <p class="mb-3 text-3xl font-bold "><span class="text-gray-500">Introduction </span></p>
                    <hr class="my-2 border-blue-800">
                    <div class="text-1g mb-4 bg-white p-4 rounded-2xl">
                        <p>
                        {{ $slot}}
                        </p>
                    </div>
                    
                    <p class="mb-3 text-2xl font-bold "><span class="text-blue-500">XSS TYPES </span></p>
                    <hr class="my-2 border-blue-800">
                    <!--div class="text-1g mb-4 bg-white p-4 rounded-2xl">
                        <p>
                            //
                        </p>
                    </div-->

                    <p class="mb-3 text-2xl font-bold "><span class="text-yellow-500">1- Stored XSS (Persistent XSS): </span></p>
                    <hr class="my-2 border-blue-800">
                    <div class="text-1g mb-4 bg-white p-4 rounded-2xl">
                        <p>
                        In this type of attack, the malicious script is stored permanently on the server, 
                        such as in a database or a file. When a victim accesses the affected page,
                         the script is retrieved from the server and executed in their browser.
                        </p>
                    </div>

                    <p class="mb-3 text-2xl font-bold "><span class="text-red-500">2- Reflected XSS (Non-Persistent XSS): </span></p>
                    <hr class="my-2 border-blue-800">
                    <div class="text-1g mb-4 bg-white p-4 rounded-2xl">
                        <p>
                        In a reflected XSS attack, the injected script is reflected off a web application's server and executed in the victim's browser.
                         This often occurs when user-supplied data is included in the response of 
                         a web page without proper input validation or output encoding.
                        </p>
                    </div>

                    <p class="mb-3 text-2xl font-bold "><span class="text-red-800">3- DOM-based XSS:  </span></p>
                    <hr class="my-2 border-blue-800">
                    <div class="text-1g mb-4 bg-white p-4 rounded-2xl">
                        <p>
                        This type of XSS occurs when the client-side JavaScript code of a web page dynamically generates content based on user input, and the input is improperly processed, allowing an attacker to execute malicious scripts. 


                        </p>
                    </div>
                    
                </div>
            


            </div>