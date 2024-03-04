<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weak Session IDs</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <script>
    function showLevel() {
        var selectedLevel = document.getElementById('level').value;
        var levels = document.querySelectorAll('.level-section');

        levels.forEach(function(level) {
            if (level.id === selectedLevel) {
                level.style.display = 'block';
            } else {
                level.style.display = 'none';
            }
        });
    }

   /* function showLowSection() {
    // Display the div with ID 'low-section'
    document.getElementById("low").style.display = "block";
    // Optionally show a message or perform any other action
    
}*/


    </script>
</head>
<body>
    <div class="p-4 m-2 rounded-lg shadow-lg bg-gray-100 border-2 border-blue-900 font-mono mb-16">

    <div class="bg-gray-200 p-3 mb-4 rounded-2xl hover:bg-gray-300 border-blue-700 border-2">
        <h1 class="text-xl font-bold mb-2 text-gray-800">Weak Session IDs</h1>
        <hr class="my-2 border-blue-800">
        <h1 class="text-xl font-bold mb-2 text-gray-800">Practice Section</h1>


        <select id="level" name="level" onchange="showLevel()" 
        class="mt-1 block w-full border-gray-300 focus:border-red-400 focus:ring focus:ring-red-400 
        focus:ring-opacity-50 rounded-2xl shadow-sm p-2 text-2xl font-mono p-4 mb-8"> 
            <option value="">Select Level</option> 
            <option value="low">Low Level</option> 
            <option value="medium">Medium Level</option> 
            <option value="high">High Level</option> 
            <option value="impossible">Impossible Level</option> 
        </select> 

    </div>
        

    <div class="bg-gray-200 p-3 mb-4 rounded-2xl hover:bg-gray-300 border-blue-700 border-2">
        <hr class="my-2 border-blue-800">
        @if (session('message'))
            <div class="alert alert-info text-xl font-semibold mb-2 text-red-600">
            Generated {{ session('message') }}
            </div>
            
        @endif
    </div>
        

        <div class="bg-gray-300 p-6 mb-8 rounded-2xl hover:bg-gray-200 level-section" id="low" style="display: none;">
            <h2 class="text-xl font-semibold mb-2 text-blue-600">Low Level</h2>
            <form method="POST" action="{{ route('weak_session.low') }}" style="display: block;">
                @csrf
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded " onclick="showLowSection()">
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
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Check Session ID
                    </button>
                </div>
            </form>
        </div>

        <div class="bg-gray-300 p-6 mb-8 rounded-2xl hover:bg-gray-200 level-section" id="medium" style="display: none;">
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
                <button type="submit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                    Check Session ID
                </button>
            </div>
        </form>
        </div>

        <div class="bg-gray-300 p-6 mb-8 rounded-2xl hover:bg-gray-200 level-section" id="high" style="display: none;">
        <div>
            <h2 class="text-xl font-semibold mb-2 text-red-600">High Level</h2>
            <form method="POST" action="{{ route('weak_session.high') }}">
                @csrf 
                <button type="submit" class="bg-red-300 hover:bg-red-700 text-gray-700 font-bold py-2 px-4 rounded">
                        Generate Session ID (High)
                    </button>
                </form>
        </div>



        <form method="POST" action="{{ route('weak_session.high') }}">
            @csrf 
            <div class="mt-4 ">
                <label for="found_session_id_high" class="block text-gray-700 text-sm font-bold mb-2">Please enter your guess for the next session ID:</label>
                <input type="text" id="found_session_id_high" name="found_session_id_high" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-red-300 hover:bg-red-700 text-gray-700 font-bold py-2 px-4 rounded">
                    Check Session ID
                </button>
            </div>
        </form>
        </div>

        <div class="bg-gray-300 p-6 mb-8 rounded-2xl hover:bg-gray-200 level-section" id="impossible" style="display: none;">
            <h2 class="text-xl font-semibold mb-2 text-red-800">impossible Level</h2>
            <form method="POST" action="{{ route('weak_session.impossible') }}">
                @csrf 
                <button type="submit" class="bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-4 rounded">
                        Generate Session ID (Impossible)
                </button>
                </form>

                <form method="POST" action="{{ route('weak_session.impossible') }}">
            @csrf 
            <div class="mt-4">
                <label for="found_session_id_high" class="block text-gray-700 text-sm font-bold mb-2">Please enter your guess for the next session ID:</label>
                <input type="text" id="found_session_id_impossible" name="found_session_id_impossible" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-4 rounded">
                    Check Session ID
                </button>
            </div>
        </form>
        </div>
    </div>




</body>
</html>
