<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegController;


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

Route::get('/hello', [PagesController::class, 'index'])->name('hello');
Route::get('/profile',[PagesController::class, 'profile'])->name('profile');


Route::get('/studentList',[StudentController::class, 'studentList'])->name('studentList');
Route::get('/studentEdit/{name}/{id}',[StudentController::class, 'studentEdit'])->name('studentEdit');

Route::get('/studentCreate',[StudentController::class, 'studentCreate'])->name('studentCreate');
Route::post('/studentCreate',[StudentController::class, 'studentCreateSubmitted'])->name('studentCreate');

Route::get('/registration',[RegController::class, 'registration'])->name('registration');
Route::post('/registration',[RegController::class, 'registrationSubmitted'])->name('registration');

Route::get('/login',[RegController::class, 'login'])->name('login');
Route::post('/login',[RegController::class, 'loginSubmitted'])->name('login');

Route::get('/contact',[RegController::class, 'contact'])->name('contact');
Route::post('/contact',[RegController::class, 'contactSubmitted'])->name('contact');
