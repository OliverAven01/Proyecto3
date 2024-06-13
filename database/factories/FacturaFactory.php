<?php

namespace Database\Factories;

use App\Models\Factura;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacturaFactory extends Factory
{
    protected $model = Factura::class;

    public function definition()
    {
        return [
            'fecha' => $this->faker->date,
            'total' => $this->faker->randomFloat(2, 10, 500),
        ];
    }
}

