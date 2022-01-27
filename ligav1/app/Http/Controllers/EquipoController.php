<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipo;

class EquipoController extends Controller
{
    public function clasificacion(){

    	$equipos = equipo::All()->sortByDesc('puntos');//sele * from equipos order by puntos

    	return view('clasificacion',['listaEquipos'=> $equipos]);
    }

    public function crear(){
        return view('formCrear');
    }

    public function guardar(Request $datosForm){

        //validar datos

        //crear equipo nuevo
        $equipo = new Equipo();

        $equipo->nombre = $datosForm->nombre;
        $equipo->puntos = $datosForm->puntos;
        $equipo->gf = $datosForm->golesFavor;
        $equipo->gc = $datosForm->golesContra;

        //guardar en la base de datos
        $equipo->save();

        //Devolver la vista clasificacion
        //equipos = Equipo::All()->sortByDesc('puntos');

        //return view('clasificacion',['listaEquipos' => $equipos]);

        return redirect()->route('clasificacion');

    }
}
