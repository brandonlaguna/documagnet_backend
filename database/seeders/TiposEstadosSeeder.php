<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposEstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_estados')->insert([
            'nombre_tipo_estado' => 'Estado Generales',
            'descripcion_tipo_estado' => 'Estado Generakes',
            'estado_tipo_estado' => 1,
        ]);
        DB::table('tipos_estados')->insert([
            'nombre_tipo_estado' => 'Estado usuarios',
            'descripcion_tipo_estado' => 'Estado usuarios',
            'estado_tipo_estado' => 1,
        ]);
    }
}
