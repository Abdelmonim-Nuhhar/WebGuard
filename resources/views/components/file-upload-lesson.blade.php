<div class="p-2 m-1 rounded-lg shadow bg-gray-100 border border-blue-900 font-mono">
    <div class="text-sm mb-2 bg-white p-2 rounded-xl">
        <p class="text-gray-600 p-2 font-bold text-lg font-mono ">
            Welcome back, <span class="text-red-600">{{ Auth::user()->name }}</span>, to File Upload Vulnerability.
        </p>
        
        <p class="mb-2 text-xl font-bold "><span class="text-gray-800 bg-gray-200 p-1 rounded-xl mt-1">Introduction  </span></p>
        <hr class="my-1 border-blue-800">
        <div class="text-sm mb-2 bg-white p-2 rounded-xl">
            <p>
            {{ $slot}}
            </p>
        </div>
        
        <p class="mb-2 text-xl font-bold "><span class="text-gray-800 bg-gray-200 p-2 rounded-xl">When/ why occurs </span></p>
        <hr class="my-1 border-blue-800">

       
       
        <div class="text-sm mb-2 bg-white p-2 rounded-xl">
            <p>
                1. Insufficient File Validation: <br> If an application doesn't adequately validate the uploaded file's type, size, or content, attackers can upload malicious files. For example, without a check on the file extension or MIME type, an attacker might upload a PHP script disguised as an image file.
            </p>
            <p>
                2. Inadequate Server-Side Validation: <br> Relying solely on client-side validation is insecure because client-side checks can be bypassed. Server-side validation is essential to ensure that uploaded files meet the security criteria.
            </p>
            <p>
                3. Improper Handling of File Names: <br> Allowing users to specify file names can lead to overwriting critical files on the server or script injection vulnerabilities if special characters are not handled correctly.
            </p>
            <p>
                4. Storage of Uploaded Files in Accessible Directories: <br> Storing uploaded files in a directory that's accessible from the web can lead to unauthorized execution of scripts or access to sensitive information.
            </p>
        </div>

       
    </div>
</div>
