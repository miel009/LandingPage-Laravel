<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PaqueteTuristico;

class PaquetesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaqueteTuristico::create([
            'titulo' => 'Naturaleza en San Martín de los Andes',
            'descripcion' => 'Explorá los lagos y montañas de la Patagonia con excursiones, gastronomía regional y aire puro.',
            'imagen_url' => 'https://imgs.search.brave.com/8ZkjGpkWBokxEEkPPtYDNWbF7Rwp5M81376OR4f_B_I/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90cmFu/cy1hbWVyaWNhcy5j/b20vd3AtY29udGVu/dC91cGxvYWRzLzIw/MjMvMDUvc2FuLW1h/cnRpbi1kZS1sb3Mt/YW5kZXMtYXJnZW50/aW5hLmpwZw',
            'destino' => 'San Martín de los Andes',
            'precio' => 195000,
            'fecha_inicio' => '2025-10-10',
            'fecha_fin' => '2025-10-17',
        ]);

        PaqueteTuristico::create([
            'titulo' => 'Sol y playa en Florianópolis',
            'descripcion' => 'Viajá al sur de Brasil y disfrutá de sus playas paradisíacas, paseos en lancha y caipirinhas al atardecer.',
            'imagen_url' => 'https://imgs.search.brave.com/l2Z-iJZfPvZBglpFfmkTTNL1EXvHyRfJlYvACCmf-fQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzA1LzM0LzMyLzA2/LzM2MF9GXzUzNDMy/MDYyNl81c3pLTFNt/R1czQjdER2NVdGdD/aGd4bWtxQUx5VVp2/cy5qcGc',
            'destino' => 'Florianópolis',
            'precio' => 220000,
            'fecha_inicio' => '2025-11-05',
            'fecha_fin' => '2025-11-12',
        ]);
    }
}
