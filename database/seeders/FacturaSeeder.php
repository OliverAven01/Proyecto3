<?php

namespace Database\Seeders;

use App\Models\Factura;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    public function run()
    {
        Factura::factory()->count(10)->create();
    }
}
