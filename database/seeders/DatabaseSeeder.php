<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            OthersCategorySeeder::class,
            HygieneCategorySeeder::class,
            FoodCategorySeeder::class,
            ShopSeeder::class,
            AddressSeeder::class,
            BrandSeeder::class,
            ProductSeeder::class,
            ProductBrandSeeder::class,
            ProductBrandShopSeeder::class,
            ProductHistoricalPriceSeeder::class,
            OrderSeeder::class
        ]);
    }
}
