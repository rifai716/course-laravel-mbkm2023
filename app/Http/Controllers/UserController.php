<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    function admin() {
        $header = 'Data Admin'; 
        return view('administrator.admin.view')->with('header', $header); // sama saja
    }

    function student() {
        $header = 'Data Mahasiswa'; 
        return view('administrator.student.view')->with(compact('header')); // sama saja
    }
}
