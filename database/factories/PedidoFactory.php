<?php

namespace Database\Factories;

use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    protected $model = Pedido::class;

    public function definition()
    {
        return [
            'fecha' => $this->faker->date,
            'estado' => $this->faker->randomElement(['pendiente', 'completado']),
        ];
    }
}
