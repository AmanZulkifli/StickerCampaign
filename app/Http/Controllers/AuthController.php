<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'driver') {
                return redirect()->route('dashboard');
            }

            Auth::logout();
            return back()->withErrors(['email' => 'Only drivers can login here.']);
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
            'phone_number' => 'required|string|max:15',
            'grab_driver_id' => 'nullable|string|max:50',
            'car_make_model' => 'required|string|max:100',
            'production_year' => 'required|integer|between:1900,2100',
            'license_plate_number' => 'required|string|max:20|unique:users',
            'car_color' => 'required|string|max:30',
            'agreed_to_terms' => 'required|boolean',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $validated['role'] = 'driver';

        $user = User::create($validated);

        Auth::login($user);
        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
