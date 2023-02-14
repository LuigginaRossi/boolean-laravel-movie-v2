<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //'title', 'genre', 'description', 'director', 'release_date'
        for ($i=0; $i < 10; $i++) { 
            $movie= new Movie();
            $movie->title=  $faker->words(rand(1 , 3), true);
            $movie->genre=  $faker->words(1, true);
            $movie->description= $faker->realText($faker->numberBetween(10, 15));
            $movie->director= $faker->name();
            $movie->release_date= $faker->date();

            $movie->save();
        }
    }
}
