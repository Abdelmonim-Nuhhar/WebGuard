<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection Practice</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional CSS can be added here */
        .challenge-btn {
            transition: all 0.3s ease;
        }

        .challenge-btn:hover {
            transform: scale(1.05);
        }

        .challenge-section {
            display: flex;
            flex-wrap: wrap;
            gap: 5px; /* Reduced gap */
        }
    </style>
</head>
<body>

<div class="p-2 m-1 rounded-lg shadow bg-gray-200 border border-gray-300 font-mono mb-4 text-gray-800">
    <div class="bg-white p-2 mb-2 rounded-xl">
        <hr class="my-1 border-blue-800">
        <h1 class="text-lg font-bold mb-2 text-gray-800 pl-8">Practice Section</h1>

        <hr class="my-1 border-blue-800">

        <div class="m-2 rounded-lg bg-indigo-400 border-indigo-300 hover:bg-indigo-300 p-1 mb-4 transition duration-300 ease-in-out transform hover:-translate-y-0.5 hover:scale-105 shadow">
            <button id="toggleSqlBasicButton" class="w-full text-black font-bold text-lg py-2 px-3 rounded-lg p-2 mb-1 challenge-btn">
               Challenges Menu
            </button>
            <button id="basicBtnStatus" class="text-xs ml-1 text-gray-700"></button>
        </div>

        <div class="challenge-section m-2 rounded-xl bg-gray-100 border-gray-300 p-4 mb-4 transition duration-300 ease-in-out transform hover:-translate-y-0.5 hover:scale-105 shadow">
            <a href="{{ route('customer.showSearchForm') }}" class="w-full bg-indigo-300 text-black font-bold text-sm py-2 px-3 rounded-lg hover:bg-indigo-400 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:ring-opacity-50 challenge-btn mb-2 transition ease-in-out duration-150 block">
                1- Basic SQL
            </a>
            <a href="{{ route('customer.newShowSearchForm') }}" class="w-full bg-indigo-300 text-black font-bold text-sm py-2 px-3 rounded-lg hover:bg-indigo-400 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:ring-opacity-50 challenge-btn mb-2 transition ease-in-out duration-150 block">
                2- Beyond Basic
            </a>

            <a href="{{ route('blind.form') }}" class="w-full bg-indigo-300 text-black font-bold text-sm py-2 px-3 rounded-lg hover:bg-indigo-400 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:ring-opacity-50 challenge-btn mb-2 transition ease-in-out duration-150 block">
                3- Blind SQL
            </a>
            <a href="{{ route('vulnerable.login') }}" class="w-full bg-indigo-300 text-black font-bold text-sm py-2 px-3 rounded-lg hover:bg-indigo-400 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:ring-opacity-50 challenge-btn mb-2 transition ease-in-out duration-150 block">
                4- SQL Injection
            </a>
          
        </div>

        
  
    </div>
</div>


</body>
</html>
