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
   
    @auth
        <a href="{{ route('index') }}" class="text-gray-700 p-8 font-semibold text-3xl font-mono">
            Learning Hub
        </a>
    
    @else
        <a href="{{ route('login') }}" class="text-gray-700 p-8 font-semibold text-3xl font-mono">
            Learning Hub
        </a>
    @endauth
    </div>

    @can('create', App\Models\Vulnerability::class)
        <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-md bg-red-200 border-blue-300">
            <a href="{{ route('create') }}" class="text-gray-700 p-8 font-semibold text-3xl font-mono">
                Mange
            </a>
        </div>
    @endcan

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
