<?php
use App\OrderDetail;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class OrderDetailsTableSeeder extends Seeder
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
            OrderDetail::create([
                'order_id' => $faker->ean8,
                'quantity' => ('100'),
                'product_name' => ('giay adidas'),
                'code' => $faker->ean13,
                'Size' => ('39'),
                'product_id' => $faker->ean8,
                'price' => ('50000')
            ]);
        }
    }
}
