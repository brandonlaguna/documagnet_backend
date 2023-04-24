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
        Schema::create('proceso', function (Blueprint $table) {
            $table->increments('id_proceso');
            $table->integer('fk_tipo_proceso');
            $table->integer('fk_usuario_proceso');
            $table->string('nombre_proceso');
            $table->string('descripcion_proceso');
            $table->integer('estado_tipo_proceso');
            $table->timestamps();
            $table->foreign('fk_tipo_proceso')->references('id_tipo_proceso')->on('tipo_proceso');
            $table->foreign('fk_usuario_proceso')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proceso');
    }
};
