<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function showRegistrationForm(){
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validate the request data, including password confirmation
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|min:5',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // 'confirmed' ensures password and password_confirmation match
        ]);

        // Hash the password before saving
        $validatedData['password'] = bcrypt($validatedData['password']);

        // Create the user
        User::create($validatedData);

        // Redirect to the login page with a success message
        return redirect()->route('login')->with('success', 'User registered successfully.');
    }

    public function login(Request $request)
    {
        // Validate the request data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
    
        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Authentication passed, regenerate session
            $request->session()->regenerate();
    
            // Redirect to the intended page or a default one
            return redirect()->route('dashboard')->with('success', 'You are logged in.');
        }
    
        // Authentication failed, redirect back with an error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email'); // Keep the email input
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
