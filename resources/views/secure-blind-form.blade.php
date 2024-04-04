@extends('layouts.new-app') <!-- Extend main layout -->

@section('content')
<div class="flex flex-col md:flex-row justify-center md:space-x-4 p-6 md:p-10">


    <!-- Login Form Section -->
   
    <div class="md:w-1/2">

    
    {{-- Display Success Message --}}
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif
    
    {{-- Display Error Message --}}
    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif

    <div class="bg-gray-200 p-4 rounded-2xl mt-2">
        <form action="{{ route('secureBlind.challenge') }}" method="POST" class="mb-4">
            @csrf
            <div class="mb-4 ">
                <label for="username" class="block text-gray-700 mb-4 text-2xl font-mono font-bold">Username:</label>
                <input type="text" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm" id="username" name="username" placeholder="Enter username" required>
            </div>
            
            <div class=" flex justify-between">
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 rounded-2xl px-6 rounded text-2xl font-mono">Submit</button>    
                <a href="{{ route('blind.form') }}" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 rounded-2xl px-6 rounded text-2xl font-mono">Back</a>

                
            </div>

        </form>
    </div>
    <div class="bg-white p-4 rounded-lg shadow-md">
        <p class="text-gray-800 font-mono">To gain insights into addressing vulnerabilities, explore the source code by toggling the button below:</p>
        <button id="toggleSourceButton" onclick="toggleSourceCode()" class="mt-4 bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg">
            Toggle Source Code
        </button>
    </div>

    <div id="codePart" class="bg-white text-sm p-6 rounded-lg shadow-md mt-4" style="display: none;">
    <div class="bg-gray-100 rounded-lg shadow-md p-6 mb-6">
    <p class="text-lg font-bold mb-4">Using Laravel's Eloquent ORM:</p>

    <div class="bg-white p-4 rounded-lg shadow">
        <p class="text-sm font-medium text-gray-700">Securely check for admin user:</p>

        <pre class="text-gray-800"><code>
public function checkAdminUserSecurely(Request $request)
{
    $name = $request->input('username'); // User input

    // Secure query using Laravel's Eloquent ORM
    $user = \App\Models\User::where('name', $name)
                            ->where('is_admin', 1)
                            ->first();

if ($user) {
    return back()->with('success', 'Yes, there is at least one admin user!');
} else {
    return back()->with('error', 'No admin user found.');
}
}
        </code></pre>
    </div>

    <br>

    <p class="text-lg font-bold mb-4">Alternatively, if using Laravel's query builder directly:</p>

    <div class="bg-white p-4 rounded-lg shadow">
        <p class="text-sm font-medium text-gray-700">Securely check for admin user:</p>

        <pre class="text-gray-800"><code>
public function checkAdminUserSecurely(Request $request)
{
    $name = $request->input('username'); // User input

    // Secure query using Laravel's query builder
    $user = DB::table('users')
            ->where('name', '=', $name)
            ->where('is_admin', '=', 1)
            ->first();

if ($user) {
return back()->with('success', 'Yes, there is at least one admin user!');
} else {
    return back()->with('error', 'No admin user found.');
}
}
        </code></pre>
    </div>
</div>

    </div>
</div>

    <div class="md:w-1/2">


    <div id="mitigationInfo" class="bg-white rounded-2xl shadow-lg p-6">
    <h2 class="text-2xl font-bold mb-4 font-mono">Mitigating Security Vulnerabilities</h2>
    <p class="mt-4 text-gray-800 font-mono mb-3">By adopting secure coding practices, such as parameterized queries or using frameworks' ORM capabilities, we can effectively safeguard against SQL injection vulnerabilities. The function <code>checkAdminUserSecurely</code> exemplifies a secure approach to verifying admin user presence.</p>
    <p class="text-gray-800 font-mono">After securing our application with the updated function, attempting to use previously effective SQL injection payloads, like:</p>
    <ul class="text-gray-800 font-mono mb-4">
        <li>1. <code>' OR '1'='1</code></li>
        <li>2. <code>admin' AND SLEEP(10) AND '1'='1</code></li>
    </ul>
    <p class="text-gray-800 font-mono">will no longer compromise the application's security. These measures ensure that our queries are resilient against unauthorized manipulations, thus maintaining the integrity and confidentiality of our data.</p>
    <p class="text-gray-800 font-mono">
        As a result, inputs that would have previously led to a security breach now yield responses strictly based on actual data integrity, without exposing the system to SQL injection attacks:
    </p>
    <ul class="text-gray-800 font-mono">
        <li>Entering any known username will accurately reflect the user's admin status without vulnerability exploitation.</li>
        <li>Using complex payloads intended to bypass security checks or induce a response from the database will be ineffective, demonstrating the robustness of our secure implementation.</li>
    </ul>
    <p class="bg-gray-200 p-2 rounded font-bold">
        Note: It is crucial to consistently apply secure coding practices across all aspects of your application to ensure comprehensive protection against SQL injection and other web vulnerabilities.
    </p>

   

</div>



    </div>

 

</div>
@endsection
