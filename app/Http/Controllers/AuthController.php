<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import DB facade
use Illuminate\Support\Facades\Hash; // Import Hash facade



class AuthController extends Controller
{
    //
    public function vulnerableLoginForm()
{
    // Return the view for the vulnerable login form
    return view('vulnerable-login');
}

public function vulnerableLogin(Request $request)
{
    // Directly fetch the name input from the request, which is vulnerable to SQL injection
    $name = $request->input('username');

    // Concatenate the user input into the SQL query without any sanitization
    $users = DB::select("SELECT * FROM users WHERE name = '{$name}' LIMIT 1");


    
    if (!empty($users)) {
        $user = $users[0]; // Assuming the query returns at least one user
        // Correctly verify the password using Hash::check()
        
        if (Hash::check($request->input('password'), $user->password)) {
            // Login successful, flash the user's name to the session
            session(['userName' => $user->name]); // Store user's name in session for access after redirect
            return redirect('/dashboard')->with('success', "Successfully logged in as {$user->name}!");
        }
    }

    // Login failed
    return back()->withErrors(['vulnerable-login' => 'Invalid username or password.']);
}


public function blindForm()
    {
        // Return a view with a form where users can input their guess
        return view('blind-form');
    }

public function blindChallenge(Request $request)
{
    $name = $request->input('username'); // Hypothetical user input

    // Vulnerable SQL query incorporating user input
    $query = "SELECT * FROM users WHERE name = '" . $name . "' AND is_admin = 1";

    $user = DB::select($query);

    if (!empty($user)) {
        return back()->with('success', 'Yes, there is at least one admin user!');
    } else {
        return back()->with('error', 'No admin user found.');
    }
}

public function secureBlindForm()
    {
        // Return a view with a form where users can input their guess
        return view('secure-blind-form');
    }

public function secureBlindChallenge(Request $request)
{
    $name = $request->input('username'); // User input
    $fileContent = file_get_contents('C:\Users\Hilmee\PP\web-guard\files\medium_level_source_code.txt');

    // Secure query using Laravel's query builder
    $user = DB::table('users')
              ->where('name', '=', $name)
              ->where('is_admin', '=', 1)
              ->first();

    if ($user) {
        return back()->with('success', 'Yes, there is at least one admin user!');
    } else {
        return back()->with('error', 'No admin user found.');
    }
}






}

