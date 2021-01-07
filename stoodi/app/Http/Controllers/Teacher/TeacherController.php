<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Classroom;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $courses = Classroom::select('*')
            ->where('teacher', '=', Auth::user()->name)
            ->get();
        $todo = DB::table('todolist')->where('user_id',Auth::user()->id)->get();
        return view ('teacher.tchclass', ['courses' => $courses, 'todo' => $todo]);
    }

    public function course($id)
    {
        $classroom = DB::table('classrooms')->where('id',$id)->get();
        $course = DB::table('courses')->where('id_classroom',$id)->get();
        $assessment = DB::table('assessments')->where('id_course',$id)->get();
        $quizes = DB::table('quizes')->where('id_course',$id)->get();
        $attemp = DB::table('quizattempgrade')->where('id_user',Auth::user()->id)->get();
        $collection = DB::table('assessmentcollection')->where('id_user',Auth::user()->id)->get();
        return view('teacher.tchcourse',['course' => $course, 'classroom' => $classroom, 'assessment' => $assessment, 'quizes' => $quizes,
        'attemp' => $attemp, 'collection' => $collection]);
    }

    public function addlesson($id)
    {
        return view ('teacher.addlesson', ['classid' => $id]);
    }

    public function storelesson(Request $request)
    {
        DB::insert('insert into courses (id_classroom, title, materi, redirecttitle, redirect) values (?, ?, ?, ?, ?)',
        [$request->classid, $request->title, $request->materi, $request->redirect, $request->link]);

        return redirect()->action(
            [TeacherController::class, 'course'], ['id' => $request->classid]
        );
    }

    public function hide($class, $id)
    {
        DB::table('courses')->where('id',$id)->update([
            'visible' => 0,
        ]);

	    return redirect()->action(
            [TeacherController::class, 'course'], ['id' => $class]
        );
    }

    public function show($class, $id)
    {
        DB::table('courses')->where('id',$id)->update([
            'visible' => 1,
        ]);

	    return redirect()->action(
            [TeacherController::class, 'course'], ['id' => $class]
        );
    }

    public function editlesson($id)
    {
        $lesson = DB::table('courses')->where('id',$id)->get();
        return view ('teacher.editlesson', ['lesson' => $lesson]);
    }

    public function storeeditlesson(Request $request)
    {
        DB::table('courses')->where('id',$request->id)->update([
            'title' => $request->title,
            'materi' => $request->materi,
            'redirecttitle' => $request->redirect,
            'redirect' => $request->link,
        ]);
            
        return redirect()->action(
            [TeacherController::class, 'course'], ['id' => $request->classid]
        );
    }

    public function addquiz($class, $id)
    {
        return view ('teacher.addquiz', ['courseid' => $class, 'lessonid' => $id]);
    }

    public function storequiz(Request $request)
    {
        DB::insert('insert into quizes (id_course, id_materi, name) values (?, ?, ?)',
        [$request->courseid, $request->lessonid, $request->title]);

        $quiz = DB::table('quizes')
            ->where('name', '=', $request->title)
            ->where('id_materi', '=', $request->lessonid)
            ->get();

        return view ('teacher.addquestions', ['quiz' => $quiz, 'soal' => $request->soal, 'course' => $request->courseid]);
    }

    public function storequestion(Request $request)
    {
        for ($i=1; $i <= $request->jmlsoal; $i++) { 
            $soal = 'soal-'.$i;
            $a = 'a-'.$i;
            $b = 'b-'.$i;
            $c = 'c-'.$i;
            $d = 'd-'.$i;
            $answer = 'answer-'.$i;
            DB::insert('insert into questions (id_quiz, question, a, b, c, d, answer) values (?, ?, ?, ?, ?, ?, ?)',
            [$request->quizid, $request->$soal, $request->$a, $request->$b, $request->$c, $request->$d, $request->$answer]);
        }
        
        return redirect()->action(
            [TeacherController::class, 'course'], ['id' => $request->course]
        );
    }

    public function quizrev($id)
    {
        $quiz = DB::table('quizes')->where('id',$id)->get();
        $questions = DB::table('questions')->where('id_quiz',$id)->get();
	    return view('teacher.quizrev',['quiz' => $quiz, 'questions' => $questions]);
    }

    public function editquiz($id)
    {
        $quiz = DB::table('quizes')->where('id',$id)->get();
        $questions = DB::table('questions')
            ->where('id_quiz',$id)
            ->get();
	    return view('teacher.editquiz',['quiz' => $quiz, 'questions' => $questions]);
    }

    public function storeeditquiz(Request $request)
    {
        for ($i=1; $i <= $request->n; $i++) { 
            $id = 'quesid-'.$i;
            $soal = 'soal-'.$i;
            $a = 'a-'.$i;
            $b = 'b-'.$i;
            $c = 'c-'.$i;
            $d = 'd-'.$i;
            $answer = 'answer-'.$i;

            DB::table('questions')->where('id',$request->$id)->update([
                'question' => $request->$soal,
                'a' => $request->$a,
                'b' => $request->$b,
                'c' => $request->$c,
                'd' => $request->$d,
                'answer' => $request->$answer,
            ]);
        }
        return redirect()->action(
            [TeacherController::class, 'course'], ['id' => $request->courseid]
        );
    }

    public function deletequiz($course, $id)
    {
        DB::table('quizes')->where('id', $id)->delete();
        
        return redirect()->action(
            [TeacherController::class, 'course'], ['id' => $course]
        );
    }

    public function quizgrade($course, $quizid)
    {
        $grade = DB::table('quizattempgrade')
            ->where('id_quiz', '=', $quizid)
            ->join('users', 'users.id', '=', 'quizattempgrade.id_user')
            ->select('quizattempgrade.*', 'users.name')
            ->get()->toArray();

        return view('teacher.quizgrade',['grade' => $grade, 'course' => $course]);
    }
    public function showannounce()
    {
        $announce=DB::table('announcement')->get();
        return view('teacher.tchannounce',['announce'=> $announce]);
    }

    public function addasmt($class, $id)
    {
        return view ('teacher.addassessment', ['courseid' => $class, 'lessonid' => $id]);
    }

    public function storeasmt(Request $request)
    {
        DB::insert('insert into assessments (id_course, id_materi, name, description, redirect) values (?, ?, ?, ?, ?)',
        [$request->courseid, $request->lessonid, $request->title, $request->desc, $request->link]);

        return redirect()->action(
            [TeacherController::class, 'course'], ['id' => $request->courseid]
        );
    }

    public function editasmt($id)
    {
        $assessment = DB::table('assessments')->where('id',$id)->get();
	    return view('teacher.editasmt',['assessment' => $assessment]);
    }

    public function storeeditasmt(Request $request)
    {
        DB::table('assessments')->where('id',$request->id)->update([
            'name' => $request->title,
            'description' => $request->desc,
            'redirect' => $request->link,
        ]);
            
        return redirect()->action(
            [TeacherController::class, 'course'], ['id' => $request->courseid]
        );
    }

    public function deleteassessment($course, $id)
    {
        DB::table('assessments')->where('id', $id)->delete();
        
        return redirect()->action(
            [TeacherController::class, 'course'], ['id' => $course]
        );
    }
}
