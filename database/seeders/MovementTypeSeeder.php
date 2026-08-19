<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovementTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movementTypes = [
            'Entrée',
            'Sortie - utilisation interne',
            'Sortie - réparation',
            'Sortie - réforme',
            'Retour',
            'Transfert interne',
        ];
 
        $now = now();
 
        foreach ($movementTypes as $name) {
            DB::table('movement_types')->insert([
                'name' => $name,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
