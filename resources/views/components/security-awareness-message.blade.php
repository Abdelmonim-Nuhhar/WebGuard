<!-- Attention Message -->
<div class="text-xl mb-4 bg-white p-4 rounded-2xl font-mono p-2">
            <p class="text-red-600 font-bold">🚨 Attention! 🚨</p>
            <p>
                Dear <span class="text-red-600 text-2xl mb-4">{{ Auth::user()->name }},</span>
            </p>
            <p>
                As part of our security awareness campaign, we encourage you to actively engage in solving
                challenges related to web security vulnerabilities. To make the learning experience more 
                interactive, we invite you to test your skills by attempting to exploit potential vulnerabilities in the provided applications.
            </p>
        </div>

        <!-- Example and Form Section -->
        <div class="text-xl mb-4 bg-white p-4 rounded-2xl font-mono p-2">
            <p>
            For example, if an attacker crafts a URL with embedded code,
            the code and its contents will be executed back to the user without any alteration.
            Alternatively, if you input malicious code into the next field, it will also be executed. 
                {{ $slot }}
            </p>
        </div>
