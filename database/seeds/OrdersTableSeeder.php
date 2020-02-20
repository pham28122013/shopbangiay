<?php
use App\Order;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class OrdersTableSeeder extends Seeder
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
            Order::create([
                'user_id' => $faker->ean8,
                'customer_name' => $faker->userName,
                'phone' => $faker->phoneNumber,
                'address' => $faker->streetAddress,
                'email' => $faker->freeEmail,
                'note' => ('Giày đẹp')
            ]);
        }
    }
}
