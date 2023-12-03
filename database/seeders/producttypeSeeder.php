<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class producttypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_type')->insert
        ([
            ['product_type_name' => 'Nendoroid'],
            ['product_type_name' => 'figma'],
            ['product_type_name' => 'Scale Figures'],
            ['product_type_name' => 'Model'],
            ['product_type_name' => 'Other Figure'],
        
        ]);
    }
}
