<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\RecursoController;

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

Route::get('/dashboard', [TareaController::class,'listado'])->middleware(['auth'])->name('dashboard');

Route::get('/crear', [TareaController::class,'formCrear'])->middleware(['auth'])->name('crear');

Route::post('/crear', [TareaController::class,'guardar'])->middleware(['auth']);

Route::get('/borrar/{id}',[TareaController::class, 'borrar'])->middleware(['auth']);

Route::get('/modificar/{id}',[TareaController::class,'modificarId'])->middleware(['auth'])->name('modificarId');

Route::post('/modificar/{id}',[TareaController::class,'modificarEnBD'])->middleware(['auth'])->name('modificarEnBD');

Route::get('/listaRecursos/{id}', [RecursoController::class,'listar'])->middleware(['auth'])->name('listaRecursos');

Route::get('/crearRecurso', [RecursoController::class,'formCrear'])->middleware(['auth'])->name('crearRecurso');

Route::post('/crearRecurso', [RecursoController::class,'guardar'])->middleware(['auth'])->name('guardarRecurso');

require __DIR__.'/auth.php';
