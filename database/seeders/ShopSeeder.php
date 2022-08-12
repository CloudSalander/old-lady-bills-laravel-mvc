<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \DB::table('shop')->insert([
            ['id' => 1,
            'name' => 'Mercadona Salzareda',
        	'url' => 'https://www.mercadona.es/',
        	'email' => '',
        	'phone' => '933 85 80 64',
        	'online' => 1,
        	'type' => 'supermarket',
        	'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
        	'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
           ],
           ['id' => 2,
            'name' => 'Queviures Leo',
            'url' => '',
        	'email' => 'info@comprasantacoloma.cat',
        	'phone' => '629679981',
        	'online' => 0,
        	'type' => 'market',
        	'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
        	'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        	],
        	['id' => 3,
            'name' => 'Ametller Origen Av.Generalitat',
        	'url' => 'https://www.ametllerorigen.com/',
        	'email' => '',
        	'phone' => '637 13 03 11',
        	'online' => 1,
        	'type' => 'supermarket',
        	'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
        	'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        	],
        	['id' => 4,
            'name' => 'Condis Supermercats Av.Generalitat',
        	'url' => 'https://www.condis.es/',
        	'email' => '',
        	'phone' => '931713258',
        	'online' => 1,
        	'type' => 'supermarket',
        	'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
        	'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        	],
        	['id' => 5,
            'name' => 'Dia Santa Ana',
        	'url' => 'https://diacorporate.com/',
        	'phone' => '+34 912 170 453',
        	'email' => 'dia.attcliente@diagroup.com',
        	'online' => 1,
        	'type' => 'supermarket',
        	'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
        	'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        	]

        ]);
    }
}
