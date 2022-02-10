<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jugador;
use App\Models\Equipo;

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
            'equipo_id'=> 'required'
        ]);

        $jugador = new jugador();

        $jugador->nombre = $datos->nombre;
        $jugador->edad = $datos->edad;
        $jugador->equipo_id = $datos->equipo_id;

        $jugador->save();

        return redirect()->route('listadoJ',['id' => $datos->equipo_id]);

    }
    public function borrar($id){
        $j = jugador::find($id);

        $eq_id = $j->equipo_id;

        $j->delete();

        return redirect()->route('listadoJ',['id' => $eq_id]);
    }
    public function mod($id){
        $j = jugador::find($id);

        $equipos = equipo::All();

        return view ('formularioCrearJugador',['jugador' => $j, 'equipos' => $equipos]);

    }
    public function modBD(Request $datos, $id){
        
        $j = jugador::find($id);

        $j->nombre = $datos->nombre;
        $j->edad = $datos->edad;
        $j->equipo_id = $datos->equipo_id;

        $j->save();

        return redirect()->route('dashboard');
    
        
    }
}
