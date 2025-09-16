<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('welcome'); // our login form is inside welcome.blade.php
    }

    public function login(Request $request)
    {
        $request->validate([
            'usn' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('usn', $request->usn)->first();

        if ($user && Hash::check($request->password, $user->password_hash)) {
            Auth::login($user);

            return redirect('/student/dashboard');
        }

        return back()->withErrors([
            'login_error' => 'Invalid username or password.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function showRegisterForm()
    {
        return view('register'); // new registration form view
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'usn'        => 'required|string|max:50|unique:users,usn',
            'email'      => 'required|email|unique:users,email',
            'phone_number' => 'nullable|string|max:20',
            'password'   => 'required|string|min:6|confirmed',
        ]);

        $user = \App\Models\User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'usn'        => $request->usn,
            'email'      => $request->email,
            'phone_number' => $request->phone_number,
            'password_hash' => bcrypt($request->password),
            'role'       => 'student',
            'is_active'  => 0,
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }
}

