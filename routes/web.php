<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AutoresController;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\EmprestimosController;

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

/*      --ROUTES USUÁRIOS-- */

Route::get('/', [UsuariosController::class, 'index']);
Route::get('/usuarios', [UsuariosController::class, 'listar']);
Route::get('/usuarios/cadastro', [UsuariosController::class, 'cadastro']);
Route::get('/usuarios/cadastro/{id}', [UsuariosController::class, 'cadastro']);
Route::post('/usuarios/cadastrar', [UsuariosController::class, 'cadastrar']);
Route::get('/usuarios/remover/{id}', [UsuariosController::class, 'remover']);

/*      --ROUTES AUTORES-- */

Route::get('/autores', [AutoresController::class, 'listar']);
Route::get('/autores/cadastro', [AutoresController::class, 'cadastro']);
Route::get('/autores/cadastro/{id}', [AutoresController::class, 'cadastro']);
Route::post('/autores/cadastrar', [AutoresController::class, 'cadastrar']);
Route::get('/autores/remover/{id}', [AutoresController::class, 'remover']);

/*      --ROUTES LIVROS-- */

Route::get('/livros', [LivrosController::class, 'listar']);
Route::get('/livros/cadastro', [LivrosController::class, 'cadastro']);
Route::get('/livros/cadastro/{id}', [LivrosController::class, 'cadastro']);
Route::post('/livros/cadastrar', [LivrosController::class, 'cadastrar']);
Route::get('/livros/remover/{id}', [LivrosController::class, 'remover']);

/*      --ROUTES EMPRESTIMOS-- */

Route::get('/emprestimos', [EmprestimosController::class, 'listar']);
Route::get('/emprestimos/cadastro', [EmprestimosController::class, 'cadastro']);
Route::get('/emprestimos/cadastro/{id}', [EmprestimosController::class, 'cadastro']);
Route::post('/emprestimos/cadastrar', [EmprestimosController::class, 'cadastrar']);
Route::get('/emprestimos/remover/{id}', [EmprestimosController::class, 'remover']);
