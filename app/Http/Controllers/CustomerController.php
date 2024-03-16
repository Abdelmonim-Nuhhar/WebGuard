<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade

class CustomerController extends Controller
{
    // Method to show the search form
    public function showSearchForm()

    {
        $results = null; // Initialize results variable
        return view('searchForm', ['results' => $results]);
    }

    public function newShowSearchForm()

    {
        $results = null; // Initialize results variable
        return view('newSearchForm', ['results' => $results]);
    }

    public function showResults()

    {
        $results = null; // Initialize results variable
        return view('show-result', ['results' => $results]);
    }
    // Combined method to show the form and handle search
    public function search(Request $request)
    {
        $id = $request->input('id');
    
        // Check if the form is being submitted correctly
       
        // Initialize results variable
        $results = null;
    
        // Execute the SQL query
        if ($id) {
            try {
               
                // Build the query with direct input insertion, making it vulnerable
                $query = "SELECT * FROM customers WHERE id = '$id'"; // Vulnerable part
                // Execute the query without using DB::ra
            $results = DB::select($query); // This is the corrected part
            } catch (\Exception $e) {
                // Log or handle the error
                dd($e->getMessage());
            }
        }
    
        // Return the view, passing the results (which may be null if no search was performed)
        return view('show-results', ['results' => $results]);
        
    }
}
