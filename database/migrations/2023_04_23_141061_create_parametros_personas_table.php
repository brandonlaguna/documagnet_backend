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
        Schema::create('parametros_persona', function (Blueprint $table) {
            $table->increments('id_parametro_persona');
            $table->integer('fk_tipo_parametro_persona');
            $table->string('nombre_parametro_persona');
            $table->string('descripcion_parametro_persona');
            $table->integer('estado_parametro_persona');
            $table->timestamps();
            $table->foreign('fk_tipo_parametro_persona')->references('id_tipo_parametro_persona')->on('tipos_parametros_persona');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parametros_persona');
    }
};
