<div class="p-2 m-2 rounded-lg shadow-lg bg-gray-100  font-mono">
    <div class="text-lg mb-2 bg-white p-2 rounded-2xl">
        <p class="text-gray-700 p-2 font-semibold">
            Welcome back, <span class="text-red-600">{{ Auth::user()->name }}</span>, to Weak Session IDs Section.
        </p>
        <hr class="my-1 border-blue-800">
        <p class="mb-1 text-xl font-semibold"><span class="text-gray-500">Introduction </span></p>
        <hr class="my-1 border-blue-800">
        <div class="text-lg mb-1 bg-white p-2 rounded-2xl">
            <p>
                {{ $slot }}
            </p>
        </div>
        
        <p class="mb-1 text-lg font-semibold"><span class="text-gray-800">Basic Level  </span></p>
        <hr class="my-1 border-blue-800">
        <div class="text-lg mb-1 bg-white p-2 rounded-2xl">
            <p>
                This button generates a weak session ID with a low vulnerability level. When clicked, it sets a new cookie called SessionID,
                incrementing the last session ID stored in the server-side session data. This vulnerable implementation allows attackers to easily guess session IDs, 
                potentially leading to session hijacking or unauthorized access to user accounts. 
            </p>
        </div>

        <p class="mb-1 text-lg font-semibold"><span class="text-gray-800">Intermediate Level  </span></p>
        <hr class="my-1 border-blue-800">
        <div class="text-lg mb-1 bg-white p-2 rounded-2xl">
            <p>
                This button generates a weak session ID with a medium vulnerability level.
                When clicked, it sets a new cookie called UnixTimeSession, using the current Unix timestamp
                as the session ID. While using timestamps as session IDs might seem secure at first glance, 
                it still exposes vulnerabilities such as session fixation attacks, where an attacker can force
                a user to use a known session ID.  
            </p>
        </div>

        <p class="mb-1 text-lg font-semibold"><span class="text-gray-800">Advanced Level  </span></p>
        <hr class="my-1 border-blue-800">
        <div class="text-lg mb-1 bg-white p-2 rounded-2xl">
            <p>
                This button generates a weak session ID with a high vulnerability level. When clicked, 
                it sets a new cookie called MD5IdSession, using the MD5 hash of an incrementing session ID.
                While MD5 hashing adds some level of security, MD5 is considered cryptographically weak,
                making it susceptible to brute force attacks and collision vulnerabilities.
                Attackers could potentially reverse engineer the session ID from the MD5 hash, leading to session compromise. 
            </p>
        </div>

        <p class="mb-1 text-lg font-semibold"><span class="text-gray-800">Challenge Level  </span></p>
        <hr class="my-1 border-blue-300">
        <div class="text-lg mb-1 bg-white p-2 rounded-2xl">
            <p>
                Objective: At this level, the session ID value should be entirely unpredictable.
                However, feel free to attempt to crack it. Despite its apparent randomness, 
                understanding the factors influencing its generation provides valuable insights into strengthening
                session security.
            </p>
        </div>
    </div>
</div>
