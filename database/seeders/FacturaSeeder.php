<?php

namespace Database\Seeders;
// database/seeders/FacturaSeeder.php
use App\Models\Factura;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    public function run()
    {
        Factura::factory()->count(10)->create();
    }
}
