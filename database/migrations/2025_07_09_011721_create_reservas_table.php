<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paquete_id');
            $table->string('nombre_completo');
            $table->string('email');
            $table->string('telefono');
            $table->integer('cantidad_personas');
            $table->text('mensaje')->nullable();
            $table->timestamps();

            $table->foreign('paquete_id')->references('id')->on('paquetes_turisticos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
