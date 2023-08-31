<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class TestInputController extends Controller
{
    function index() {
        Item::create([
            'name' => 'Arduino UNO',
            'type' => 'Habis Pakai',
            'condition' => 'Bagus',
            'quantity' => 100
        ]);
        echo 'sukses';
    }

    function test_input(Request $request) {
        Item::create([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'condition' => $request->input('condition'),
            'quantity' => $request->input('quantity')
        ]);
        echo 'sukses';
    }

    function form() {
        return view('test_form');
    }

    function table() {
        // $data = Item::all();
        $data = Item::where('condition', 'Bagus')->where('quantity', '>', 999)->orderBy('name')->get();
        // dd($data);
        return view('testing-table', compact('data'));
    }
}
