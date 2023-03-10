<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {

    $user = new stdClass();
    $user->name = 'Stanley Jony';
    $user->birth = '1993-08-28';
    //$user->email = '1jony2jony@gmail.com';

    $courses = [
        [
            "id" => 1,
            "name" => "Laravel 5.6",
            "tutor" => "Jorge"
        ],
        [
            "id" => 2,
            "name" => "Php 8",
            "tutor" => "Antônio"
        ],
        [
            "id" => 3,
            "name" => "Vue 3",
            "tutor" => "Pedro"
        ],

    ];

    return view('front.home', [
        'user' => $user,
        'courses' => $courses
    ]);
});

Route::get('/curso', function(){
    return view('front.course');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
