<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $companies = ['Trenitalia', 'Trenord', 'Italo'];
        for( $i = 0; $i < 100; $i++) {
            //creiamo l'istanza del model Train
            $new_train = new Train();

            //popoliamo le proprieta` dell'istanza
            $new_train->company = $faker->randomElement($companies);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->dateTimeBetween('-1 day', '+1 day');
            $new_train->arrival_time = $faker->dateTimeBetween('+1 day', '+2 day');
            $new_train->train_code = $faker->unique()->bothify('??#####');
            $new_train->wagons_number = $faker->numberBetween(1,10);
            $new_train->on_time = $faker->boolean();
            $new_train->cancelled = false;

            //salviamo
            $new_train->save();
        }
    }
}
