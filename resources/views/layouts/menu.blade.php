<nav class="flex justify-start">
    <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-md bg-red-200 border-blue-300">
        <a href="{{ url('/') }}" class="text-gray-700 p-5 font-semibold text-3xl font-mono">
            Home
        </a>
    </div>

    <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-md bg-red-200 border-blue-300">
        <a href="{{ route('about') }}" class="text-gray-700 p-5 font-semibold text-3xl font-mono">
            About
        </a>
    </div>

    <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-md bg-red-200 border-blue-300">
        <a href="{{ route('index') }}" class="text-gray-700 p-8 font-semibold text-3xl font-mono">
            Learning Hub
        </a>
    </div>

    <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-md bg-red-200 border-blue-300">
        <a href="{{ route('resources') }}" class="text-gray-700 p-5 font-semibold text-3xl font-mono">
            Resources
        </a>
    </div>

    <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-lg bg-red-200 border-blue-300">
        <a href="{{ route('contact') }}" class="text-gray-700 p-5 font-semibold text-3xl font-mono">
            Contacts
        </a>
    </div>
</nav>
