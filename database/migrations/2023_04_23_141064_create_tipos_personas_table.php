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
        Schema::create('tipos_personas', function (Blueprint $table) {
            $table->increments('id_tipo_persona');
            $table->string('nombre_tipo_persona');
            $table->string('descripcion_tipo_persona');
            $table->integer('estado_tipo_persona');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_personas');
    }
};
