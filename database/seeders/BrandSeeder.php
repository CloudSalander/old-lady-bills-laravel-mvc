<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            \DB::table('brand')->insert([
                ['id' => 1,
                'name' => 'no brand',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
                ],
                ['id' => 2,
                'name' => 'Bonte',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
                ],
                ['id' => 3,
                'name' => 'H&S',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
                ],
                ['id' => 4,
                'name' => 'Ametller Origen',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
                ],
                ['id' => 5,
                'name' => 'Santa Ana',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
                ],
                ['id' => 6,
                'name' => 'Kleenex',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
                ], 
                ['id' => 7,
                'name' => 'Nivea',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
                ],
                ['id' => 8,
                'name' => 'Condis',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
                ],
                ['id' => 9,
                'name' => 'Central Lechera Asturiana',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
                ],
                ['id' => 10,
                'name' => 'HC',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
                ],
                ['id' => 11,
                'name' => 'Florette',
                'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
                ]

            ]);

    }
}
