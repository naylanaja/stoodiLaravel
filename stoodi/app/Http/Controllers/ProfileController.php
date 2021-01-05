<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = DB::table('users')->get();
 
    	// mengirim data pegawai ke view index
    	return view('student.profile',['users' => $users]);
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       
        return view('/student/editprofile');
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $users = DB::table('users')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	    return view('/student/editprofile', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $users)
    {
        //
    
        $request->validate([
            'gambar' => 'mimes:jpg,jpeg,png',
        ]);
        $filename = $request->gambar->getClientOriginalName();
        $path = Auth::user()->id . $request->gambar->getClientOriginalName(); 
        $request->gambar->move(public_path('img'), $path);
        User::where('id', Auth::user()->id)
                    ->update([
                        'name'=>$request->name,
                        'email'=>$request->email,
                        'gambar'=>$path,
                        
                    ]);


         return redirect('/profile')->with('status','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
