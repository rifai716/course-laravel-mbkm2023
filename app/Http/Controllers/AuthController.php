<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    function login() {
        return view('auth.login');
    }

    function forgot_password() {
        return view('auth.forgot-password');
    }
}
