<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Retrieve the submitted username and password from the form
        $username = $request->input('username');
        $password = $request->input('password');
        
        // Define the correct username and password (in a real application, retrieve from a database)
        $correctUsername = 'admin';
        $correctPassword = 'admin';
        
        // Check if the submitted credentials match the correct credentials
        if ($username === $correctUsername && $password === $correctPassword) {
            // If the credentials are correct, redirect to the dashboard
            return redirect()->route('dashboard');
        } else {
            // If the credentials are incorrect, redirect back with an error message
            return redirect()->back()->with('error', 'Invalid username or password.');
        }
    }
}
