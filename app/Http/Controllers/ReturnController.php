<?php

namespace App\Http\Controllers;

class ReturnController extends Controller
{
    function index() {
        return view('administrator.return.view');
    }
}
