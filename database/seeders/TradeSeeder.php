<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // 追加

class TradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trades')->insert([
            'code' => 7201,
            'buy_sell' => '買',
            'shares' => 100,
            'price' => 500.0,
            'trading_date' => '20230404',
            'credit_ratio' => 1.0,
            'lender_ratio' => 1.0,
            'memo' => 'memo',
            'company_id' => 1,
            'chart_img' => 'image.png',
            'per' => 10.0,
            'pbr' => 1.0,
        ]);
    }
}
