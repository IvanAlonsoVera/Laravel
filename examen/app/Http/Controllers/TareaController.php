<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tarea;

class TareaController extends Controller
{
    public function listado()
    {
        $tareas = Tarea::All(); 

        return view('dashboard',['listaTareas' => $tareas]);
    }
    public function formCrear()
    {    
        return view('formulario');
    }
    public function guardar(Request $datos)
    {

        $tarea = new tarea();

        $tarea->nombre=$datos->nombre;
        $tarea->descripcion=$datos->desc;
        $tarea->responsable=$datos->responsable;

        $tarea->save();

        return redirect()->route('dashboard');
    }
    public function borrar($id)
    {
        
        $tarea = tarea::find($id);
        
        $tarea->delete();

        return redirect()->route('dashboard');
    }
    public function modificarId($id)
    {
        $t = tarea::find($id);

        return view ('modificar',['tarea' => $t]);
    }
    public function modificarEnBD(Request $datos, $id)
    {
            $t = tarea::find($id);

            $t->nombre = $datos->nombre;
            $t->descripcion = $datos->desc;
            $t->responsable = $datos->responsable;

            $t->save();

            return redirect()->route('dashboard');
        
    }
}
