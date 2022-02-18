<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("recursos")->insert([
            'nombre' => 'camGrande',
            'numRegistro' => '2354',
            'descripcion' => 'Camion para gran carga',
            'localizacion' => 'P3-13',
            'tarea_id' => 2
        ]);
        DB::table("recursos")->insert([
            'nombre' => 'carretilla',
            'numRegistro' => '1201',
            'descripcion' => 'carretilla descarga',
            'localizacion' => 'P1-8',
            'tarea_id' => 1
        ]);
        DB::table("recursos")->insert([
            'nombre' => 'portatil',
            'numRegistro' => '101',
            'descripcion' => 'portatil con software stock y control',
            'localizacion' => 'AL2',
            'tarea_id' => 3
        ]);
    }
}
