<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jugador;

class JugadorController extends Controller
{
    public function listado($id){
        $listaJugadores = jugador::where('equipo_id',$id)->get();

        return view('listaJugadores',['lj' => $listaJugadores]);
    }
    public function formCrear(){
        return view('formularioCrearJugador',['leq' => equipo::All()]);
    }
    public function guardar(Request $datos){

        $resp = $datos->validate([
            'nombre' => 'required|max:100',
            'edad' => 'required|numeric',

        ]);

        $jugador = new jugador();

        $jugador->nombre = $datos->nombre;
        $jugador->edad = $datos->edad;
        $jugador->equipo_id = $datos->equipo_id;

        $jugador->save();

        return redirect()->route('listaJugadores',['id' => $datos->equipo_id]);

    }
}
