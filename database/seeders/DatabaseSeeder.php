<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'surname' => 'adminsitrator',
            'email' => 'admin@gestionmaterials.com',
            'password' => bcrypt('password'),
            'mot_de_passe_confirmation' => 'password',
            'matricule' => Str::random(10),
        ]);

        $this->call([
            CategorySeeder::class,
            MovementTypeSeeder::class,
        ]);
    }
}
