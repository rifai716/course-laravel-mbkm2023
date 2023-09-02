<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    function admin()
    {
        $header = 'Data Admin';
        $data = User::with('admin')->where('role', 'admin')->get();
        return view('administrator.admin.view')->with('header', $header)->with('data', $data); // sama saja
    }

    function student()
    {
        $header = 'Data Mahasiswa';
        return view('administrator.student.view')->with(compact('header')); // sama saja
    }

    function formCreateAdmin()
    {
        return view('administrator.admin.add');
    }

    function processCreateAdmin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'position' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user = User::create($request->except('position'));
        if (!$user) return redirect()->back()->withErrors(['Gagal membuat user !']);
        $admin =  Admin::create([
            'user_id' => $user->id,
            'position' => $request->input('position')
        ]);
        if(!$admin) return redirect()->back()->withErrors(['Gagal membuat admin !']);
        return redirect()->route('administrator.admin')->with('message', 'Berhasil membuat user admin');
    }

    function formEditAdmin($id) {
        $user = User::with('admin')->where('id', $id)->firstOrFail();
        return view('administrator.admin.edit', compact('id', 'user'));
    }

    function processEditAdmin(Request $request, $id) {
        if($request->input('password') != '') {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:100',
                'email' => 'required|email',
                'password' => 'required|min:6',
                'position' => 'required'
            ]);    

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }

            $user = User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $admin = Admin::where('user_id', $id)->update([
                'position' => $request->position
            ]);

            if($user && $admin) return redirect()->route('administrator.admin')->with('message', 'Berhasil perbarui data');
            else return redirect()->route('administrator.admin')->with('message', 'Gagal perbarui data');
        } else {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:100',
                'email' => 'required|email',
                'position' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }

            $user = User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email
            ]);

            $admin = Admin::where('user_id', $id)->update([
                'position' => $request->position
            ]);

            if($user && $admin) return redirect()->route('administrator.admin')->with('message', 'Berhasil perbarui data');
            else return redirect()->route('administrator.admin')->with('message', 'Gagal perbarui data');
        }
    }
}
