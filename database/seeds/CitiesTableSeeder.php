<?php

use Illuminate\Database\Seeder;
//Use Models
use App\City; 
//Use Library Faker (Data)
use Faker\Factory as Faker; 
//Use Library Carbon (DateTimes)
use Carbon\Carbon; 

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Schema for restrict the amount of data 
        Schema::disableForeignKeyConstraints();
        City::truncate();
        Schema::enableForeignKeyConstraints();

        // Vars Faker
        $faker=Faker::create();

        for($i=0;$i<=199;$i++){ //Amount

            City::create([ //ORM Insert
                //Information Table
                'city_name'=>$faker->city,

                //TimeStamps
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
