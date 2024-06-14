<?php

namespace Database\Seeders;

use App\Models\Platillo;
use Illuminate\Database\Seeder;

class PlatilloSeeder extends Seeder
{
    public function run()
    {
        Platillo::factory()->count(10)->create();
    }
}
