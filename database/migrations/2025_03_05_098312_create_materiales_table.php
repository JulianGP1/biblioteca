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
        Schema::create('materiales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clasificaciones_id')->constrained('clasificaciones')->onDelete('cascade');
            $table->foreignId('categorias_id')->constrained('categorias')->onDelete('cascade');
            $table->foreignId('estantes_id')->constrained('estantes')->onDelete('cascade');
            $table->string('titulo');
            $table->string('isbn');
            $table->string('anyo');
            $table->string('estado');
            $table->string('registradoPor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiales');
    }
};
