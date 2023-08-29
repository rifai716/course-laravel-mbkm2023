<?php

namespace App\Http\Controllers;

class ItemController extends Controller
{
    function index() {
        return view('administrator.item.view');
    }
}
