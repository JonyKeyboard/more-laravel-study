<?php

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

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/log', function () {
    Log::info('teste2');
});

Route::get('/session', function () {

    Session::put('name', 'jony');

    Session::put('course', 'laradev');

    // echo Session::get('student', function(){
    //     Session::put('student', 'Stanley Jony');
    //     return Session::get('student');
    // });

    //Session::push('time', 'Stanley'); // vai acrescentando no array (tipo carrinho de compras)

    //$student = Session::pull('student'); //retorna o dado da sessao e deleta

    // Session::forget('name'); //só deleta o dado da sessão

    // Session::flush();//deleta toda a sessão

    // if(Session::has('course')){
    //     echo "O curso selecionado foi: " . Session::get('course');
    // }
    // echo '<br>';
    // if(Session::exists('student')){
    //     echo "Esse índice existe";
    // }else{
    //     echo "Esse índice não existe";
    // }

    //Session::flash('message', 'O artigo foi publicado com sucesso!'); // vai deixar a seção apos atualizar

    echo '<pre>';
    var_dump(Session::all());
    echo '</pre>';
});

