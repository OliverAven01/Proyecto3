<?php

namespace Database\Factories;

use App\Models\Mesa;
use Illuminate\Database\Eloquent\Factories\Factory;

class MesaFactory extends Factory
{
    protected $model = Mesa::class;

    public function definition()
    {
        return [
            'numero' => $this->faker->numberBetween(1, 20),
            'estado' => $this->faker->randomElement(['libre', 'ocupada']),
        ];
    }
}
