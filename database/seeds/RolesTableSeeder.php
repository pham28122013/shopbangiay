<?php
use App\Role;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class RolesTableSeeder extends Seeder
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
            Role::create([
                'name' => $faker->userName
            ]);
        }
    }
}
