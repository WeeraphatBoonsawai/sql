<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brand')->insert
        ([
            ['brand_name' => 'GOODSMILE'],
            ['brand_name' => 'Kadokawa'],
            ['brand_name' => 'Bandai'],
            ['brand_name' => 'Square Enix'],
            ['brand_name' => 'megahouse'],
            ['brand_name' => 'BANDAI SPIRITS'],
            ['brand_name' => 'FREEing'],
            ['brand_name' => 'Max Factory'],
            ['brand_name' => 'WAVE'],
            ['brand_name' => 'Mihoyo x Apex'],
        ]);
    }
}
