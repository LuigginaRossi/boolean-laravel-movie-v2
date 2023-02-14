<?php

namespace Database\Seeders;

use App\Models\ProductionCompany;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductionCompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) { 
            $company= new ProductionCompany();
            $company->name= $faker->name();
            
            $company->save();
        }
    }
}
