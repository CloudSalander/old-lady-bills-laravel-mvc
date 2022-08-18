<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('product')->insert([
                ['id' => 1,
                'name' => 'Ensalada de pasta y rúcula',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'tax' => 21.0,
                'food_category_id' => 41
                ],
                ['id' => 2,
                'name' => 'Papel cocina 3 capas',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'tax' => 10.0,
                'hygiene_category_id' => 8
                ],
                ['id' => 3,
                'name' => 'Galletas chocolate negro',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'tax' => 10.0,
                'food_category_id' => 15
                ],
                ['id' => 4,
                'name' => 'Mantequilla',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'tax' => 10.0,
                'food_category_id' => 42
                ],
                ['id' => 5,
                'name' => 'Patatas chip',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'tax' => 10.0,
                'food_category_id' => 33
                ],
                ['id' => 6,
                'name' => 'Cebolla',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'tax' => 4.0,
                'food_category_id' => 2
                ], 
                ['id' => 7,
                'name' => 'Cerezas',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'tax' => 4.0,
                'food_category_id' => 1
                ],
                ['id' => 8,
                'name' => 'Mascarilla quirúrgica negra',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'tax' => 21.0,
                'hygiene_category_id' => 9
                ],
                ['id' => 9,
                'name' => 'Desodorante roll-on',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'tax' => 21.0,
                'hygiene_category_id' => 10
                ],
                ['id' => 10,
                'name' => 'Shitake',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'tax' => 4.0,
                'food_category_id' => 2 
                ],
                ['id' => 11,
                'name' => 'Zumo de piña y mango',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'tax' => 10.0,
                'food_category_id' => 36
                ],
                ['id' => 12,
                'name' => 'Masa de pizza',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'tax' => 10.0,
                'food_category_id' => 43
                ],
                ['id' => 13,
                'name' => 'Muslo de pavo',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'tax' => 10.0,
                'food_category_id' => 7                
                ],
                ['id' => 14,
                'name' => 'Gel ducha rosa mosqueta',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'tax' => 21.0,
                'hygiene_category_id' => 2                
                ],
                ['id' => 15,
                'name' => 'Champú mentol',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'tax' => 21.0,
                'hygiene_category_id' => 3                
                ],
            ]);
    }
}
