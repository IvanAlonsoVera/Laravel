<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;

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

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

Route::get('/dashboard',[EquipoController::class, 'listado'])->middleware(['auth'])->name('dashboard');

Route::get('/listadoJugadores/{id}',[JugadorController::class, 'listado'])->middleware(['auth'])->name('listadoJ');

//para los formularios lo habitual es tener dos rutas
Route::get('crearEquipo',[EquipoController::class, 'formCrear'])->middleware(['auth'])->name('crearEquipo');
Route::post('crearEquipo',[EquipoController::class, 'guardar'])->middleware(['auth'])->name('guardar');

Route::get('crearJugador',[JugadorController::class, 'formCrear'])->middleware(['auth'])->name('crearJugador');
Route::post('crearJugador',[JugadorController::class, 'guardar'])->middleware(['auth'])->name('guardar');

//Borrar y modificar
Route::get('borrarEquipo/{id}',[EquipoController::class, 'borrar'])->middleware(['auth'])->name('borrarEquipo');
Route::get('borrarJugador/{id}',[EquipoController::class, 'borrar'])->middleware(['auth'])->name('borrarJugador');

Route::get('modificarEquipo/{id}',[EquipoController::class, 'mod'])->middleware(['auth'])->name('modEquipo');
Route::post('modificarEquipo/{id}',[EquipoController::class, 'modBD'])->middleware(['auth'])->name('modBDEquipo');
Route::get('modificarJugador/{id}',[EquipoController::class, 'mod'])->middleware(['auth'])->name('modJugador');
Route::post('modificarJugador/{id}',[EquipoController::class, 'modBD'])->middleware(['auth'])->name('modBDJugador');


require __DIR__.'/auth.php';
