<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('order')->insert([
            ['id' => 1,
            'moment' => Carbon::create('2022', '08', '01'),
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'paid' => 7.48,
            'total' => 7.48,
            'pay_mode' => 'card'
            ],
            ['id' => 2,
            'moment' => Carbon::create('2022', '08', '13'),
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'paid' => 6.92,
            'total' => 6.92,
            'pay_mode' => 'card'
            ],
            ['id' => 3,
            'moment' => Carbon::create('2022', '07', '23'),
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'paid' => 3.56,
            'total' => 3.56,
            'pay_mode' => 'card'
            ],
            ['id' => 4,
            'moment' => Carbon::create('2022', '08', '02'),
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'paid' => 6.67,
            'total' => 6.67,
            'pay_mode' => 'card'
            ],
            ['id' => 5,
            'moment' => Carbon::create('2022', '08', '11'),
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'paid' => 8.92,
            'total' => 8.92,
            'pay_mode' => 'card'
            ],
            ['id' => 6,
            'moment' => Carbon::create('2022', '06', '29'),
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'paid' => 5.88,
            'total' => 5.88,
            'pay_mode' => 'card'
            ]
        ]); 
    }
}
