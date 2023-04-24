<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tipos_parametros_persona', function (Blueprint $table) {
            $table->increments('id_tipo_parametro_persona');
            $table->string('nombre_tipo_parametro_persona');
            $table->string('descripcion_tipo_parametro_persona');
            $table->integer('estado_tipo_parametro_persona');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_parametros_persona');
    }
};
