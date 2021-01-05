<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Classroom;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $courses = Classroom::all();
        return view ('admin.admcourse', ['courses' => $courses]);
    }

    public function user()
    {
        $user = DB::table('users')->get();
        return view ('admin.admuserlist', ['user' => $user]);
    }

    public function register()
    {
        $user = DB::table('users')->get();
        return view('admin.admregister', ['user' => $user]);
    }

    public function regstudent(Request $request)
    {
        $pass = Hash::make($request->password);
        DB::insert('insert into users (role_id, name, email, password, kelas, peminatan)
        values (?, ?, ?, ?, ?, ?)', [3, $request->name, $request->email, $pass, $request->kelas, $request->peminatan]);

        return redirect('/admuser');
    }

    public function regteacher(Request $request)
    {
        $pass = Hash::make($request->password);
        DB::insert('insert into users (role_id, name, email, password)
        values (?, ?, ?, ?)', [2, $request->name, $request->email, $pass]);

        return redirect('/admuser');
    }

    public function lastcourse()
    {
        $courses = DB::table('classrooms')->get();
        return view ('admin.admaddcourse', ['courses' => $courses]);
    }

    public function nonactive($id)
    {
        DB::table('users')->where('id',$id)->update([
            'status' => 0,
        ]);

	    return redirect('/admuser');
    }

    public function active($id)
    {
        DB::table('users')->where('id',$id)->update([
            'status' => 1,
        ]);

	    return redirect('/admuser');
    }
}

