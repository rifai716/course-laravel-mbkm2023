<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index(Request $request, $param1) {
        $tmp = $param1;
        $query2 = $request->input('key1');
        return view('test_controller', compact('tmp', 'query2'));
    }
}
