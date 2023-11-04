<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $nomes = ['johne','victor','gui','kety'];
    return view('sistems.welcome', ['nomes'=>$nomes]);
});

Route::get('/sobre', function () {
    $nomes = ['johne','victor','gui','kety', 'hudson'];
    $idade = 23;
    return view('sistemas.sobre', ['nomes'=>$nomes, 'idade'=>$idade]);
});

Route::get('/servicos', function () {
    $nomes = ['johne','victor','gui','kety', 'hudson'];
    $idade = 23;

    return view('sistemas.servicos', ['nomes'=>$nomes, 'idade'=>$idade]);
});