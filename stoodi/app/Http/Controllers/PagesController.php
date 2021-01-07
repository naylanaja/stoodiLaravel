<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ClassroomsController;
use App\Http\Controllers\TeacherController;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function aboutus()
    {
        return view('aboutus');
    }
    
    public function testimoni()
    {
        return view('testimoni');
    }

    public function berlangganan()
    {
        return view('berlangganan');
    }

    public function langganan_auth()
    {
        return view('auth.langganan');
    }

    public function payment()
    {
        return view('payment');
    }

    public function addtodo(Request $request)
    {
        DB::insert('insert into todolist (user_id, todo)
        values (?, ?)', [Auth::user()->id, $request->todo]);
        
        if (Auth::user()->role_id == 3) {
            return redirect('/classroom');
        }elseif (Auth::user()->role_id == 2) {
            return redirect('/tchclass');
        }
    }

    public function tddone($id)
    {
        DB::table('todolist')->where('id', $id)->delete();

        if (Auth::user()->role_id == 3) {
            return redirect('/classroom');
        }elseif (Auth::user()->role_id == 2) {
            return redirect('/tchclass');
        }
    }
}
