<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HygieneCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('hygiene_category')->insert([
            ['id' => 1,
            'name' => 'detergent']
           ,[
           	'id' => 2,
           	'name' => 'gel'
            ],[
           	'id' => 3,
           	'name' => 'shampoo'
            ],[
           	'id' => 4,
           	'name' => 'toothpaste'
            ],[
           	'id' => 5,
           	'name' => 'fluoride'
            ],[
           	'id' => 6,
           	'name' => 'liquid contact sense'
            ],[
           	'id' => 7,
           	'name' => 'others'
            ],
            [
            'id' => 8,
            'name' => 'kitchen paper'
            ],
            [
                'id' => 9,
                'name' => 'surgical mask'
            ],
            [
                'id' => 10,
                'name' => 'deodorant'
            ]
        ]);
    }
}
