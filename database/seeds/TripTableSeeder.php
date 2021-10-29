<?php

use App\Trip;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; 

class TripTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrip = new Trip();
            $newTrip->departure = $faker->city();
            $newTrip->arrival = $faker->city();
            $newTrip->company = $faker->name();
            $newTrip->name_fly = $faker->bothify('#?#??##');
            $newTrip->save();
        }
    }
}
