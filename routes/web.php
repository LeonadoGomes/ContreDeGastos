<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ListagemController;
use  App\Http\Controllers\CadastroController;

Route::get('/', [ListagemController::class, 'index']);
Route::get('/cadastro/cadastro', [CadastroController::class, 'indexcadastro']);
Route::post('/cadastro', [CadastroController::class, 'cadastro']);
