<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recurso;
use App\Models\tarea;

class RecursoController extends Controller
{
    public function listar($id)
    {
        $listaRecursos = recurso::where('tarea_id',$id)->get(); 

        return view('recursos',['listaRecurso' => $listaRecursos]);
    }
    public function formCrear()
    {    
        $listaTareas = tarea::All();
        return view('formRecursos',['listaTareas' => $listaTareas]);
    }
    public function guardar(Request $datos)
    {

        $recurso = new recurso();

        $recurso->nombre=$datos->nombre;
        $recurso->numR=$datos->numRegistro;
        $recurso->desc=$datos->descripcion;
        $recurso->localizacion=$datos->localizacion;
        $recurso->tarea=$datos->tarea_id;

        $recurso->save();

        return redirect()->route('dashboard');
    }
}
