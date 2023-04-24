<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TiposDocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_documento')->insert([
            'nombre_tipo_documento' => 'Documentos de Gestion',
            'descripcion_tipo_documento' => 'Documentos de Gestion',
            'estado_tipo_documento' => 1,
        ]);
    }
}
