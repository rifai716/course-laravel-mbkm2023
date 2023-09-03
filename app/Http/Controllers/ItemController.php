<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    function index() {
        $items = Item::where('user_id', auth()->user()->id)->get();
        return view('administrator.item.view', compact('items'));
    }

    function show($id) {
        // tidak digunakan
    }

    function create() {
        return view('administrator.item.add');
    }

    function store(Request $request) {
        
    }

    function edit() {
        return view('administrator.item.edit');
    }

    function update(Request $request) {
        
    }

    function destroy($id) {
        
    }
}
