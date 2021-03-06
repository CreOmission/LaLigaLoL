<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('equipos')->insert([
        	'nombre' => 'G2',
        	'puntos' => '0',
        	'victorias' => '0',
        	'derrotas' => '0'
        ]);
        DB::table('equipos')->insert([
        	'nombre' => 'Fnatic',
        	'puntos' => '0',
        	'victorias' => '0',
        	'derrotas' => '0'
        ]);
        DB::table('equipos')->insert([
        	'nombre' => 'MAD Lions',
        	'puntos' => '0',
        	'victorias' => '0',
        	'derrotas' => '0'
        ]);
    }
}
