<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Student;
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
        $data = User::with('student')->where('role', 'student')->get();
        return view('administrator.student.view')->with(compact('header'))->with('data', $data);; // sama saja
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
        if (!$admin) return redirect()->back()->withErrors(['Gagal membuat admin !']);
        return redirect()->route('administrator.admin')->with('message', 'Berhasil membuat user admin');
    }

    function formEditAdmin($id)
    {
        $user = User::with('admin')->where('id', $id)->firstOrFail();
        return view('administrator.admin.edit', compact('id', 'user'));
    }

    function processEditAdmin(Request $request, $id)
    {
        if ($request->input('password') != '') {
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

            if ($user && $admin) return redirect()->route('administrator.admin')->with('message', 'Berhasil perbarui data');
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

            if ($user && $admin) return redirect()->route('administrator.admin')->with('message', 'Berhasil perbarui data');
            else return redirect()->route('administrator.admin')->with('message', 'Gagal perbarui data');
        }
    }

    function processDeleteAdmin($id)
    {
        $deleted = User::where('id', $id)->delete();
        if ($deleted) return response()->json([
            'message' => 'Berhasil hapus data'
        ], 200);
        else return response()->json([
            'message' => 'Gagal hapus data'
        ], 400);
    }


    /** --------------- */
    /** STUDENT ------- */
    /** --------------- */

    function formCreateStudent()
    {
        return view('administrator.student.add');
    }

    function processCreateStudent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nim' => 'required|max:10',
            'name' => 'required|max:100',
            'email' => 'required|email',
            // 'password' => 'required|min:6', // default nim
            'nim' => 'required',
            'department' => 'required',
            'class' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $request->merge(['password' => $request->input('nim')]); // set password from nim
        $request->merge(['role' => 'student']);

        $user = User::create($request->except(['nim','department','class']));
        if (!$user) return redirect()->back()->withErrors(['Gagal membuat user !']);
        $student =  Student::create([
            'user_id' => $user->id,
            'nim' => $request->input('nim'),
            'department' => $request->input('department'),
            'class' => $request->input('class')
        ]);
        if (!$student) return redirect()->back()->withErrors(['Gagal membuat student !']);
        return redirect()->route('administrator.student')->with('message', 'Berhasil membuat user student');
    }

    function formEditStudent($id)
    {
        $user = User::with('student')->where('id', $id)->firstOrFail();
        return view('administrator.student.edit', compact('id', 'user'));
    }

    function processEditStudent(Request $request, $id)
    {
        if ($request->password != '') {
            $validator = Validator::make($request->all(), [
                'nim' => 'required|max:10',
                'name' => 'required|max:100',
                'email' => 'required|email',
                'password' => 'required|min:6',
                'nim' => 'required',
                'department' => 'required',
                'class' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }

            $user = User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $student = Student::where('user_id', $id)->update([
                'nim' => $request->nim,
                'department' => $request->department,
                'class' => $request->class
            ]);

            if ($user && $student) return redirect()->route('administrator.student')->with('message', 'Berhasil perbarui data');
            else return redirect()->route('administrator.student')->with('message', 'Gagal perbarui data');
        } else {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:100',
                'email' => 'required|email',
                'nim' => 'required',
                'department' => 'required',
                'class' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }

            $user = User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email
            ]);

            $student = Student::where('user_id', $id)->update([
                'nim' => $request->nim,
                'department' => $request->department,
                'class' => $request->class
            ]);

            if ($user && $student) return redirect()->route('administrator.student')->with('message', 'Berhasil perbarui data');
            else return redirect()->route('administrator.student')->with('message', 'Gagal perbarui data');
        }
    }

    function processDeleteStudent($id)
    {
        $deleted = User::where('id', $id)->delete();
        if ($deleted) return response()->json([
            'message' => 'Berhasil hapus data'
        ], 200);
        else return response()->json([
            'message' => 'Gagal hapus data'
        ], 400);
    }
}
