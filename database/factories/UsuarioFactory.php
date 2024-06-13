<?php

namespace Database\Factories;
// database/factories/UsuarioFactory.php
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'rol' => $this->faker->randomElement(['admin', 'user']),
        ];
    }
}

