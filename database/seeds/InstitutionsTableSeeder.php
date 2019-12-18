<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Institution;
use App\Director;
use App\City;
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
        Schema::disableForeignKeyConstraints();
        Institution::truncate();
        Schema::enableForeignKeyConstraints();

        $faker = Faker::create();
        $fakerNIT= Faker::create('fr_CH');
        $fakerS = Faker::create('es_ES');

        $directors = Director::all()->pluck('id')->toArray();
        $cities = City::all()->pluck('id')->toArray();

        for($i=0;$i<=99;$i++){
            $name = $faker->unique()->company;

            Institution::create([
                'nit'=>$fakerNIT->unique()->avs13,
                'institution_name'=>"Liceo ".$name,
                'address'=> $faker->streetAddress,
                'phone_number'=>$fakerS->mobileNumber,
                'institutional_email'=>$name."@edu.co",
                'director_id'=>$faker->randomElement($directors),
                'city_id'=>$faker->randomElement($cities),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }

    }
}
