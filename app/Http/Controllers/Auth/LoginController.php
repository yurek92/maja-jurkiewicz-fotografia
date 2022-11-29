<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login-form');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password')))
        {
            return redirect()->route('panel');
        }

        return redirect()->back()->withErrors('Nieprawidłowe dane logowania!', 'invalidData');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login-form');
    }

    public function showPanel()
    {
        return view('panel');
    }
}
