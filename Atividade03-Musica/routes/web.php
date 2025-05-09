<?php


use App\Http\Controllers\MusicaController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view('index');

});

Route::get('/musicas', [MusicaController::class, 'exibirmusicas']);

Route::get('/musicas/criar', [MusicaController::class, 'criarMusica']);

Route::post('/musicas/armazenar', [MusicaController::class, 'armazenarMusica']);

Route::post('/musicas/editar', [MusicaController::class, 'editarMusica']);

Route::post('/musicas/atualizar', [MusicaController::class, 'atualizarMusica']);

Route::post('/musicas/deletar', [MusicaController::class, 'deletarMusica']);
