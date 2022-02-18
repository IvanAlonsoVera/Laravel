<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tareas")->insert([
            'nombre' => 'LimpCamLun',
            'descripcion' => 'Limpieza de camiones - lunes',
            'responsable' => 'Juan'
        ]);
        DB::table("tareas")->insert([
            'nombre' => 'CarCombMier',
            'descripcion' => 'Carga de combustible - miercoles',
            'responsable' => 'Ana',
        ]);
        DB::table("tareas")->insert([
            'nombre' => 'ContAlmaLun',
            'descripcion' => 'Control de acceso al almacen',
            'responsable' => 'Jorge',
        ]);
    }
}
