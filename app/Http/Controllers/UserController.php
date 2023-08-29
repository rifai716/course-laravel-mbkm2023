<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    function admin() {
        return view('administrator.user.view');
    }

    function student() {
        return view('administrator.user.view');
    }
}
