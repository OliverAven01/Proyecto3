<?php

namespace Database\Factories;
// database/factories/PlatilloFactory.php
use App\Models\Platillo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlatilloFactory extends Factory
{
    protected $model = Platillo::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'precio' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}

