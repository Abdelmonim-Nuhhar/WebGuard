@extends('layouts.new-app')

@section('content')

<div class="flex justify-between">
   
    <div class="w-1/3 bg-white rounded-2xl mr-4 shadow-md p-1">
        <x-file-upload-menu><span class="mr-2">&#8592;</span> <!-- Back sign --></x-file-upload-menu>
    </div>



<!--  Basic File Upload Section -->
    <div class="flex flex-col m-1 w-2/3 bg-white rounded-lg shadow-md p-6 ">

    

<h2 class="text-xl font-bold font-mono text-gray-800 mb-2">Congratulations!</h2>
            <p class="text-gray-600 font-mono">
            You have successfully uploaded a file containing specific content, completing the upload file vulnerability lesson and practice.
    Here is your flag: <strong class="text-green-500">flag{a0e6e4d440a0a618b9bbd94b214cf20f}</strong>
              </p> <br>
              
           
    </div>

    <!-- Beyond Basic INFO Section -->
    <div class="bg-gray-100 rounded-xl shadow-lg p-6 font-sans">
            <h2 class="text-xl font-bold font-mono text-gray-800 mb-2 underline">Learning Outcome:</h2>
            <p class="text-gray-600">
            By participating in this challenge, you'll learn about the potential dangers associated with improper handling and validation of uploaded files in web applications. This experience highlights the importance of server-side validation, secure file handling practices, and the potential for malicious files to execute unwanted actions on web servers.
              </p> <br>
              <h2 class="text-xl font-bold font-mono text-gray-800 mb-2 underline"> Mitigation:</h2>
              <ol class="text-gray-800 font-mono">
    <li><strong>1- Limit File Types:</strong> Allow only necessary file types by whitelisting both file extensions and MIME types.</li>
    <li><strong>2- Server-Side Validation:</strong> Implement rigorous validation for file type, size, and content on the server side.</li>
    <li><strong>3- Use Secure File Names:</strong> Generate unique, randomized file names and avoid using user input for file names.</li>
    <li><strong>4- Store Files Securely:</strong> Place uploaded files outside the web root or in a database for added security.</li>
    <li><strong>5-nSet Proper Permissions:</strong> Restrict file permissions to read/write as necessary, avoiding execute permissions.</li>
    <li><strong>6- Sanitize Files:</strong> Scan files with antivirus software and consider converting files to strip malicious content.</li>
    <li><strong>7- Implement Access Control:</strong> Require user authentication for file uploads and ensure users can only access their files.</li>
    <li><strong>8- Use Secure Directories:</strong> Ensure directories for file uploads have strict permissions.</li>
    <li><strong>9- Use a CDN:</strong> Serve uploaded files from a separate domain or a CDN to isolate your application from direct file access risks.</li>
    <li><strong>10- Regular Security Audits:</strong> Perform code reviews and security testing regularly to find and fix vulnerabilities.</li>
    <li><strong>11- Implement Security Headers:</strong> Use Content Security Policy (CSP) headers to mitigate potential XSS attacks from file uploads.</li>
    <li><strong>12- Educate and Update:</strong> Stay informed about the latest security practices and update your tools and libraries regularly.</li>
</ol>



        </div>

</div>




@endsection
