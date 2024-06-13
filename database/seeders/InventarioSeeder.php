<?php

namespace Database\Seeders;
// database/seeders/InventarioSeeder.php
use App\Models\Inventario;
use Illuminate\Database\Seeder;

class InventarioSeeder extends Seeder
{
    public function run()
    {
        Inventario::factory()->count(10)->create();
    }
}
