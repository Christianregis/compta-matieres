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
            'name' => 'ADMIN',
            'surname' => 'adminsitrator',
            'email' => 'admin@gmail.com',
            'password' => 'regis@2007',
            'role' => 'user',
            'mot_de_passe_confirmation' => 'regis@2007',
            'matricule' => Str::random(10),
        ]);

        $this->call([
            CategorySeeder::class,
            MovementTypeSeeder::class,
            StatusSeeder::class,
            ItemSeeder::class,
        ]);
    }
}
