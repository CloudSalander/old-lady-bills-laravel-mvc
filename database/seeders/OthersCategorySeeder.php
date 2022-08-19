<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OthersCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('other_category')->insert([
            ['id' => 1,
            'name' => 'glasses']
           ,[
           	'id' => 2,
           	'name' => 'clothes'
            ],[
           	'id' => 3,
           	'name' => 'pet'
            ],[
           	'id' => 4,
           	'name' => 'pharmacy'
            ]
        ]);
    }
}
