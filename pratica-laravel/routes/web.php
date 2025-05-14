<?php
use App\Http\Controllers\LivroController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('index');

});


Route::get('/livros', [LivroController::class, 'exibirLivros'])->middleware('auth');

Route::get('/livros/criar', [LivroController::class, 'criarLivro'])->middleware('auth');

Route::post('/livros/armazenar', [LivroController::class, 'armazenarLivro'])->middleware('auth');

Route::post('/livros/editar', [LivroController::class, 'editarLivro'])->middleware('auth');

Route::post('/livros/atualizar', [LivroController::class, 'atualizarLivro'])->middleware('auth');

Route::post('/livros/deletar', [LivroController::class, 'deletarLivro'])->middleware('auth');



Route::get('/login', [LoginController::class, 'digitarLogin'])->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class, 'logout']);



