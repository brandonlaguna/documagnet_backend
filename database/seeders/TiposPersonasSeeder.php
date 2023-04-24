<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposPersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_personas')->insert([
            'nombre_tipo_persona' => 'Persona Natural',
            'descripcion_tipo_persona' => 'Persona Natural',
            'estado_tipo_persona' => 1,
        ]);
        DB::table('tipos_personas')->insert([
            'nombre_tipo_persona' => 'Persona Juridica',
            'descripcion_tipo_persona' => 'Persona Juridica',
            'estado_tipo_persona' => 1,
        ]);
    }
}
