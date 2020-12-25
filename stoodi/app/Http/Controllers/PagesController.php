<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
    public function berlangganan()
    {
        return view('berlangganan');
    }
}