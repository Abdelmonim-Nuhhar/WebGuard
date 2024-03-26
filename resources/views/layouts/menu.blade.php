<nav class="flex justify-start">
    <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-md bg-indigo-600 border-blue-300">
        <a href="{{ url('/') }}" class="text-gray-100 p-5 font-semibold text-2xl font-mono">
            Home
        </a>
    </div>

    <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-md bg-indigo-600 border-blue-300">
        <a href="{{ route('about') }}" class="text-gray-100 p-5 font-semibold text-2xl font-mono">
            About
        </a>
    </div>

    @can('create', App\Models\Vulnerability::class)
    <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-md bg-indigo-600 border-blue-300 p-2">
        <a href="{{ route('index') }}" class="text-white p-4 font-semibold text-xl font-mono">
            Edit L-Hub
        </a>
    </div>
    @endcan

    <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-md bg-indigo-600 border-blue-300">
        @auth
            @can('create', App\Models\Vulnerability::class)
                <a href="{{ route('create') }}" class="text-gray-100 p-8 rounded-2xl font-bold text-2xl font-mono ">
                    Add Vulnerability
                </a>
            @else
                <a href="{{ route('index') }}" class="text-gray-100 p-4 font-semibold text-xl font-mono">
                    Learning Hub
                </a>
            @endcan
        @else
            <a href="{{ route('login') }}" class="text-gray-100 p-4 font-semibold text-xl font-mono">
                Learning Hub
            </a>
        @endauth
    </div>

    @auth
        @cannot('create', App\Models\Vulnerability::class)
            <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-lg bg-indigo-600 border-blue-300">
                <a href="{{ route('showFlagSubmissionForm') }}" class="text-gray-100 p-4 font-semibold text-2xl font-mono">
                    Flags/Dashboard
                </a>
            </div>
        @endcannot
    @endauth

    <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-md bg-indigo-600 border-blue-300">
        <a href="{{ route('resources') }}" class="text-gray-100 p-5 font-semibold text-2xl font-mono">
            Resources
        </a>
    </div>

    <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-lg bg-indigo-600 border-blue-300">
        <a href="{{ route('contact') }}" class="text-gray-100 p-5 font-semibold text-2xl font-mono">
            Contacts
        </a>
    </div>

    <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl rounded-lg bg-indigo-600 border-blue-300">
        <a href="{{ route('live.news') }}" class="text-gray-100 p-5 font-semibold text-xl font-mono">
            Live News
        </a>
    </div>
</nav>
