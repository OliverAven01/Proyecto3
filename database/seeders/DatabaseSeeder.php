<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsuarioSeeder::class,
            ClienteSeeder::class,
            InventarioSeeder::class,
            ReporteSeeder::class,
            PlatilloSeeder::class,
            MesaSeeder::class,
            FacturaSeeder::class,
            BoletaSeeder::class,
            PedidoSeeder::class,
        ]);

    }
}
