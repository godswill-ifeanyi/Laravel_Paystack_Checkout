<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register_page() {
        return view('auth.register');
    }

    public function register(Request $request) {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user instance
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log the user in (optional)
        Auth::login($user);

        // Redirect to a desired location, e.g., home page
        return redirect()->route('user.index')->with('success', 'Registration successful!');

    }

    public function login_page() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $request->email)->first();

        If (!$user) {
            return redirect()->back()->with('error', 'Account not found');
        }

        $pass_check = Hash::check($request->password, $user->password);

        if (!$pass_check) {
            return redirect()->back()->with('error', 'Password incorrect');
        }

        Auth::login($user);

        return redirect()->route('user.index')->with('success', 'Welcome Back '.$user->name);
    }
}
