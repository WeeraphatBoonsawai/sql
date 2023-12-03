<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class promotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('promotion')->insert
        ([
            ['promotion_name' => 'New Customer',
            'promotion_start' => '2023-02-24',
            'promotion_end' => '2023-02-26',
            'percent_discount' => '2',
        ],
        ['promotion_name' => 'New Product',
        'promotion_start' => '2023-02-24',
        'promotion_end' => '2023-02-24',
        'percent_discount' => '2',
    ],
    ['promotion_name' => 'GG',
            'promotion_start' => '2023-02-24',
            'promotion_end' => '2023-02-24',
            'percent_discount' => '2',
        ],
        ['promotion_name' => 'GGEZ',
            'promotion_start' => '2023-02-24',
            'promotion_end' => '2023-02-24',
            'percent_discount' => '2',
        ],
        ['promotion_name' => 'oh no',
            'promotion_start' => '2023-02-24',
            'promotion_end' => '2023-02-24',
            'percent_discount' => '2',
        ],
        ['promotion_name' => 'KO',
            'promotion_start' => '2023-02-24',
            'promotion_end' => '2023-02-24',
            'percent_discount' => '2',
        ],
        ['promotion_name' => 'LOL',
            'promotion_start' => '2023-02-24',
            'promotion_end' => '2023-02-24',
            'percent_discount' => '2',
        ],
        ['promotion_name' => 'GOD',
            'promotion_start' => '2023-02-24',
            'promotion_end' => '2023-02-24',
            'percent_discount' => '2',
        ],
        ['promotion_name' => 'GOD FOOD',
            'promotion_start' => '2023-02-24',
            'promotion_end' => '2023-02-24',
            'percent_discount' => '2',
        ],
        ['promotion_name' => 'NEEDY',
            'promotion_start' => '2023-02-24',
            'promotion_end' => '2023-02-24',
            'percent_discount' => '2',
        ],
        ]);
    }
}
