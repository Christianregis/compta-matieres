<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Matériel informatique',
            'Matériel scientifique de laboratoire',
            'Matériel de bureau',
            'Mobilier',
            'Matériel électrique',
            'Matériel électronique',
            'Matériel de mesure et de précision',
            'Matériel audiovisuel',
            'Matériel de reprographie',
            'Matériel de sécurité',
            'Consommables de laboratoire',
            'Fournitures de bureau',
            'Matériel informatique réseau',
            'Matériel de climatisation',
            'Matériel sanitaire',
            'Matériel de nettoyage',
            'Véhicules et engins',
            'Outillage technique',
            'Matériel sportif',
            'Documentation et ouvrages',
        ];

        $now = now();

        foreach ($categories as $name) {
            DB::table('categories')->insert([
                'name' => $name,
                'created_at' => $now,
                'updated_at' => $now,
                'user_id' => 1, // Assuming the admin user has an ID of 1
            ]);
        }
    }
}
