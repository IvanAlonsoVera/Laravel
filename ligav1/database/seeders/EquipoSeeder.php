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
            'nombre' => 'Seul',
            'puntos' => '0',
            'gf' => '0',
            'gc' => '0'
        ]);
        DB::table("equipos")->insert([
            'nombre' => 'Konse',
            'puntos' => '0',
            'gf' => '0',
            'gc' => '0'
        ]);
        DB::table("equipos")->insert([
            'nombre' => 'BTS',
            'puntos' => '0',
            'gf' => '0',
            'gc' => '0'
        ]);
    }
}
