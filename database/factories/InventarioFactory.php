<?php

namespace Database\Factories;
// database/factories/InventarioFactory.php
use App\Models\Inventario;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventarioFactory extends Factory
{
    protected $model = Inventario::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'cantidad' => $this->faker->numberBetween(1, 100),
        ];
    }
}
