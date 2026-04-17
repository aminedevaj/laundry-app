<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        // Protected routes use admin guard
        $this->middleware('auth:admin')->except(['loginForm','login']);
    }

    public function loginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // Validate input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt login using admin guard
        if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        // Login failed
        return back()->withErrors([
            'email' => 'Invalid email or password',
        ]);
    }

public function index()
{
    // middleware khass yverify session, ma b9ach khass check hna
    return view('admin.dashboard');
}


    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}