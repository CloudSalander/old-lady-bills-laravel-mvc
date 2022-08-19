<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductHistoricalPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        \DB::table('product_historical_price')->insert([
            ['product_id' => 14,
             'brand_id' => 2,
             'shop_id' => 6,
             'price' => 1.4,
             'unit_type' => 'units',
             'units' => 1,
             'offer' => 0,
             'moment' => Carbon::create('2022', '08', '13')
            ],
            ['product_id' => 15,
             'brand_id' => 3,
             'shop_id' => 6,
             'price' => 5.07,
             'unit_type' => 'units',
             'units' => 1,
             'offer' => 1,
             'moment' => Carbon::create('2022', '06', '22')
            ],
            ['product_id' => 13,
             'brand_id' => 1,
             'shop_id' => 2,
             'price' => 20.9,
             'unit_type' => 'kilograms',
             'units' => 1,
             'offer' => 0,
             'moment' => Carbon::create('2022', '07', '23')

            ],
            ['product_id' => 12,
             'brand_id' => 4,
             'shop_id' => 3,
             'price' => 1.99,
             'unit_type' => 'units',
             'units' => 2,
             'offer' => 0,
             'moment' => Carbon::create('2022', '08', '01')

            ],
            ['product_id' => 11,
             'brand_id' => 4,
             'shop_id' => 3,
             'price' => 1.99,
             'unit_type' => 'liters',
             'units' => 0.750,
             'offer' => 1,
             'moment' => Carbon::create('2022', '08', '01')

            ],
            ['product_id' => 10,
             'brand_id' => 4,
             'shop_id' => 3,
             'price' => 1.99,
             'unit_type' => 'kilograms',
             'units' => 0.150,
             'offer' => 0,
             'moment' => Carbon::create('2022', '08', '01')

            ],
            ['product_id' => 9,
             'brand_id' => 7,
             'shop_id' => 5,
             'price' => 2.39,
             'unit_type' => 'units',
             'units' => 1,
             'offer' => 0,
             'moment' => Carbon::create('2022', '08', '11')

            ],
            ['product_id' => 8,
             'brand_id' => 6,
             'shop_id' => 5,
             'price' => 2.99,
             'unit_type' => 'units',
             'units' => 5,
             'offer' => 0,
             'moment' => Carbon::create('2022', '06', '22')

            ],
            ['product_id' => 7,
             'brand_id' => 1,
             'shop_id' => 4,
             'price' => 2.27,
             'unit_type' => 'units',
             'units' => 1,
             'offer' => 0,
             'moment' => Carbon::create('2022', '08', '11')

            ],
            ['product_id' => 6,
             'brand_id' => 1,
             'shop_id' => 4,
             'price' => 0.79,
             'unit_type' => 'kilograms',
             'units' => 1,
             'offer' => 0,
             'moment' => Carbon::create('2022', '08', '11')

            ],
            ['product_id' => 5,
             'brand_id' => 5,
             'shop_id' => 5,
             'price' => 1.29,
             'unit_type' => 'units',
             'units' => 1,
             'offer' => 0,
             'moment' => Carbon::create('2022', '08', '02')


            ],
            ['product_id' => 4,
             'brand_id' => 9,
             'shop_id' => 4,
             'price' => 3.15,
             'unit_type' => 'units',
             'units' => 1,
             'offer' => 0,
             'moment' => Carbon::create('2022', '08', '11')

            ],
            ['product_id' => 3,
             'brand_id' => 8,
             'shop_id' => 4,
             'price' => 1.2,
             'unit_type' => 'units',
             'units' => 1,
             'offer' => 0,
             'moment' => Carbon::create('2022', '08', '11')

            ],
            ['product_id' => 2,
             'brand_id' => 8,
             'shop_id' => 4,
             'price' => 2.79,
             'unit_type' => 'units',
             'units' => 3,
             'offer' => 0,
             'moment' => Carbon::create('2022', '06', '22')

            ],
            ['product_id' => 1,
             'brand_id' => 11,
             'shop_id' => 4,
             'price' => 3.09,
             'unit_type' => 'units',
             'units' => 1,
             'offer' => 0,
             'moment' => Carbon::create('2022', '06', '22')

            ],
            ['product_id' => 5,
             'brand_id' => 10,
             'shop_id' => 4,
             'price' => 1.89,
             'unit_type' => 'units',
             'units' => 2,
             'offer' => 0,
             'moment' => Carbon::create('2022', '06', '22')
            ]
        ]);
    }
}
