<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            'EN COURS',
            'EN ETAT',
            'EN REPARATION',
            'INDISPONIBLE',
            'DISPONIBLE',
            'AUTRE'
        ];

        foreach ($statuses as $status){
            DB::table('statuses')->insert([
                'name' => $status,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
