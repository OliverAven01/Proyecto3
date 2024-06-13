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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
