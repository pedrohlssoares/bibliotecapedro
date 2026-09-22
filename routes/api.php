<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\AuthController;


//Rotas públicas
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/autores', [AutorController::class, 'index']);
Route::get('/autores/{autor}', [AutorController::class, 'show']);

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/{categoria}', [CategoriaController::class, 'show']);

Route::get('/livros', [LivroController::class, 'index']);
Route::get('/livros/{livro}', [LivroController::class, 'show']);


//Rotas Protegidas
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::post('/autores', [AutorController::class, 'store']);
    Route::put('/autores/{autor}', [AutorController::class, 'update']);
    Route::delete('/autores/{autor}', [AutorController::class, 'destroy']);

    Route::post('/categorias', [CategoriaController::class, 'store']);
    Route::put('/categorias/{categoria}', [CategoriaController::class, 'update']);
    Route::delete('/categorias/{categoria}', [CategoriaController::class, 'destroy']);

    Route::post('/livros', [LivroController::class, 'store']);
    Route::put('/livros/{livro}', [LivroController::class, 'update']);
    Route::delete('/livros/{livro}', [LivroController::class, 'destroy']);
});