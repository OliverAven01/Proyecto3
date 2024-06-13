<?php

namespace Database\Factories;
// database/factories/ClienteFactory.php
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    protected $model = Cliente::class;

    public function definition()
    {
        return [
            'direccion' => $this->faker->address,
        ];
    }
}

