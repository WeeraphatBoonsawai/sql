<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert
        ([
            ['product_name' => 'Yuuka Hayase',
            'product_desc' => 'From the popular game "Blue Archive" comes a Nendoroid of Yuuka Hayase, the treasurer of Seminar, the student council at Millennium Science School!',
            'product_img_url' => 'https://images.goodsmile.info/cgm/images/product/20230929/15041/121793/large/53239f8eff46964c76f837bf3212947f.jpg',
            'product_type_id'=> '1',
            'brand_id' => '1'
        ],
            ['product_name' => 'Shiroko Sunaookami',
            'product_desc' => 'From the popular game "Blue Archive" comes a rerelease of the figma of Shiroko Sunaookami, second-year student at Abydos High School and member of the Countermeasures Council!',
            'product_img_url' => 'https://images.goodsmile.info/cgm/images/product/20220407/12549/97546/large/f44b12be9e855a9727c5558ca402e055.jpg',
            'product_type_id'=> '2',
            'brand_id' => '1'
        ],
            ['product_name' => 'Renekton',
            'product_desc' => 'From "League of Legends" comes a 1/4 scale figure of Renekton!',
            'product_img_url' => 'https://images.goodsmile.info/cgm/images/product/20231122/15272/123852/large/28ac1b58a3c7f567585e6a7f5fec391c.jpg',
            'product_type_id'=> '3',
            'brand_id' => '1'
        ],
        ['product_name' => 'Lena',
            'product_desc' => '86-Eighty Six-Lena',
            'product_img_url' => 'https://o.lnwfile.com/_/o/_raw/jr/nq/0w.jpg',
            'product_type_id'=> '4',
            'brand_id' => '2'
        ],
        ['product_name' => 'Gwen',
            'product_desc' => 'Infinity Studio×League of Legends The Hallowed Seamstress- Gwen 1/6 Statue',
            'product_img_url' => 'https://images.goodsmile.info/cgm/images/product/20230307/14096/112721/large/fab76c4fa76165ade120b17aa1cae05e.jpg',
            'product_type_id'=> '3',
            'brand_id' => '1'
        ],
        ['product_name' => 'Klee',
            'product_desc' => 'Genshin Impact Figures, Genshin Figure Klee, Model Ornament 1/7 Scale Comes with Mini Figure',
            'product_img_url' => 'http://www.toysmile.com/media/catalog/product/cache/1/image/5dbab2e28bc9b44f677294c6401487eb/k/l/klee-scale-figure-09.jpg',
            'product_type_id'=> '3',
            'brand_id' => '10'
        ],
        ['product_name' => 'Aris (Maid)',
            'product_desc' => 'From the popular game "Blue Archive" comes a 1/7 scale figure of Aris, a member of the game development department at Millennium Science School, dressed as a maid.',
            'product_img_url' => 'https://images.goodsmile.info/cgm/images/product/20231019/15107/122641/large/95e8ff58a69656e5a789f12f538e6bfb.jpg',
            'product_type_id'=> '3',
            'brand_id' => '1'
        ],
        ['product_name' => 'Huggy Good Smile Hatsune Miku Ver',
            'product_desc' => 'Presenting a rerelease of Huggy Good Smile Hatsune Miku Ver. from "Character Vocal Series 01: Hatsune Miku',
            'product_img_url' => 'https://images.goodsmile.info/cgm/images/product/20230120/13831/110322/large/470de6d159632b79dd7e45937f3e9aaf.jpg',
            'product_type_id'=> '5',
            'brand_id' => '1'
        ],
        ['product_name' => 'Nendoroid Kana Arima',
            'product_desc' => 'From the anime series【OSHI NO KO】comes a Nendoroid of Baking Soda-chan herself, Kana Arima!',
            'product_img_url' => 'https://images.goodsmile.info/cgm/images/product/20231018/15099/122334/large/1b9d0098a3182abc3245d2465295e97a.jpg',
            'product_type_id'=> '1',
            'brand_id' => '1'
        ],
        ['product_name' => 'Nendoroid Toji Fushiguro',
            'product_desc' => 'From "Jujutsu Kaisen Hidden Inventory / Premature Death" comes a Nendoroid of Toji Fushiguro, the physically gifted man bound by a Heavenly Restriction.',
            'product_img_url' => 'https://images.goodsmile.info/cgm/images/product/20230927/15038/121757/large/c81530ee5066393b5d37d6a5012a5019.jpg',
            'product_type_id'=> '1',
            'brand_id' => '1'
        ],
        ]);
    }
}
