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

<div class="p-4 m-2 rounded-lg shadow-lg bg-blue-900 border-1 border-blue-900 font-mono mb-8 text-white">
    <div class="bg-gray-200 p-3 mb-4 rounded-2xl hover:bg-gray-300 ">
        <hr class="my-2 border-blue-800">
        <h1 class="text-2xl font-bold mb-4 text-gray-800 pl-24">Practice Section</h1>



        <div class="m-5 transition-transform transform hover:scale-110 focus:scale-110 shadow-2xl p-4 rounded-2xl bg-red-200 border-blue-300">
            <button  class="text-gray-700 font-semibold text-2xl font-mono pl-8 challenge-btn">
            SQL Challenges
            </button>
            
        </div>

       <div class="m-4 rounded-2xl bg-green-200 border-green-400 p-4 mb-6 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 shadow-lg">
            <button id="toggleSqlBasicButton" class=" w-full text-white font-bold text-lg py-6 px-5 rounded-lg bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-700 focus:ring-opacity-50 challenge-btn">
            Basic Challenges
            </button>
            <button id="basicBtnStatus" class="text-sm ml-2 text-gray-700"></button>
        </div>

        <div class="challenge-section m-4 rounded-2xl bg-blue-200 border-blue-400 p-6 mb-6 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 shadow-lg" id="basicChallenges" style="display: none;">
            <button class="w-full bg-blue-500 text-white font-bold text-lg py-3 px-5  rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50 challenge-btn mb-4 transition ease-in-out duration-150">
            1- Basic SQL 
            </button>
            <button class="w-full bg-yellow-500 text-white font-bold text-lg py-3 px-5 rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-700 focus:ring-opacity-50 challenge-btn mb-4 transition ease-in-out duration-150">
            2- Error-based SQL
            </button>
            <button class="w-full bg-red-500 text-white font-bold text-lg py-3 px-5 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-700 focus:ring-opacity-50 challenge-btn mb-4 transition ease-in-out duration-150">
            3- Blind SQL
            </button>
            <button class="w-full bg-red-700 text-white font-bold text-lg py-3 px-5 rounded-lg hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-900 focus:ring-opacity-50 challenge-btn transition ease-in-out duration-150">
            4- SQL Injection
            </button>
        </div>


        <div class="m-4 rounded-2xl bg-green-200 border-green-400 p-4 mb-6 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 shadow-lg">
            <button id="toggleSqlAdButton" class="w-full text-white font-bold text-lg py-6 px-5 rounded-lg bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-700 focus:ring-opacity-50 challenge-btn">
                Advanced Challenges
            </button>
            <button id="advancedBtnStatus" class="text-sm ml-2 text-gray-700"></button>
        </div>

        <div class="challenge-section m-4 rounded-2xl bg-blue-200 border-blue-400 p-6 mb-6 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 shadow-lg" id="advancedChallenges" style="display: none;">
            <button class="w-full bg-blue-500 text-white font-bold text-lg py-3 px-5 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50 challenge-btn mb-4 transition ease-in-out duration-150">
            Challenge 1
            </button>
            <button class="w-full bg-yellow-500 text-white font-bold text-lg py-3 px-5 rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-700 focus:ring-opacity-50 challenge-btn mb-4 transition ease-in-out duration-150">
            Challenge 2
            </button>
            <button class="w-full bg-red-500 text-white font-bold text-lg py-3 px-5 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-700 focus:ring-opacity-50 challenge-btn mb-4 transition ease-in-out duration-150">
            Challenge 3
            </button>
            <button class="w-full bg-red-700 text-white font-bold text-lg py-3 px-5 rounded-lg hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-900 focus:ring-opacity-50 challenge-btn transition ease-in-out duration-150">
            Challenge 4
            </button>
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
