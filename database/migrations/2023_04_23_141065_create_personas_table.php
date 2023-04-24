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
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id_persona');
            $table->integer('fk_tipo_persona');
            $table->integer('fk_tipo_documento');
            $table->integer('fk_estado_persona');
            $table->integer('sexo_persona');
            $table->string('documento_persona');
            $table->string('nombre_persona');
            $table->string('apellido_persona');
            $table->string('correo_persona');
            $table->timestamps();
            $table->foreign('fk_tipo_persona')->references('id_tipo_persona')->on('tipos_personas');
            $table->foreign('fk_tipo_documento')->references('id_parametro_persona')->on('parametros_persona');
            $table->foreign('fk_estado_persona')->references('id_estado')->on('estados');
            $table->foreign('sexo_persona')->references('id_parametro_persona')->on('parametros_persona');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
