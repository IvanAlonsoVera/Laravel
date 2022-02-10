<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoController extends Controller
{
    public function listado(){
        $listaEquipos = equipo::All();

        return view('dashboard',['le' => $listaEquipos]);
    }
    public function formCrear(){
        return view('formularioCrearEquipo');
    }
    public function guardar(Request $datos){

        $resp = $datos->validate([
            'nombre' => 'required|max:100',
            'entrenador' => 'required|max:100',
            'categoria' => 'required|max:100'

        ]);

        $equipo = new equipo();

        $equipo->nombre = $datos->nombre;
        $equipo->entrenador = $datos->entrenador;
        $equipo->categoria = $datos->categoria;

        $equipo->save();

        return redirect()->route('dashboard',['le' => Equipo::All()]);

    }
    public function borrar($id){
        $e = equipo::find($id);

        foreach($e->jugadores as $jugador){

            $jugador->delete();
            
        }

        $e->delete();

        return view ('dashboard',['le' => Equipo::All()]);
    }
    public function mod($id){
        $e = equipo::find($id);

        return view ('formularioCrearEquipo',['equipo' => $e]);
    }
    public function modBD(Request $datos, $id){
        
        $e = equipo::find($id);

        $e->nombre = $datos->nombre;
        $e->entrenador = $datos->entrenador;
        $e->categoria = $datos->categoria;

        $e->save();

        return redirect()->route('dashboard');
    
        
    }
}