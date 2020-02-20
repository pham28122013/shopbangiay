<?php
use App\ProductImage;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProductImagesTableSeeder extends Seeder
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
            ProductImage::create([
                'product_id' => $faker->ean8,
                'url' => ('p1.jpg')
            ]);
        }
    }
}
