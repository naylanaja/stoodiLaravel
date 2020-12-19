<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashController;
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


Route::get('/', function () {
    return view('index');
});



Auth::routes();
Route::get('/admin/adminHome', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Route::get('/aboutus', [App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::group(['as'=>'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware'=>['auth','admin']], function(){
    Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('adminDash'); 
    });
Route::group(['as'=>'teacher.', 'prefix' => 'teacher', 'namespace' => 'Teacher', 'middleware'=>['auth','teacher']], function(){
    Route::get('/teacher', [App\Http\Controllers\Teacher\TeacherController::class, 'index'])->name('teacherDash'); 
    });
Route::group(['as'=>'student.', 'prefix' => 'student', 'namespace' => 'student', 'middleware'=>['auth','student']], function(){
    Route::get('/classroom', [App\Http\Controllers\Student\StudentController::class, 'index'])->name('classroom'); 
    });
