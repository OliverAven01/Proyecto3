<?php

namespace Database\Seeders;

use App\Models\Boleta;
use Illuminate\Database\Seeder;

class BoletaSeeder extends Seeder
{
    public function run()
    {
        Boleta::factory()->count(10)->create();
    }
}
