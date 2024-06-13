<?php

namespace Database\Seeders;
// database/seeders/ReporteSeeder.php
use App\Models\Reporte;
use Illuminate\Database\Seeder;

class ReporteSeeder extends Seeder
{
    public function run()
    {
        Reporte::factory()->count(10)->create();
    }
}

