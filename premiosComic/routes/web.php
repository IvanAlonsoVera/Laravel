<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PremioController;

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

Route::get('/dashboard', [PremioController::class,'listado'])->middleware(['auth'])->name('dashboard');

Route::get('/crearPremio', [PremioController::class,'formCrearPremio'])->middleware(['auth'])->name('crearPremio');

Route::post('/crearPremio', [PremioController::class,'crearPremio'])->middleware(['auth']);

Route::get('/misPremios', [PremioController::class,'miListado'])->middleware(['auth'])->name('misPremios');

require __DIR__.'/auth.php';
