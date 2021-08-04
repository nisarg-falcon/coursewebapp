<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('/')->group(function(){
    Route::view('teacher/login','teacher.login')->name('teacher.login.view');
    Route::view('teacher/register','teacher.register')->name('teacher.register.view');
    Route::view('student/login','student.login')->name('student.login.view');
    Route::view('student/register','student.register')->name('student.register.view');
    Route::view('guardian/login','guardian.login')->name('guardian.login.view');
    Route::view('guardian/register','guardian.register')->name('guardian.register.view');
    Route::view('admin/login','admin.login')->name('admin.login.view');
});
