<?php

use App\Http\Controllers\QuizesController;
use App\Http\Controllers\ClassroomsController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\Student\StudentController;

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
Route::get('/berlangganan',[PagesController::class, 'berlangganan'])->name('berlangganan');

//classroom
Route::get('/classroom', [ClassroomsController::class, 'index']);
Route::get('/course', [ClassroomsController::class, 'show']);

//quiz
Route::get('/quiz', [QuizesController::class, 'show']);

//auth
Auth::routes();
Route::get('/admin/adminHome', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Auth::routes();
Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::group(['as'=>'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware'=>['auth','admin']], function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('adminDash'); 
    });
Route::group(['as'=>'teacher.', 'prefix' => 'teacher', 'namespace' => 'Teacher', 'middleware'=>['auth','teacher']], function(){
    Route::get('/teacher', [TeacherController::class, 'index'])->name('teacherDash'); 
    });
Route::group(['as'=>'student.', 'prefix' => 'student', 'namespace' => 'student', 'middleware'=>['auth','student']], function(){
    Route::get('/classroom', [StudentController::class, 'index'])->name('classroom'); 
    });
