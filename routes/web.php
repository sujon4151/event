<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\NewsController;

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
    return view('auth.login');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('student', StudentController::class);
Route::resource('event', EventController::class);
Route::resource('news', NewsController::class);
