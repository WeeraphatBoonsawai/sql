<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
        brandSeeder::class,
        producttypeSeeder::class,
        productSeeder::class,
        customerSeeder::class,
        promotionSeeder::class,
       ]);
    }
}
