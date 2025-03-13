<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasificacionTable extends Migration
{
    /**
     * Ejecutar las migraciones.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clasificacion', function (Blueprint $table) {
            $table->id(); // Crea una columna `id` autoincremental
            $table->string('nombre'); // Crea una columna `nombre`
            $table->text('descripcion'); // Crea una columna `descripcion`
            $table->boolean('estado'); // Crea una columna `estado` (booleano)
            $table->integer('registradopor'); // Crea una columna `registradopor` (de tipo entero)
            $table->timestamps(); // Crea las columnas `created_at` y `updated_at`
        });
    }

    /**
     * Deshacer la migración.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clasificacion'); // Elimina la tabla `clasificacion` si existe
    }
}
