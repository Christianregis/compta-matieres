<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            'code' => 'FS2026-' . Str::random(5),
            'name' => 'DEFAULT',
            'description' => 'DEFAULT DESCRIPTION',
            'location' => fake()->country(),
            'quantity' => 10,
            'alert_threshold' => 2,
            'category_id' => 1,
            'status_id' => 1,
            'user_id' => 1
        ]);

        DB::table('stock_movements')->insert([
            'quantity' => 2,
            'movement_date' => Carbon::now(),
            'item_id' => 1,
            'movement_type_id' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('items')->update([
            'id' => 1,
            'quantity' => 8,
        ]);
    }
}
