<?php
// Start the session
session_start();

// Store data in the session
$_SESSION['username'] = 'admin';
$_SESSION['password'] = 'password';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<!-- resources/views/components/security-misconfig.blade.php -->

<div class=" p-4 rounded-lg">
    {{ $slot }}
    <div class="bg-white p-4 rounded-2xl">
        <p class="text-gray-700 font-mono text-xl mb-2 underline">Practise Section</p>
        <p class="text-gray-700 font-mono text-sm">
            To obtain the flag for this lesson, you must log in using the default admin credentials, which have never been changed or updated. Please proceed to log in to get the flag:
        </p>
        
        <form method="post" action="{{ url('/vulnerabilities/1') }}" class="mt-4 p-4 bg-gray-200 rounded-2xl">
            @csrf <!-- CSRF token for security -->
            <label for="username" class="block">Username:</label>
            <input type="text" value="{{ old('username') }}" name="username" class="border rounded-lg px-3 py-1 mb-2"><br>
        
            <label for="password" class="block">Password:</label>
            <input type="password" name="password" class="border rounded-lg px-3 py-1 mb-2"><br>
        
            <input class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2 hover:bg-blue-600" type="submit" name="login" value="Login">
        </form>
    </div>
</div>

<?php
    if (isset($_POST["login"])) {
        if (!empty($_POST["username"]) && !empty($_POST["password"])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username == $_SESSION['username'] && $password == $_SESSION['password']) {
                echo "<div class='bg-gray-50 p-4 mt-4 rounded-lg shadow-lg border-2 border-blue-900 font-mono'>";
                echo "<p class='text-gray-600  bg-green-100 p-2 rounded-2xl font-bold text-lg'>Authentication Successful</p>";
                echo "<p class='text-green-600 font-bold text-sm'>flag:{9a2c40ac1c53d2705eb48b59c9710982}</p>";
                echo "<p class='font-bold'>Congratulations, , You have successfully completed the lesson and obtained a flag.</p>";
                echo "<p class=' text-blue-600'> Don't forget to submit your flag in the flag section of the menu to track your learning progress.</p>";
                
                echo "<p>You have successfully signed in with the default sign-in details for this application.</p>";
                echo "<p>As you've learned in the first lesson about misconfigurations, remember that using common usernames and passwords like 'admin' and 'password' can pose security risks. Always change default passwords and avoid using default administration usernames.</p>";
                echo "<hr>";
                echo "<p class='mb-0'>Now that you understand the importance of avoiding common credentials, proceed with caution and explore further lessons. Don't forget to submit the flag once you've completed the task!</p>";
                echo "<p><strong>Preventive Measures:</strong></p>";
                echo "<ul class='list-disc ml-6'>";
                echo "<li>Conducting regular security audits and assessments to identify misconfigurations.</li>";
                echo "<li>Implementing automated scanning tools to detect missing patches, default accounts, and unnecessary services.</li>";
                echo "<li>Establishing a robust patch management process to ensure timely updates and fixes to all deployed environments.</li>";
                echo "<li>Enforcing the principle of least privilege to restrict access and reduce the attack surface.</li>";
                echo "</ul>";
                echo "</div>";
            } else {
                echo "<div class='bg-red-100 p-4 mt-4 rounded-lg'>";
                echo "<p class='text-red-500  text-sm'>Sorry, Authentication Unsuccessful</p>";
                echo "</div>";
            }
            echo "<br>";
        } else {
            echo "<div class='bg-red-100 p-4 mt-4 rounded-lg'>";
            echo "<p class='text-red-500  text-sm'>Missing username/password.</p>";
            echo "</div>";
        }
    }
?>
</body>
</html>
