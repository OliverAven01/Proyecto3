<?php

namespace Database\Seeders;
// database/seeders/BoletaSeeder.php
use App\Models\Boleta;
use Illuminate\Database\Seeder;

class BoletaSeeder extends Seeder
{
    public function run()
    {
        Boleta::factory()->count(10)->create();
    }
}
