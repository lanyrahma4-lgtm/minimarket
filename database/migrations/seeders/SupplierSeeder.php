<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('suppliers')->insert([
            [
                'name' => 'PT. Indofood',
                'phone' => '02112345678',
                'address' => 'Jakarta, Indonesia',
            ],
            [
                'name' => 'PT. Unilever Indonesia',
                'phone' => '02187654321',
                'address' => 'Tangerang, Banten',
            ],
            [
                'name' => 'PT. Mayora Indah',
                'phone' => '02198765432',
                'address' => 'Jakarta, Indonesia',
            ],
        ]);
    }
}