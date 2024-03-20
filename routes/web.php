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
    return view('Inicio');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('disciplinas',
        [\App\Http\Controllers\DisciplinasController::class,'index'])
->name('disciplina');

route::get('editar',
[App\Http\Controllers\DisciplinasController::class,'edit'])
->name('editar');

route::put('atualizar',
[App\Http\Controllers\DisciplinasController::class,'update'])
->name('atualizar');