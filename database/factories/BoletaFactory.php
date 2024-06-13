<?php

namespace Database\Factories;
// database/factories/BoletaFactory.php
use App\Models\Boleta;
use Illuminate\Database\Eloquent\Factories\Factory;

class BoletaFactory extends Factory
{
    protected $model = Boleta::class;

    public function definition()
    {
        return [
            'fecha' => $this->faker->date,
            'total' => $this->faker->randomFloat(2, 10, 500),
        ];
    }
}
