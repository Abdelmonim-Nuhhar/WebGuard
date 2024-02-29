<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weak Session IDs</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
    <div class="p-4 m-2 rounded-lg shadow-lg bg-gray-100 border-2 border-blue-900 font-mono">
        <h1 class="text-xl font-bold mb-2 text-gray-600">Weak Session IDs</h1>

        
        <div>
            <h2 class="text-xl font-semibold mb-2 text-blue-600">Low Level</h2>
            <form method="POST" action="{{ route('weak_session.low') }}">
                @csrf
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Generate Session ID (Low)
                </button>
            </form>

            <form method="POST" action="{{ route('weak_session.low') }}">
                @csrf 
                <div class="mt-4">
                    <label for="found_cookie" class="block text-gray-700 text-sm font-bold mb-2">Enter your guess for the next session ID:</label>
                    <input type="text" id="found_session_id" name="found_session_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mt-4">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Check Session ID
                    </button>
                </div>
            </form>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2 text-yellow-600">Medium Level</h2>
            <form method="POST" action="{{ route('weak_session.medium') }}">
                @csrf 
                <button type="submit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                        Generate Session ID (Medium)
                </button>
            </form>

            <form method="POST" action="{{ route('weak_session.medium') }}">
            @csrf 
            <div class="mt-4">
                <label for="found_session_id_medium" class="block text-gray-700 text-sm font-bold mb-2">Please enter your guess for the next session ID:</label>
                <input type="text" id="found_session_id_medium" name="found_session_id_medium" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Check Session ID
                </button>
            </div>
        </form>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-2 text-red-600">High Level</h2>
            <form method="POST" action="{{ route('weak_session.high') }}">
                @csrf 
                <button type="submit" class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Generate Session ID (High)
                    </button>
                </form>
        </div>

        <form method="POST" action="{{ route('weak_session.high') }}">
            @csrf 
            <div class="mt-4">
                <label for="found_session_id_high" class="block text-gray-700 text-sm font-bold mb-2">Please enter your guess for the next session ID:</label>
                <input type="text" id="found_session_id_high" name="found_session_id_high" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Check Session ID
                </button>
            </div>
        </form>

        <div>
            <h2 class="text-xl font-semibold mb-2 text-red-800">impossible Level</h2>
            <form method="POST" action="{{ route('weak_session.impossible') }}">
                @csrf 
                <button type="submit" class="bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-4 rounded">
                        Generate Session ID (High)
                    </button>
                </form>

                <form method="POST" action="{{ route('weak_session.impossible') }}">
            @csrf 
            <div class="mt-4">
                <label for="found_session_id_high" class="block text-gray-700 text-sm font-bold mb-2">Please enter your guess for the next session ID:</label>
                <input type="text" id="found_session_id_impossible" name="found_session_id_impossible" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Check Session ID
                </button>
            </div>
        </form>
        </div>
    </div>

    @if (Session::has('alert'))
    <script>
        alert("{{ Session::get('alert') }}");
    </script>
    @endif
</body>
</html>
