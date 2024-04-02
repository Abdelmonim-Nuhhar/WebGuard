@extends('layouts.new-app') <!-- Extend main layout -->

@section('content')

<div class="flex justify-between space-x-4">
   
    <!-- XSS Menu Section -->
    <div class="w-1/3 bg-gray-100 rounded-2xl shadow-md p-4">
    <x-storedXSS-levels></x-storedXSS-levels>
    </div>
   
    <!-- Practice Section -->
    <div class="w-1/3 bg-gray-200 rounded-xl shadow-lg p-6 space-y-6">
 

        <!-- Form for submitting new entries -->
        <form action="{{ route('storedXSS.storeImpossible') }}" method="POST" class="space-y-4 bg-white p-4 rounded-lg shadow">
            @csrf <!-- CSRF token for security -->
            <div>
            <label for="name" class="block mb-4 text-2xl font-bold font-mono text-gray-700">Stored XSS Impossible Level Vulnerability:</label>
                <label for="name" class="block text-sm font-medium text-gray-700">Your Name:</label>
                <input type="text" id="name" name="name" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Your Message:</label>
                <textarea id="message" name="message" rows="4" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm"></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold hover:bg-blue-800 text-lg py-3 px-5 rounded-lg  focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50">
            Submit
            </button>
        </form>

         <!-- Displaying and toggling the code -->
         <div class="bg-gray-200 rounded-lg shadow-md p-4">
         <p class="text-gray-700 text-sm mb-4 font-mono">Click on "Show code" to reveal the secure code for storing XSS:</p>

            <button id="toggleCodeBtn" class="px-6 py-2 bg-green-600 hover:bg-grren-700 focus:outline-none focus:ring-2
             focus:ring-blue-500 focus:ring-offset-2 text-white font-bold rounded-md">Show Code</button>
            <div id="codeSection" class="hidden">
            <pre style="background-color: black; color: orange; overflow-x: auto; padding: 1em; border-radius: 5px;">
                    <code>
public function storeImpossibleLevelComment(Request $request)
{
    // Retrieve user input from the request and manually sanitize
    $message = htmlspecialchars(strip_tags($request->input('message')), ENT_QUOTES, 'UTF-8');
    $name = htmlspecialchars(strip_tags($request->input('name')), ENT_QUOTES, 'UTF-8');

    // Update database
    DB::table('guestbook')->insert([
        'comment' => $message,
        'name' => $name,
    ]);

    // Redirect back or to another page
    return redirect()->back();
}
                    </code>
                </pre>
            </div>
        </div>

        <!-- Displaying comments -->
        <div class="space-y-4">
            @foreach ($comments as $comment)
                <div class="bg-white p-4 rounded-lg shadow">
                    <strong class="text-sm font-medium">{{ $comment->name }}</strong>: <span class="text-sm">{!! $comment->comment !!}</span>
                </div>
            @endforeach
        </div>

        <!-- Form for clearing the guestbook -->
        <form action="{{ route('guestbook.clear') }}" method="POST" class="text-right">
            @csrf
            <button type="submit" class="px-6 py-2 bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2
             focus:ring-blue-500 focus:ring-offset-2 text-white font-bold rounded-md" onclick="return confirm('Are you sure you want to clear all entries?')">
                Rest Guestbook DB
            </button>
        </form>
    </div>

    <div class="w-1/3 bg-gray-200 rounded-xl shadow-lg p-6 space-y-6">
    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
    <p class="text-lg text-gray-800">
        The Impossible Level theoretically represents a state where stored XSS vulnerabilities have been mitigated to such an extent that exploiting them becomes computationally infeasible with current technology and techniques. In practice, achieving an "impossible" level is highly challenging but serves as an aspirational goal. This level involves employing a combination of rigorous input validation and sanitization, content security policies, and perhaps even isolating user-generated content in such a way that it cannot influence the application or other users' content.
    </p>
    <p class="mt-2 text-gray-700 text-sm">
        This form incorporates multiple layers of defense mechanisms, including stringent input validation and sanitization, along with measures to prevent unauthorized actions such as CSRF attacks. User input is thoroughly sanitized to remove any potentially harmful content, making it extremely difficult for attackers to exploit stored XSS vulnerabilities. Additionally, content security policies and other security measures are likely implemented to further bolster the application's defenses against XSS attacks.
    </p> 
</div>
</div>

@endsection

@push('scripts')

@endpush
