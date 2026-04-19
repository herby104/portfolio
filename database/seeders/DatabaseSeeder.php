<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Appeler le seeder pour les projets
        $this->call(ProjectSeeder::class);

        // Ici tu peux ajouter d'autres seeders si nécessaire
        // $this->call(UserSeeder::class);
    }
}