<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    function index() {
        return view('administrator.report.dashboard');
    }
}
