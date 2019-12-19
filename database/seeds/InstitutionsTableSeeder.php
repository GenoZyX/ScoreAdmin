<?php

use Illuminate\Database\Seeder;
//Use Models
use App\Institution;
use App\Director;
use App\City;
//Use Library Faker (Data)
use Faker\Factory as Faker;
//Use Library Carbon (DateTimes)
use Carbon\Carbon;

class InstitutionsTableSeeder extends Seeder
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
        Institution::truncate();
        Schema::enableForeignKeyConstraints();

        //Vars Faker
        $faker = Faker::create();
        $fakerNIT= Faker::create('fr_CH');
        $fakerS = Faker::create('es_ES');

        //Id Arrays
        $directors = Director::all()->pluck('id')->toArray();
        $cities = City::all()->pluck('id')->toArray();

        for($i=0;$i<=99;$i++){ //Amount

            //Functional Vars
            $name = $faker->unique()->company;

            Institution::create([ //ORM Insert
                //Information Table
                'nit'=>$fakerNIT->unique()->avs13,
                'institution_name'=>"Liceo ".$name,
                'address'=> $faker->streetAddress,
                'phone_number'=>$fakerS->mobileNumber,
                'institutional_email'=>$name."@edu.co",
                
                //RelationShips
                'director_id'=>$faker->randomElement($directors),
                'city_id'=>$faker->randomElement($cities),
                
                //TimeStamps
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }

    }
}
