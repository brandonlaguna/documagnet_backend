<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TiposProcesosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_proceso')->insert([
            'nombre_tipo_proceso' => 'Gestion',
            'descripcion_tipo_proceso' => 'Gestion',
            'estado_tipo_proceso' => 1,
        ]);
    }
}
