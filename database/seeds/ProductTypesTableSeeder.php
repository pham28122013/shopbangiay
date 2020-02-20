<?php
use App\ProductType;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProductTypesTableSeeder extends Seeder
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
            ProductType::create([
                'name' => $faker->userName
            ]);
        }
    }
}
