<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travelpack;
class TravelpacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $pack = new Travelpack();
            $pack->destination = $faker->randomElement(['Creta', 'Sharm el Sheikh', 'Tenerife', 'Zante', 'Maiorca']);
            $pack->host_structure = $faker->randomElement(['Westin Palace', 'Jumeirah Vittaveli', 'La Mamounia', 'Sofitel Rome Villa Borghese']);
            $pack->from = $faker->randomElement(['Milano', 'Palermo', 'Roma', 'Torino']);
            $pack->overnight_days = $faker->numberBetween(1, 7);
            $pack->formula = $faker->randomElement(['Hotel', 'B&B', 'Hotel+Flight', 'Hotel+Flight+Transport']);
            $pack->price = $faker->randomFloat(1, 200, 3000);
            $pack->save();
        }

    }
}
