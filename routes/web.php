<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\EscolaController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('users', [UserController::class, 'index'])->name('users.index');


Route::get('alunos/inserir', [AlunoController::class, 'inserir'])->name('alunos.inserir');
Route::post('alunos', [AlunoController::class, 'insert'])->name('alunos.inserir_tabela');
Route::get('alunos/{id}', [AlunoController::class, 'ver'])->name('alunos.ver');
Route::get('alunos/{aluno}/edit', [AlunoController::class, 'edit'])->name('alunos.edit');
Route::put('alunos/{aluno}', [AlunoController::class, 'editar'])->name('alunos.editar');
Route::get('alunos/{aluno}/delete', [AlunoController::class, 'modal'])->name('alunos.modal');
Route::delete('alunos/{aluno}', [AlunoController::class, 'delete'])->name('alunos.delete');
Route::get('alunos', [AlunoController::class, 'index'])->name('alunos');

Route::get('escolas/inserir', [EscolaController::class, 'inserir'])->name('escolas.inserir');
Route::post('escolas', [EscolaController::class, 'insert'])->name('escolas.inserir_tabela');
Route::get('escolas/{id}', [EscolaController::class, 'ver'])->name('escolas.ver');
Route::get('escolas/{escola}/edit', [EscolaController::class, 'edit'])->name('escolas.edit');
Route::put('escolas/{escola}', [EscolaController::class, 'editar'])->name('escolas.editar');
Route::get('escolas/{escola}/delete', [EscolaController::class, 'modal'])->name('escolas.modal');
Route::delete('escolas/{escola}', [EscolaController::class, 'delete'])->name('escolas.delete');
Route::get('escolas', [EscolaController::class, 'index'])->name('escolas');

Route::get('turmas/inserir', [TurmaController::class, 'inserir'])->name('turmas.inserir');
Route::post('turmas', [TurmaController::class, 'insert'])->name('turmas.inserir_tabela');
Route::get('turmas/{id}', [TurmaController::class, 'ver'])->name('turmas.ver');
Route::get('turmas/{turma}/edit', [TurmaController::class, 'edit'])->name('turmas.edit');
Route::put('turmas/{turma}', [TurmaController::class, 'editar'])->name('turmas.editar');
Route::get('turmas/{turma}/delete', [TurmaController::class, 'modal'])->name('turmas.modal');
Route::delete('turmas/{turma}', [TurmaController::class, 'delete'])->name('turmas.delete');
Route::get('turmas', [TurmaController::class, 'index'])->name('turmas');

