<?php

namespace Database\Factories;

use App\Models\Reporte;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReporteFactory extends Factory
{
    protected $model = Reporte::class;

    public function definition()
    {
        return [
            'tipo' => $this->faker->word,
            'fecha' => $this->faker->date,
        ];
    }
}

