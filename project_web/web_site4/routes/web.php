<?php

use App\Http\Controllers\WebController;
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

// Route::get('/', 'WebController@home')->name('home');
Route::get('/', [WebController::class, 'home'])->name('home');
// Route::get('/curso', 'WebController@course')->name('course');
Route::get('/curso', [WebController::class, 'course'])->name('course');
// Route::get('/blog', 'WebController@blog')->name('blog');
Route::get('/blog', [WebController::class, 'blog'])->name('blog');
// Route::get('/blog/{uri}', 'WebController@article')->name('article');
Route::get('/blog/{uri}', [WebController::class, 'article'])->name('article');
// Route::get('/contato', 'WebController@contact')->name('contact');
Route::get('/contato', [WebController::class, 'contact'])->name('contact');
