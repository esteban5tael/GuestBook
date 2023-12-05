<?php

namespace Database\Seeders;

use App\Models\Guest;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $count = 50;
        
        $timestamps = array_map(function ($index) {
            return now()->subMinutes(rand(1, 10080 * $index)); // Se generan fechas aleatorias dentro de intervalos más grandes para cada registro
        }, range(1, $count));

        // Crear registros utilizando array_map y el método create()
        array_map(function ($index) use ($timestamps) {
            Guest::create([
                'name' => 'Nombre ' . $index,
                'lastname' => 'Apellido ' . $index,
                'subject' => 'Asunto ' . $index,
                'created_at' => $timestamps[$index - 1], // Index - 1 para ajustar el índice del array a partir de 0
                'updated_at' => now(),
            ]);
        }, range(1, $count));
    }
}
