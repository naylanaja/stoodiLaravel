<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [PagesController::class, 'home']);
Route::get('/aboutus', [PagesController::class, 'aboutus']);
Route::get('/index', [PagesController::class, 'home']);
Route::get('/regis', [PagesController::class, 'regis']);
Route::get('/classroom/classroom', [ClassroomController::class, 'index']);

Route::get('/login', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'store']);

//classroom
Route::get('/classroom', [ClassroomController::class, 'index']);