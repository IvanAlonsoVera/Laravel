<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class operacion extends Controller
{
    //suma
    public function suma($op1,$op2){
        $res = $op1 + $op2;
        return view("resultado",['resul'=>$res,'oper'=>'suma']);
    }
    //resta
    public function resta($op1,$op2){
        $res = $op1 - $op2;
        return view("resultado",['resul'=>$res,'oper'=>'resta']);
    }
    //multiplicacion
    public function multiplicacion($op1,$op2){
        $res = $op1 * $op2;
        return view("resultado",['resul'=>$res,'oper'=>'multiplicacion']);
    }
    //division
    public function division($op1,$op2){
        $res = $op1 / $op2;
        return view("resultado",['resul'=>$res,'oper'=>'division']);
    }

    public function operacion(Request $datosForm){
        $resp=0;
        $op="";
        switch($datosForm->operacion){
            case 'sum':
                $resp = $datosForm->oper1 + $datosForm->oper2;
                $op = "suma"; 
            break;
            case 'res':
                $resp = $datosForm->oper1 - $datosForm->oper2;
                $op = "resta"; 
            break;
            case 'mul':
                $resp = $datosForm->oper1 * $datosForm->oper2;
                $op = "multiplicacion"; 
            break;
            case 'div':
                $resp = $datosForm->oper1 / $datosForm->oper2;
                $op = "division"; 
            break;
        }

        return view("resultado",['resul'=>$resp, 'oper'=>$op]);
    }
}
