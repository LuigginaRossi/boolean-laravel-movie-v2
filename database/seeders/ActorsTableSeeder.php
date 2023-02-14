<?php

namespace Database\Seeders;

use App\Models\Actor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // 'name', 'surname', 'date_of_birth'
        for ($i=0; $i < 10; $i++) { 
            $actor= new Actor();
            $actor->name=  $faker->words(1, true);
            $actor->surname=  $faker->words(1, true);
            $actor->date_of_birth= $faker->dateTime();  

            $actor->save();
        }
    }
}
