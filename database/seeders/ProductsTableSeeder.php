<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Factory::create();
        for ($i=0; $i < 30; $i++) { 
            Product::create([
                'title' => $faker->sentence(15),
                'slug' => $faker->slug,
                'subtitle' => $faker->sentence(10),
                'description' => $faker->text,
                'price' => $faker->numberBetween(15, 300) * 100,
                'image' => 'https://via.placeholder.com/200x250',
            ]);
        }
    }
}
