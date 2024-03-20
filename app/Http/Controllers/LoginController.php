<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function store(Request $request)
{
    $credentials = $request->only('email', 'password');
    
    if (Auth::attempt($credentials)) {
        // Authentication passed
        return redirect()->route('index');
    } else {
        return "hhhhhhh";
    }
    

    // Authentication failed
    return redirect()->route('login')->withErrors(['email' => 'Invalid credentials']);

}
public function logout(Request $request)
{
    Auth::guard('web')->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');
}

}
