<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\LeaderboardController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\FrontendController;

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

// Route::get('/', function () {
//     return view('auth.login');
// });

Auth::routes();
Route::get('/', [FrontendController::class, 'index'])->name('home.index');
Route::get('/ev', [FrontendController::class, 'events'])->name('home.event');
Route::get('/ev/{id}', [FrontendController::class, 'viewEvent'])->name('home.viewEvent');
Route::get('/players', [FrontendController::class, 'players'])->name('home.players');
Route::get('/player/profile/{id}', [FrontendController::class, 'playerProfile'])->name('home.playerProfile');
Route::get('/ld', [FrontendController::class, 'leaderboard'])->name('home.leaderboard');
Route::get('/blogs', [FrontendController::class, 'blogs'])->name('home.blogs');
Route::get('/blogs/{is}', [FrontendController::class, 'viewBlogs'])->name('home.viewBlog');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('student', StudentController::class);
Route::resource('event', EventController::class);
Route::resource('news', NewsController::class);
Route::get('leaderboard/{type}', [LeaderboardController::class, 'index'])->name('leaderboard.index');
