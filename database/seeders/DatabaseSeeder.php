<?php

namespace Database\Seeders;

/*use App\Models\User;*/
use App\Models\Clasificacion;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /* User::factory(10)->create();*/
        Clasificacion::factory()->create([
            'nombre' => 'Test Clasificacion',  // Usamos el campo 'nombre' en lugar de 'name'
            'descripcion' => 'Una descripción para la clasificacion',
            'estado' => 1,
            'registradopor'=>\App\Models\User::factory() // Este es el ID de quien registra, puedes ajustarlo según tus necesidades
        ]);
    }
}
