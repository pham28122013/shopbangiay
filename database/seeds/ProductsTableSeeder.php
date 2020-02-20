<?php

use App\Product;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            Product::create([
                'product_type_id' => $faker->ean8,
                'name' => ('giay adidas'),
                'price' => ('50000'),
                'code' => $faker->ean13,
                'quantity' => ('10'),
                'delete_at' => $faker->dateTime()
            ]);
        }
    }
}
