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
        Schema::create('proceso_documento', function (Blueprint $table) {
            $table->increments('id_proceso_documento');
            $table->integer('fk_usuario_proceso_documento');
            $table->integer('fk_tipo_documento');
            $table->integer('fk_proceso_documento');
            $table->integer('fk_estado_proceso_documento');
            $table->integer('estado_proceso_documento');
            $table->timestamps();
            $table->foreign('fk_usuario_proceso_documento')->references('id')->on('users');
            $table->foreign('fk_tipo_documento')->references('id_tipo_documento')->on('tipo_documento');
            $table->foreign('fk_proceso_documento')->references('id_proceso_documento')->on('proceso_documento');
            $table->foreign('fk_estado_proceso_documento')->references('id_estado')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proceso_documento');
    }
};
