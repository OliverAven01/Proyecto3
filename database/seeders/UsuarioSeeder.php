<?php

namespace Database\Seeders;
// database/seeders/UsuarioSeeder.php
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        Usuario::factory()->count(10)->create();
    }
}
