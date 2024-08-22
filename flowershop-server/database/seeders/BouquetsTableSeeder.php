<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;use Illuminate\Support\Facades\DB;

class BouquetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('bouquets')->insert([
            ['code' => 'GRN', 'name' => 'Fresh greens', 'price' => 14.00],
            ['code' => 'PNK', 'name' => 'Pink flowers', 'price' => 16.50],
            ['code' => 'YLW', 'name' => 'Yellow daisies', 'price' => 12.00],
            ['code' => 'RED', 'name' => 'Red flowers', 'price' => 17.50],
        ]);
    }
}
