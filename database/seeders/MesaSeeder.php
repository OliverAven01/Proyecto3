<?php

namespace Database\Seeders;
// database/seeders/MesaSeeder.php
use App\Models\Mesa;
use Illuminate\Database\Seeder;

class MesaSeeder extends Seeder
{
    public function run()
    {
        Mesa::factory()->count(10)->create();
    }
}
