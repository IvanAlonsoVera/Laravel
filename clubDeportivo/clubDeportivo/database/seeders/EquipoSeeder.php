<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("equipos")->insert([
            'nombre' => 'Rebotona Team',
            'entrenador' => 'Alexander',
            'categoria' => 'bota'
        ]);
        DB::table("equipos")->insert([
            'nombre' => 'Padrastro Team',
            'entrenador' => 'Isaias',
            'categoria' => 'limpieza'
        ]);
    }
}
