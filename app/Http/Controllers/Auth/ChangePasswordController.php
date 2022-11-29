<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class ChangePasswordController extends Controller
{
    public function showChangePasswordForm()
    {
        return view('auth.change-password-form');
    }
}
