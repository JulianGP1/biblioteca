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
        Schema::create('actividad_materiales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actividad_id')->constrained('actividades'); // Asegura que existe 'actividades'
            $table->foreignId('material_id')->constrained('materiales'); // Corrige el nombre a 'materiales'
            $table->integer('cantidad')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividad_materiales');
    }
};
