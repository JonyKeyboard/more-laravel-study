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
use Illuminate\Support\Facades\Storage;

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

Route::get('/files', function(){
    $files =  Storage::files();
    $allFiles =  Storage::allFiles();

    //Storage::makeDirectory('public/students');

    $directories =  Storage::directories('');
    $allDirectories =  Storage::allDirectories('');

    //Storage::makeDirectory('public/course');
    //Storage::deleteDirectory('public/course');

    // Storage::disk('public')->put('teste.txt', 'Curso de Laravel Muito Topper');
    // Storage::put('laravael-training.txt', 'Curso de Laravel Muito Topper');

    //echo Storage::get('laravael-training.txt');

    //return Storage::download('laravael-training.txt');

    if(Storage::exists('laravael-training.txt')){
        echo 'o arquivo existe';
    } else {
        echo 'o arquivo nao existe';
    }

    // echo Storage::size('laravael-training.txt');
    // echo Storage::lastModified('laravael-training.txt');

    //Storage::prepend('laravael-training.txt', 'Laravel Training');
    //Storage::append('laravael-training.txt', 'Laravel Training3');

    //Storage::copy('laravael-training.txt', 'public/laravael-training.txt');
    //Storage::move('laravael-training.txt', 'public/laravael-training.txt');
    //Storage::delete('public/laravael-training.txt');

    echo '<pre>';
    //var_dump($files, $allFiles, $directories, $allDirectories);
    echo '</pre>';
});

Route::resource('/imoveis', 'PropertyController');

