<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_usuarios')->insert([
            'nombre_tipo_usuario' => 'Gerencia',
            'descripcion_tipo_usuario' => 'Gerencia',
            'estado_tipo_usuario' => 1,
        ]);
        DB::table('tipos_usuarios')->insert([
            'nombre_tipo_usuario' => 'Coordinacion',
            'descripcion_tipo_usuario' => 'Coordinacion',
            'estado_tipo_usuario' => 1,
        ]);
    }
}
