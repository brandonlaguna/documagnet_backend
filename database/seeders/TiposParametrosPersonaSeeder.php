<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TiposParametrosPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_parametros_persona')->insert([
            'nombre_tipo_parametro_persona' => 'Tipo Documento',
            'descripcion_tipo_parametro_persona' => 'Tipo Documento',
            'estado_tipo_parametro_persona' => 1,
        ]);
        DB::table('tipos_parametros_persona')->insert([
            'nombre_tipo_parametro_persona' => 'Sexo',
            'descripcion_tipo_parametro_persona' => 'Sexo',
            'estado_tipo_parametro_persona' => 1,
        ]);
    }
}
