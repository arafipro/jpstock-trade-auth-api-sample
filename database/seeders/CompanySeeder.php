<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            'company_id' => 1,
            'company' => 'SBI証券',
        ]);
        DB::table('companies')->insert([
            'company_id' => 2,
            'company' => '楽天証券',
        ]);
        DB::table('companies')->insert([
            'company_id' => 3,
            'company' => 'マネックス証券',
        ]);
    }
}
