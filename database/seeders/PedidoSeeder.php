<?php

namespace Database\Seeders;
// database/seeders/PedidoSeeder.php
use App\Models\Pedido;
use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    public function run()
    {
        Pedido::factory()->count(10)->create();
    }
}
