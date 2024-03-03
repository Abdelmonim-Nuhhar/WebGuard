<div class="p-4 m-2 rounded-lg shadow-lg bg-gray-100 border-2 border-blue-900 font-mono">
                <div class="text-1g mb-4 bg-white p-4 rounded-2xl">
                    <p class="text-gray-700 p-4 font-bold text-xl font-mono ">
                        Welcome back, <span class="text-red-600 text-1g">{{ Auth::user()->name }}</span>, to the Security Misconfigurations Section.
                    </p>
                </div>
                <p class="mb-3 text-2xl font-bold "><span class="text-red-500">Lesson: Understanding Security Misconfigurations </span></p>

                <div class="text-1g mb-4 bg-white p-4 rounded-2xl">
                    <p>
                        {{ $slot }}
                    </p>
                </div>
                <div class="text-1g mb-4 bg-white p-4 rounded-2xl">
                    <p>Security misconfigurations pose a significant risk to the integrity and security of web applications. 
                        They can occur at various levels of the application stack, including the database server, third-party libraries, and custom code settings.
                         A security misconfiguration arises when a system or application is not properly configured, leaving it vulnerable to exploitation by attackers.</p>
                </div>

                <p class="mb-3 text-2xl ">Impact of Security Misconfigurations:</p>
                <div class="text-1g mb-4 bg-white p-4 rounded-2xl">
                    <p>The impact of security misconfigurations can vary depending on the specific configuration being exploited. 
                        However, common consequences include unauthorized access to sensitive data, system breaches,
                         and potential compromise of the entire application or system.</p>
                </div>

                <p class="mb-3 text-2xl">Exploitation by Attackers:</p>
                <div class="text-1g mb-4 bg-white p-4 rounded-2xl">
                    <p>
                    Attackers exploit security misconfigurations by leveraging default login credentials or exploiting vulnerabilities in operating systems and public services
                     (e.g., databases, file-sharing services). 
                    By doing so, they gain unauthorized access to critical systems, sensitive data, or gain insight into the system's vulnerabilities.
                    </p>
                </div>
                
                <p class="mb-3 text-2xl">Common Scenarios of Exploitation:</p>
                <div class="text-1g mb-4 bg-white p-4 rounded-2xl">
                    <p>
                    Default Login Credentials: Attackers attempt to log in using <span class="text-red-500">default usernames such as (Admin, root, administrator)  and passwords such as (12345678, qwertyui, password)</span> to gain unauthorized access to the application or system.
                    Unpatched Flaws: Exploiting known vulnerabilities or unpatched flaws in the system to bypass security measures and gain access.
                    Unprotected Files and Directories: Accessing unprotected files or directories that contain sensitive information or configuration details.
                    </p>
                </div>
                
            </div>