<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductBrandShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('product_brand_shop')->insert([
            ['product_id' => 14,
             'brand_id' => 2,
             'shop_id' => 6
            ],
            ['product_id' => 15,
             'brand_id' => 3,
             'shop_id' => 6
            ],
            ['product_id' => 13,
             'brand_id' => 1,
             'shop_id' => 2
            ],
            ['product_id' => 12,
             'brand_id' => 4,
             'shop_id' => 3
            ],
            ['product_id' => 11,
             'brand_id' => 4,
             'shop_id' => 3
            ],
            ['product_id' => 10,
             'brand_id' => 4,
             'shop_id' => 3
            ],
            ['product_id' => 9,
             'brand_id' => 7,
             'shop_id' => 5
            ],
            ['product_id' => 8,
             'brand_id' => 6,
             'shop_id' => 5
            ],
            ['product_id' => 7,
             'brand_id' => 1,
             'shop_id' => 4
            ],
            ['product_id' => 6,
             'brand_id' => 1,
             'shop_id' => 4
            ],
            ['product_id' => 5,
             'brand_id' => 5,
             'shop_id' => 5

            ],
            ['product_id' => 4,
             'brand_id' => 9,
             'shop_id' => 4
            ],
            ['product_id' => 3,
             'brand_id' => 8,
             'shop_id' => 4
            ],
            ['product_id' => 2,
             'brand_id' => 8,
             'shop_id' => 4
            ],
            ['product_id' => 1,
             'brand_id' => 11,
             'shop_id' => 4
            ],
            ['product_id' => 5,
             'brand_id' => 10,
             'shop_id' => 4
            ]
        ]);
    }
}

   