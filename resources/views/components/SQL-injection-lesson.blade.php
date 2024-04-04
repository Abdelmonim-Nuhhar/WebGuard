<div class="p-2 m-1 rounded-lg shadow bg-gray-100  font-mono">
    <div class="text-xs mb-2 bg-white p-2 rounded-xl">
        <p class="text-gray-600 p-2 font-bold text-lg font-mono ">
            Welcome back, <span class="text-red-600">{{ Auth::user()->name }}</span>, to SQL Injection (SQLi) vulnerability.
        </p>
        
        <p class="mb-2 text-sm font-bold "><span class="text-gray-800 bg-gray-200 p-1 rounded-xl mt-1">Introduction to SQL Injection </span></p>
        <hr class="my-1 border-blue-800">
        <div class="text-xs mb-2 bg-white p-2 rounded-xl">
            <p>
            {{ $slot}}
            </p>
        </div>
        
        <p class="mb-2 text-sm font-bold "><span class="text-gray-800 bg-gray-200 p-1 rounded-xl">SQL Injection (SQLi) vulnerability TYPES </span></p>
        <hr class="my-1 border-blue-800">

        <p class="mb-2 text-sm font-bold "><span class="text-gray-700">In-band SQLi (Classic SQLi): </span></p>
        <hr class="my-1 border-blue-800">
        <div class="text-xs mb-2 bg-white p-2 rounded-xl">
            <p>
             This is the most common and straightforward kind of attack, 
            where the attacker uses the same communication channel to launch the attack and gather results.
            </p>
        </div>

        <p class="mb-2 text-sm font-bold "><span class="text-gray-700">Inferential SQLi (Blind SQLi): </span></p>
        <hr class="my-1 border-blue-800">
        <div class="text-xs mb-2 bg-white p-2 rounded-xl">
            <p>
             The attacker sends data payloads to the server and observes the response or behavior of the server 
             to learn about its structure. This type of attack is called "blind" because the attacker
              cannot see data from the database directly.
        </div>
    </div>
</div>
