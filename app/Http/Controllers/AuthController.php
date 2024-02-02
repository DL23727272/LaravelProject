<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($this->authenticate($request->input('username'), $request->input('password'))) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withInput()->withErrors(['error' => 'Invalid credentials']);
    }

    protected function authenticate($username, $password)
    {

        $user = DB::table('admin')->where('name', $username)->first();

        if ($user && ($this->isMd5Equal($password, $user->password) || Hash::check($password, $user->password))) {
            return true;
        }

        return false; 
    }

    protected function isMd5Equal($password, $hashedPassword)
    {
        return md5($password) === $hashedPassword;
    }


    public function adminDashboard()
    {
        return view('admin');
    }
}
