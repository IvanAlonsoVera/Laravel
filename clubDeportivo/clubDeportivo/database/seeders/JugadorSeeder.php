<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JugadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("jugadors")->insert([
            'nombre' => 'casero',
            'edad' => 20,
            'equipo_id' => 1
        ]);
        DB::table("jugadors")->insert([
            'nombre' => 'hugo',
            'edad' => 23,
            'equipo_id' => 2
        ]);
        DB::table("jugadors")->insert([
            'nombre' => 'razban',
            'edad' => 22,
            'equipo_id' => 1
        ]);
        DB::table("jugadors")->insert([
            'nombre' => 'javi',
            'edad' => 24,
            'equipo_id' => 2
        ]);
    }
}
