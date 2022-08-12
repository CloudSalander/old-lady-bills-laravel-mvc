<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \DB::table('shop_address')->insert([
            ['id' => 1,
            'street' => 'Passeig de la Salzereda',
            'number' => 'S/N',
        	'zip' => '08923',
        	'city' => 'Santa Coloma de Gramenet',
        	'country' => 'Spain',
        	'shop_id' => 1,
        	'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
        	'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
           ],
            ['id' => 2,
            'street' => 'Mercat Segarra',
            'number' => '21',
        	'zip' => '08922',
        	'city' => 'Santa Coloma de Gramenet',
        	'country' => 'Spain',
        	'shop_id' => 2,
        	'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
        	'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
           ],
           ['id' => 3,
            'street' => 'Avinguda de la Generalitat',
            'number' => '40',
        	'zip' => '08922',
        	'city' => 'Santa Coloma de Gramenet',
        	'country' => 'Spain',
        	'shop_id' => 3,
        	'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
        	'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
           ],
           ['id' => 4,
            'street' => 'Avinguda de la Generalitat',
            'number' => '105',
        	'zip' => '08923',
        	'city' => 'Santa Coloma de Gramenet',
        	'country' => 'Spain',
        	'shop_id' => 4,
        	'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
        	'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
           ],
           ['id' => 5,
            'street' => 'Carrer Santa Ana',
            'number' => '6',
        	'zip' => '08921',
        	'city' => 'Santa Coloma de Gramenet',
        	'country' => 'Spain',
        	'shop_id' => 5,
        	'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
        	'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
           ]

        ]);
    }
}
