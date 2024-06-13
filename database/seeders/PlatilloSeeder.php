<?php

namespace Database\Seeders;
// database/seeders/PlatilloSeeder.php
use App\Models\Platillo;
use Illuminate\Database\Seeder;

class PlatilloSeeder extends Seeder
{
    public function run()
    {
        Platillo::factory()->count(10)->create();
    }
}
