<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    function login() {
        return view('auth.login');
    }

    function loginProcess(Request $request) {
        $validator = Validator::make($request->all(), [
            'user' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $auth = Auth::attempt(['email' => $request->user, 'password' => $request->password]);
        if($auth) {
            return redirect()->route('administrator.dashboard');
        } else {
            return redirect()->back()->withErrors(['Email dan Password tidak cocok !']);
        }

    }

    function forgotPassword() {
        return view('auth.forgot-password');
    }
}
