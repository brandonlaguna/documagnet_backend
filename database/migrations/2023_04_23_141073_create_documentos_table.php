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
        Schema::create('documentos', function (Blueprint $table) {
            $table->increments('id_documento');
            $table->integer('fk_estado_documento');
            $table->integer('fk_proceso_documento');
            $table->string('nombre_documento');
            $table->string('descripcion_documento');
            $table->string('template_documento');
            $table->timestamps();
            $table->foreign('fk_estado_documento')->references('id_estado')->on('estados');
            $table->foreign('fk_proceso_documento')->references('id_proceso_documento')->on('proceso_documento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
