<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuizesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $true = 0;
        $l = count($request->id_soal);
        for ($i=1; $i <= $l; $i++) { 
            if ($request->ques[$i] == $request->ans[$i]) {
                $true += 1;
            }
            DB::insert('insert into quizattemps (id_user, id_quiz, id_question, answer) values 
            (?, ?, ?, ?)', [$request->userid, $request->quizid, $request->id_soal[$i], $request->ques[$i]]);
        }
        $nilai = number_format($true/$l * 100);
        DB::insert('insert into quizattempgrade (id_user, id_quiz, grade) values 
        (?, ?, ?)', [$request->userid, $request->quizid, $nilai]);

        return redirect()->action(
            [QuizesController::class, 'review'], ['id' => $request->quizid]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function review($id)
    {
        $answer = DB::table('quizattemps')
            ->where('id_quiz', $id)
            ->where('id_user', Auth::user()->id)
            ->get();
        $grade = DB::table('quizattempgrade')
            ->where('id_quiz', $id)
            ->where('id_user', Auth::user()->id)
            ->get();
        $quiz = DB::table('quizes')
            ->where('id', $id)
            ->get();
        $questions = DB::table('questions')
            ->where('id_quiz', $id)
            ->get();
        return view('student.review',['grade' => $grade, 'answer' => $answer, 'quiz' => $quiz, 'questions' => $questions]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quiz = DB::table('quizes')->where('id',$id)->get();
        $questions = DB::table('questions')->where('id_quiz',$id)->get();
	    return view('student.quiz',['quiz' => $quiz, 'questions' => $questions]);
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