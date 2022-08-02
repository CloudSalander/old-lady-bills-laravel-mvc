<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('food_category')->insert([
            ['id' => 1,
            'name' => 'fruit']
           ,[
           	'id' => 2,
           	'name' => 'vegetable'
            ],[
           	'id' => 3,
           	'name' => 'meat'
            ],[
           	'id' => 4,
           	'name' => 'fish'
            ],[
           	'id' => 5,
           	'name' => 'seafood'
            ],[
           	'id' => 6,
           	'name' => 'legum'
            ],[
           	'id' => 7,
           	'name' => 'cooked pork'
            ],['id' => 8,
            'name' => 'cheese']
           ,[
           	'id' => 9,
           	'name' => 'eggs'
            ],[
           	'id' => 10,
           	'name' => 'bread'
            ],[
           	'id' => 11,
           	'name' => 'industrial pastries'
            ],[
           	'id' => 12,
           	'name' => 'sauce'
            ],[
           	'id' => 13,
           	'name' => 'broth'
            ],[
           	'id' => 14,
           	'name' => 'cream'
            ],[
            'id' => 15,
            'name' => 'biscuits'
        	],[
           	'id' => 16,
           	'name' => 'sugar'
            ],[
           	'id' => 17,
           	'name' => 'milk'
            ],[
           	'id' => 18,
           	'name' => 'smoothie'
            ],[
           	'id' => 19,
           	'name' => 'liqueur'
            ],[
           	'id' => 20,
           	'name' => 'beer'
            ],[
           	'id' => 21,
           	'name' => 'water'
            ],[
            'id' => 22,
            'name' => 'wine']
            ,[
           	'id' => 23,
           	'name' => 'energy drink'
            ],[
           	'id' => 24,
           	'name' => 'dessert'
            ],[
           	'id' => 25,
           	'name' => 'vegetable drink'
            ],[
           	'id' => 26,
           	'name' => 'conserve'
            ],[
           	'id' => 27,
           	'name' => 'marmalade'
            ],[
           	'id' => 28,
           	'name' => 'infusion'
            ],[
            'id' => 29,
            'name' => 'spice'
        	],[
           	'id' => 30,
           	'name' => 'vinegar'
            ],[
           	'id' => 31,
           	'name' => 'oil'
            ],[
           	'id' => 32,
           	'name' => 'chocolate'
            ],[
           	'id' => 33,
           	'name' => 'snack'
            ],[
           	'id' => 34,
           	'name' => 'nuts'
            ],[
           	'id' => 35,
           	'name' => 'coffee'
            ],[
            'id' => 36,
            'name' => 'juice'
        	],[
           	'id' => 37,
           	'name' => 'ice cream'
            ],[
           	'id' => 38,
           	'name' => 'pizza'
            ],[
           	'id' => 39,
           	'name' => 'rice'
            ],[
           	'id' => 40,
           	'name' => 'pasta'
            ]
        ]);
    }
}
