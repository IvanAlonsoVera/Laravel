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
        $edad = array(10,11,12,13,14);

        for ($i=1; $i <= 10 ; $i++) { 
            for ($j=1; $j <= 12; $j++) { 
                DB::table('jugadors')->insert([
                    'nombre'=>'Jugador-'.$i."-".$j,
                    'edad'=>$edad[rand(0,4)],
                    'equipo_id'=>$i
                ]);
            }
        }
    }
}
