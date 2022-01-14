<?php

use Illuminate\Support\Facades\Route;

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


// ejemplo de ruta tipo vista /ruta/ivan -> prueba1
Route::view('/ruta1','entrada');

Route::get('/ruta2',function(){
    return "hola ruta 2";

});

Route::get('/ruta3',function(){
    return view('formulario');

});

//ejemplo de la ruta con una variable
Route::get('/ruta5/{var1}',function($var1){
    return $var1;
});