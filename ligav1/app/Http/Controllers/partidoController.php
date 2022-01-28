<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class partidoController extends Controller
{
    public function crear(){
        return view('formPartido',['listaEquipos'=>Equipo::All()]);
    }
    public function modifClassificacion (Request $datosPartido){

        $equipo1 = Equipo::find($datosPartido->equipo1);
        $equipo2 = Equipo::find($datosPartido->equipo2);

        $equipo1->gf = $equipo1->gf + $datosPartido->ge1;
        $equipo1->gc = $equipo1->gc + $datosPartido->ge2;

        $equipo2->gf = $equipo2->gf + $datosPartido->ge2;
        $equipo2->gc = $equipo2->gc + $datosPartido->ge1;

        if($datosPartido->ge1 > $datosPartido->ge2){
            $equipo1->puntos = $equipo1->puntos + 3;

        }elseif ($datosPartido->ge2 > $datosPartido->ge1) {
           $equipo2->puntos = $equipo2->puntos + 3;

        }else{
            $equipo1->puntos = $equipo1->puntos + 1;
            $equipo2->puntos = $equipo2->puntos + 1;
        }

        $equipo1->save();
        $equipo2->save();

        return redirect()->route('clasificacion');

    }
}
