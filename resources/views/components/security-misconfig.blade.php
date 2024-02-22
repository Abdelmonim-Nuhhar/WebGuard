<?php
// Start the session
session_start();

// Store data in the session
$_SESSION['username'] = 'admin';
$_SESSION['password'] = 'password';

/* Retrieve data from the session
if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    echo "Welcome back, $username. Your password is: $password";
} else {
    echo 'Welcome, Guest';
}
*/
// Destroy the session
//session_destroy();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .success-message  {
        
        font-size:14px; /* Increase font size */
        font-weight: bold; /* Make it bold */
        text-align: center; /* Center align the text */
        text-transform: uppercase; /* Uppercase the text */
        padding: 10px; /* Add padding for better readability */
        border: 2px solid green; /* Add border */
        border-radius: 10px; /* Add border radius for rounded corners */
        background-color: #f0f8ff; /* Light blue background color */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add shadow effect */
        margin-bottom: 20px; /* Add margin at the bottom */
        color: green;
    }

    .flags{
        color: red;
        font-weight: bold;
        border: 2px solid green; 
        border-radius: 10px; /* Add border radius for rounded corners */
        background-color: #f0f8ff; /* Light blue background color */
        padding: 10px;
    }
</style>
</head>
<body>
<!-- resources/views/components/security-misconfig.blade.php -->

<div class="bg-blue-100 p-1 rounded-lg  pb-4">
    {{ $slot }}
    <p>
    <div class="text-1g mb-4 bg-white p-2 rounded-2xl ">
        <p><span class="text-gray-700 font-mono text-2xl"> Practise Section </span></p>
    <span class="text-red-500 font-mono text-xl">
    To obtain the flag for this lesson, you must log in using the default admin credentials, which have never been changed or updated. Please proceed to log in to get the flag:
    </p>
    </span>
        <br><br>
        <form method="post" action="{{ url('/vulnerabilities/4') }}">
        @csrf <!--  this CSRF token for security -->
        <label for="username">Username:</label><br>
        <input type="text" name="username"><br>
        
        <label for="password">Password:</label><br>
        <input type="password" name="password"><br><br>
        
        <input class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-2 hover:bg-blue-600" type="submit" name="login" value="login">
        </form>
    </div>
    

</div>

</body>
</html>
<?php
    if (isset($_POST["login"])) {
        if (!empty($_POST["username"]) && !empty($_POST["password"])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username == $_SESSION['username'] && $password == $_SESSION['password']) {
                echo "<span class='success-message'>Authentication Successful</span> <br>";

                echo "<br> <br>  <span class='success-message'> FLAG{Security_Misconfigurations_Are_Important_To_Address}</span> <br><br>";

?>
<div class="p-4 m-2 rounded-lg shadow-lg bg-gray-50 border-2 border-blue-900 font-mono">
                <div class="alert alert-success" role="alert">
                <div class="text-1g mb-4 bg-white p-4 rounded-2xl">
                    <p class="text-gray-700 p-4 font-bold text-xl font-mono ">
                    Congratulations, <span class="text-red-600 text-1g">{{ Auth::user()->name }}</span>, You have successfully completed the lesson and obtained a flag.
                    </p>
                </div>
                    <p>You have successfully signed in with the default sign-in details for this application.</p>
                    <p>As you've learned in the first lesson about misconfigurations, remember that using common usernames and passwords like "admin" and "password" can pose security risks. Always change default passwords and avoid using default administration usernames.</p>
                    <hr>
                    <p class="mb-0">Now that you understand the importance of avoiding common credentials, proceed with caution and explore further lessons. Don't forget to submit the flag once you've completed the task!</p>
                    <p>
                    Preventive Measures:
To mitigate the risks associated with security misconfigurations, developers and system administrators must collaborate to ensure proper configuration across the entire application stack. Key preventive measures include:

Conducting regular security audits and assessments to identify misconfigurations.
Implementing automated scanning tools to detect missing patches, default accounts, and unnecessary services.
Establishing a robust patch management process to ensure timely updates and fixes to all deployed environments.
Enforcing the principle of least privilege to restrict access and reduce the attack surface.
                    </p>
                </div>
</div>
<?php
            } else {
                echo "<span class='flags'> Sorry, Authentication Unsuccessful </span>";
            }

            echo "<br>";
            
        } else {
            echo "<span class='flags'>Missing username/password. <br></span>";
        }
    }
?>
