<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('markets')->insert([
            'market_id' => 1,
            'market' => 'プライム',
        ]);
        DB::table('markets')->insert([
            'market_id' => 2,
            'market' => 'スタンダード',
        ]);
        DB::table('markets')->insert([
            'market_id' => 3,
            'market' => 'グロース',
        ]);
    }
}
