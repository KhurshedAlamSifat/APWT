<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personextra;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;

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
    return view('Home');
});
Route::get('home', function () {
    return view('Home');
});

Route::get('/login', [personextra::class,'loginVeiw'])->name('login');
Route::post('/login', [personextra::class,'login'])->name('login');
Route::get('/registration', [StudentController::class,'registrationVeiw'])->name('registration');
Route::post('/registration', [StudentController::class,'registration'])->name('registration');
Route::get('/contact', [StudentController::class,'index'])->name('contact');
Route::resource('persons',PersonController::class);
Route::resource('students',StudentController::class);
Route::post('/contact', [StudentController::class,'contact'])->name('contact');
Route::get('/student/{id}', [StudentController::class,'studentDetails'])->name('studentDetails');
Route::get('/student/edit/{id}', [StudentController::class,'studentEditView'])->name('studentEdit');
Route::get('/student/delete/{id}', [StudentController::class,'studentDelete'])->name('studentDelete');
Route::post('/student/edit', [StudentController::class,'studentEdit'])->name('studentEdit');


Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


//student dash
Route::get('/student/dash', [StudentController::class,'studentDash'])->name('studentDash')->middleware('ValidStudent'); 



