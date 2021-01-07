<?php

use App\Http\Controllers\QuizesController;
use App\Http\Controllers\ClassroomsController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\AssessmentsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnnounceController;
use App\Models\Assessment;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//page
Route::get('/', function () {
    return view('index');
});
Route::get('/aboutus', [PagesController::class, 'aboutus'])->name('aboutus');
Route::get('/testimoni',[PagesController::class, 'testimoni'])->name('testimoni');
Route::get('/berlangganan',[PagesController::class, 'berlangganan'])->name('berlangganan');
Route::get('/langganan',[PagesController::class, 'langganan_auth']);
Route::get('/payment',[PagesController::class, 'payment']);
Route::get('/announcement',[AnnounceController::class, 'index']);

//todolist
Route::post('/addtodo',[PagesController::class, 'addtodo']);
Route::get('/tddone/{id}', [PagesController::class, 'tddone']);

//classroom
Route::get('/student/classroom', [ClassroomsController::class, 'index']);
Route::get('/course/{id}', [ClassroomsController::class, 'show']);

//profile
Route::get('/profile', 'App\Http\Controllers\ProfileController@index');
Route::get('/student/editprofile/{id}', 'App\Http\Controllers\ProfileController@show');
Route::post ('/student/editprofile/update', 'App\Http\Controllers\ProfileController@update');


//quiz
Route::get('/quiz/{id}', [QuizesController::class, 'show']);
Route::post('/quizattemp', [QuizesController::class, 'store']);

//auth
Auth::routes();
Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::group(['as'=>'admin.', 'middleware'=>['auth','admin']], function(){
    Route::get('/admcourse', [AdminController::class, 'index'])->name('admcourse'); 
    Route::get('/admuser', [AdminController::class, 'user']);
    Route::get('/nonactive/{id}', [AdminController::class, 'nonactive']);
    Route::get('/active/{id}', [AdminController::class, 'active']);
    Route::get('/admregister', [AdminController::class, 'register']);
    Route::post('/regstudent', [AdminController::class, 'regstudent']);
    Route::post('/regteacher', [AdminController::class, 'regteacher']);
    Route::get('/admaddcourse', [AdminController::class, 'lastcourse']);
    Route::post('/admaddcourse', [CoursesController::class, 'store']);
    Route::get('/delcourse/{id}', [CoursesController::class, 'destroy']);
    Route::get('/admaddannounce', [AnnounceController::class, 'form']);
    Route::post('/admaddannounce', [AnnounceController::class, 'store']);
    });
Route::group(['as'=>'teacher.', 'middleware'=>['auth','teacher']], function(){
    Route::get('/tchclass', [TeacherController::class, 'index'])->name('teacherDash');
    Route::get('/tchcourse/{id}', [TeacherController::class, 'course']);
    Route::get('/add/lesson/{id}', [TeacherController::class, 'addlesson']);
    Route::post('/addlesson', [TeacherController::class, 'storelesson']);
    Route::get('/hide/{class}/{id}', [TeacherController::class, 'hide']);
    Route::get('/show/{class}/{id}', [TeacherController::class, 'show']);
    Route::get('/edit/lesson/{id}', [TeacherController::class, 'editlesson']);
    Route::post('/editlesson', [TeacherController::class, 'storeeditlesson']);
    Route::get('/add/quiz/{class}/{id}', [TeacherController::class, 'addquiz']);
    Route::post('/addquiz', [TeacherController::class, 'storequiz']);
    Route::post('/addquestions', [TeacherController::class, 'storequestion']);
    Route::get('/quizrev/{id}', [TeacherController::class, 'quizrev']);
    Route::get('/edit/quiz/{id}', [TeacherController::class, 'editquiz']);
    Route::post('/storeeditquiz', [TeacherController::class, 'storeeditquiz']);
    Route::get('/delquiz/{class}/{id}', [TeacherController::class, 'deletequiz']);
    Route::get('/grade/quiz/{class}/{quizid}', [TeacherController::class, 'quizgrade']);
    Route::get('/tchannounce', [TeacherController::class, 'showannounce']);
    Route::get('/add/asmt/{class}/{id}', [TeacherController::class, 'addasmt']);
    Route::post('/addasmt', [TeacherController::class, 'storeasmt']);
    Route::get('/edit/asmt/{id}', [TeacherController::class, 'editasmt']);
    Route::post('/storeeditasmt', [TeacherController::class, 'storeeditasmt']);
    Route::get('/delasmt/{class}/{id}', [TeacherController::class, 'deleteassessment']);
    });
Route::group(['as'=>'student.', 'middleware'=>['auth','student']], function(){
    Route::get('/classroom', [ClassroomsController::class, 'index']);
    Route::get('/review/{id}', [QuizesController::class, 'review']);
    Route::post('/assessmentcomp', [AssessmentsController::class, 'store']);
    });