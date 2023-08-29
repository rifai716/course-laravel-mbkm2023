<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    function view(Request $request) {
        $search = $request->input('search');
        $order = $request->input('order');
        // return view('table', compact('search', 'order'));
        return view('learning.table', ['search' => $search, 'order' => $order]);
    }
}
