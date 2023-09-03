<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    function index() {
        $items = Item::with('user', 'user.admin')->where('user_id', auth()->user()->id)->get();
        return view('administrator.item.view', compact('items'));
    }

    function show($id) {
        // tidak digunakan
    }

    function create() {
        return view('administrator.item.add');
    }

    function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required',
            'condition' => 'required',
            'quantity' => 'required|numeric',
        ]);

        if($validator->fails()) return redirect()->back()->withErrors($validator);

        $request->merge(['user_id' => auth()->user()->id]);

        $item = Item::create($request->all());

        if($item) return redirect()->route('administrator.item.index')->with('message', 'Berhasil tambah data barang');
        else return redirect()->route('administrator.item.index')->with('message', 'Gagal tambah data barang');
    }

    function edit(Item $item) {
        return view('administrator.item.edit', compact('item'));
    }

    function update(Request $request, Item $item) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required',
            'condition' => 'required',
            'quantity' => 'required|numeric'
        ]);

        if($validator->fails()) return redirect()->back()->withErrors($validator);

        $item = Item::where('id', $item->id)->update($request->except('_token', '_method'));

        if($item) return redirect()->route('administrator.item.index')->with('message', 'Berhasil perbarui data barang');
        else return redirect()->route('administrator.item.index')->with('message', 'Gagal perbarui data barang');
    }

    function destroy(Item $item) {
        $deleted = Item::where('id', $item->id)->delete();
        if ($deleted) return response()->json([
            'message' => 'Berhasil hapus data'
        ], 200);
        else return response()->json([
            'message' => 'Gagal hapus data'
        ], 400);
    }
}
