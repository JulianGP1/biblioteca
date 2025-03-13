<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('events', function (Blueprint $table) {
        $table->id();
        $table->string('nombreEv');
        $table->text('descripcion');
        $table->dateTime('fecha-inicio');
        $table->dateTime('fecha-final');
        $table->string('lugar');
        $table->enum('status', ['active', 'inactive'])->default('active');
        $table->integer('max_participants')->nullable();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Relación con la tabla users
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
