<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate the login form data
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);


        if ($this->authenticate($request->input('username'), $request->input('password'))) {
            // Authentication successful, redirect to admin/admin.php
            return redirect('components/admin/admin.php');
        }

        // Authentication failed, redirect back to the login form with an error message
        return redirect()->back()->withInput()->withErrors(['error' => 'Invalid credentials']);
    }

    protected function authenticate($username, $password)
    {
        // Fetch the user record from the database based on the provided username
        $user = DB::table('admin')->where('name', $username)->first();

        // Check if the user exists and the password is correct
        if ($user && Hash::check($password, $user->password)) {
            return true; // Authentication successful
        }

        return false; // Authentication failed
    }
}
