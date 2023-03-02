<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('category')->group(function(){
    Route::get('/marbel-edu-games', [CategoryController::class, 'eduGames'])->name('eduGames');
    Route::get('/marbel-and-friends-kids-games', [CategoryController::class, 'kidsGames'])->name('kidsGames');
    Route::get('/riri-story-book', [CategoryController::class, 'book'])->name('book');
    Route::get('/kolak-kids-songs', [CategoryController::class, 'song'])->name('song');
});

Route::get('/news/{id?}', [NewsController::class, 'news'])->name('news');

Route::prefix('program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir'])->name('karir');
    Route::get('/magang', [ProgramController::class, 'magang'])->name('magang');
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjungan'])->name('kunjungan');
});

Route::get('/about-us', [AboutController::class, 'about'])->name('about');

Route::resource('contact-us', ContactController::class);