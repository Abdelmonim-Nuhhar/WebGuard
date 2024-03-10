<!-- reflected-xss-high.blade.php -->

@extends('layouts.new-app')

@section('content')

<div class="flex justify-between">
   
    <!-- XSS Menu Section -->
    <div class="w-1/3 bg-red-100 rounded-2xl mr-4 shadow-md p-1">
        <x-xss-types-menu> 

        </x-xss-types-menu>
    </div>
   
    
     <!-- Practice Section -->
    <div class="w-2/3 bg-red-100 rounded-xl  p-6">

            <!-- Explanation Section -->
            <div class="text-1g mb-4 bg-white p-4 rounded-2xl font-mono p-2">
            <p>
                
            In the high-level demonstration, an advanced approach is taken to address reflected XSS
             vulnerabilities with enhanced filtering mechanisms. This method aims to sanitize user input more 
             rigorously by removing any occurrences of script-related strings, such as "script" or variations 
             of it, before rendering the content to users within the web application.
                <br><br>
            Similar to the medium level, web developers often implement custom protective measures to mitigate
             the risks associated with cross-site scripting attacks. In this case, a more sophisticated 
             filtering mechanism is employed using a regular expression pattern. This pattern is specifically 
             designed to detect and remove not only the &lt;/script&gt; tags but also any variations of the
              word "script," such as those with additional characters interspersed between the letters.
              <br><br>
               By doing so, potential avenues for injecting malicious scripts are effectively closed off,
                thereby enhancing the security posture of the application.
            </p>


            <button onclick="toggleFileContent()" id="ToggleSourceCode" class="bg-indigo-600 text-white px-8 py-2 rounded-md mb-2 mt-2">
                Toggle Source Code
            </button>
            <div class="font-mono text-1g  mt-4 bg-green-100 p-4 rounded-2xl border-2 border-blue-900" id="fileContent" style="display: none;">
                <pre class="font-mono text-1g text-black">{{ $fileContent }}</pre>
            </div>

        </div>


        
        <x-security-awareness-message>
        For the high xss Level, try using scripts, tags, or any malicious code that could be executed.

            <br>
        <!-- Button to toggle content visibility -->
        <button id="toggleButton" class="bg-indigo-600 text-white px-4 py-2 rounded-md mb-4">
            Toggle XSS Testing Suggestions
        </button>


        </x-security-awareness-message>

        <div id="xssSuggestions" style="display: none;" class="bg-white rounded-2xl p-4 mb-4">
            <x-xss-injection-examples></x-xss-injection-examples>
        </div>
        
        <div class="bg-gray-100 p-8 rounded-2xl">
            
            <h1 class="text-2xl font-bold mb-4 font-mono">Reflected XSS Vulnerability - High Level</h1>

            

            <form method="GET" action="{{ route('xss.high') }}" class="space-y-8">
                <div>
                    <label for="name" class="block text-xl mb-4 font-medium text-gray-700">Enter your name please:</label>
                    <input type="text" id="name" name="name" class="mt-4 p-4 border border-gray-300 rounded-md focus:outline-none focus:ring
                     focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm text-2xl font-mono">
                </div>
                <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-300">Submit</button>
            </form>

            @if($name)
                <h2 class="text-2xl font-bold mt-4">Hello, <span class="text-indigo-600">{!! $name !!}</span>!</h2>
            @endif
        </div>
    </div>
</div>


@endsection
