<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\premio;
use App\Models\User;

class PremioController extends Controller
{
    public function listado(){
        $premios = Premio::All();

        return view('/dashboard',['listaPremios' => $premios]);
    }
}
