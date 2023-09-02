<?php

namespace App\Http\Controllers;

use App\Models\User;

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
}
