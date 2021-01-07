<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Classroom;
use App\Models\Course;

class ClassroomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Classroom::select('*')
            ->where('kelas', '=', Auth::user()->kelas)
            ->where('category', '=', Auth::user()->peminatan)
            ->get();
        $todo = DB::table('todolist')->where('user_id',Auth::user()->id)->get();
        return view ('student.classroom', ['courses' => $courses, 'todo' => $todo]);
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
        $classroom = DB::table('classrooms')->where('id',$id)->get();
        $course = DB::table('courses')
            ->where('id_classroom',$id)
            ->where('visible', '=', '1')
            ->get();
        $assessment = DB::table('assessments')->where('id_course',$id)->get();
        $quizes = DB::table('quizes')->where('id_course',$id)->get();
        $attemp = DB::table('quizattempgrade')
            ->where('id_user',Auth::user()->id)
            ->get();
        $collection = DB::table('assessmentcollection')
            ->where('id_user',Auth::user()->id)
            ->get();
        return view('student.course',['course' => $course, 'classroom' => $classroom, 'assessment' => $assessment, 'quizes' => $quizes,
        'attemp' => $attemp, 'collection' => $collection]);
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
