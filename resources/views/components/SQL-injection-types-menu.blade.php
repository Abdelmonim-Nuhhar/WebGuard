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
            gap: 10px;
        }
    </style>
</head>
<body>

<div class="p-4 m-2 rounded-lg shadow-lg bg-gray-200 border-1 border-gray-300 font-mono mb-8 text-gray-800">
    <div class="bg-white p-3 mb-4 rounded-2xl ">
        <hr class="my-2 border-blue-800">
        <h1 class="text-2xl font-bold mb-4 text-gray-800 pl-24">Practice Section</h1>

        <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl p-4 rounded-2xl bg-red-200 border-blue-300">
            <button class="text-gray-700 font-semibold text-2xl font-mono pl-8 challenge-btn">
                SQL Challenges
            </button>
        </div>

        <hr class="my-2 border-blue-800">

        <div class="m-4 rounded-2xl bg-indigo-400 border-indigo-300  hover:bg-indigo-300 p-2 mb-6 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 shadow-lg">
            <button id="toggleSqlBasicButton" class="w-full  text-black font-bold text-2xl py-3 px-5 rounded-lg  p-4 mb-2 challenge-btn">
                Basic Challenges
            </button>
            <button id="basicBtnStatus" class="text-sm ml-2 text-gray-700"></button>
        </div>

        <div class="challenge-section m-4 rounded-2xl bg-gray-100 border-gray-300 p-6 mb-6 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 shadow-lg" id="basicChallenges" style="display: none;">
            <a href="{{ route('customer.showSearchForm') }}" class="w-full bg-indigo-300 text-black font-bold text-lg py-3 px-5 rounded-lg hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 challenge-btn mb-4 transition ease-in-out duration-150 block">
                1- Basic SQL
            </a>
            <a href="{{ route('customer.newShowSearchForm') }}" class="w-full bg-indigo-300 text-black font-bold text-lg py-3 px-5 rounded-lg hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 challenge-btn mb-4 transition ease-in-out duration-150 block">
                2- Beyond Basic
            </a>

            <a href="{{ route('customer.newShowSearchForm') }}" class="w-full bg-indigo-300 text-black font-bold text-lg py-3 px-5 rounded-lg hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 challenge-btn mb-4 transition ease-in-out duration-150 block">
                3- Blind SQL
            </a>
            <a href="{{ route('vulnerable.login') }}" class="w-full bg-indigo-300 text-black font-bold text-lg py-3 px-5 rounded-lg hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 challenge-btn mb-4 transition ease-in-out duration-150 block">
                4- SQL Injection
            </a>
          
        </div>

        <div class="m-4 rounded-2xl bg-indigo-400  hover:bg-indigo-300 border-gray-300   p-2 mb-6 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 shadow-lg">
            <button id="toggleSqlAdButton" class="w-full  text-black font-bold text-2xl py-3 px-5 rounded-lg  p-4 mb-2 challenge-btn">
                Advanced Challenges
            </button>
            <button id="advancedBtnStatus" class="text-sm ml-2 text-gray-700"></button>
        </div>

        <div class="challenge-section m-4 rounded-2xl bg-gray-200 border-gray-300 p-6 mb-6 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 shadow-lg" id="advancedChallenges" style="display: none;">
        <a href="{{ route('customer.showSearchForm') }}" class="w-full bg-indigo-300 text-black font-bold text-lg py-3 px-5 rounded-lg hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 challenge-btn mb-4 transition ease-in-out duration-150 block">
                1- Challenge 1
            </a>
            <a href="{{ route('customer.newShowSearchForm') }}" class="w-full bg-indigo-300 text-black font-bold text-lg py-3 px-5 rounded-lg hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 challenge-btn mb-4 transition ease-in-out duration-150 block">
                2- Challenge 2
            </a>

            <a href="{{ route('customer.newShowSearchForm') }}" class="w-full bg-indigo-300 text-black font-bold text-lg py-3 px-5 rounded-lg hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 challenge-btn mb-4 transition ease-in-out duration-150 block">
                3- Challenge 3
            </a>
            <a href="{{ route('customer.newShowSearchForm') }}" class="w-full bg-indigo-300 text-black font-bold text-lg py-3 px-5 rounded-lg hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 challenge-btn mb-4 transition ease-in-out duration-150 block">
                4- Challenges
            </a>
        </div>
    </div>
</div>

<script>
    document.getElementById("toggleSqlBasicButton").addEventListener("click", function() {
        var basicChallenges = document.getElementById("basicChallenges");
        var advancedChallenges = document.getElementById("advancedChallenges");
        var basicBtnStatus = document.getElementById("basicBtnStatus");

        if (basicChallenges.style.display === "none") {
            basicChallenges.style.display = "block";
            basicBtnStatus.innerText = "Hide";
            advancedChallenges.style.display = "none";
            document.getElementById("advancedBtnStatus").innerText = "";
        } else {
            basicChallenges.style.display = "none";
            basicBtnStatus.innerText = "";
        }
    });

    document.getElementById("toggleSqlAdButton").addEventListener("click", function() {
        var basicChallenges = document.getElementById("basicChallenges");
        var advancedChallenges = document.getElementById("advancedChallenges");
        var advancedBtnStatus = document.getElementById("advancedBtnStatus");

        if (advancedChallenges.style.display === "none") {
            advancedChallenges.style.display = "block";
            advancedBtnStatus.innerText = "Hide";
            basicChallenges.style.display = "none";
            document.getElementById("basicBtnStatus").innerText = "";
        } else {
            advancedChallenges.style.display = "none";
            advancedBtnStatus.innerText = "";
        }
    });
</script>

</body>
</html>
