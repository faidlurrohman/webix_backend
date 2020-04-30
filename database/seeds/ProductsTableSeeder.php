<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'title' => $faker->sentence($nbWords = 1, $variableNbWords = true),
                'description' => $faker->sentence($nbWords = 2, $variableNbWords = true),
            ]);
        }
    }
}
