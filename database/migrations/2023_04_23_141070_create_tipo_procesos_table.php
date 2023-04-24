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
        Schema::create('tipo_proceso', function (Blueprint $table) {
            $table->increments('id_tipo_proceso');
            $table->string('nombre_tipo_proceso');
            $table->string('descripcion_tipo_proceso');
            $table->integer('estado_tipo_proceso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_proceso');
    }
};
