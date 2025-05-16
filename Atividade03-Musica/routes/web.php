<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MusicaController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view('index');

});

Route::get('/musicas', [MusicaController::class, 'exibirmusicas'])->middleware('auth');

Route::get('/musicas/criar', [MusicaController::class, 'criarMusica'])->middleware('auth');

Route::post('/musicas/armazenar', [MusicaController::class, 'armazenarMusica'])->middleware('auth');

Route::post('/musicas/editar', [MusicaController::class, 'editarMusica'])->middleware('auth');

Route::post('/musicas/atualizar', [MusicaController::class, 'atualizarMusica'])->middleware('auth');

Route::post('/musicas/deletar', [MusicaController::class, 'deletarMusica'])->middleware('auth');



Route::get('/login', [LoginController::class, 'digitarLogin'])->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class, 'logout']);



