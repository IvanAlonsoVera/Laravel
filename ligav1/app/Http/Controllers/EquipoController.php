<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipo;

class EquipoController extends Controller
{
    public function listado(){

    	$equipos = equipo::All();

    	return view('listado',['listaEquipos'=> $equipos]);
    }
}
