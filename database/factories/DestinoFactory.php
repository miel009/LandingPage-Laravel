<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destino>
 */
class DestinoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nombre' => $this->faker->city(),
        'descripcion' => $this->faker->paragraph(),
        'pais' => $this->faker->country(),
        'ciudad' => $this->faker->city(),
        'precio' => $this->faker->randomFloat(2, 100, 5000),
        'imagen' => $this->faker->imageUrl(640, 480, 'travel', true),
        'activo' => $this->faker->boolean(90),
        ];
    }
}
