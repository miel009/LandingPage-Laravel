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
        Schema::create('paquetes_turisticos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('imagen_url')->nullable(); 
            $table->string('destino');
            $table->decimal('precio', 10, 2);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('imagen')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('paquetes_turisticos');
    }
};
