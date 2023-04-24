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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('fk_tipo_usuario');
            $table->integer('fk_persona');
            $table->integer('fk_estado_usuario');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('active')->default(true);
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('fk_tipo_usuario')->references('id_tipo_usuario')->on('tipos_usuarios');
            $table->foreign('fk_persona')->references('id_persona')->on('personas');
            $table->foreign('fk_estado_usuario')->references('id_estado')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
