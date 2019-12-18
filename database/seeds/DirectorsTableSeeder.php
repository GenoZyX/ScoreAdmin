<?php

use Illuminate\Database\Seeder;
use App\Director;
use App\WorkingDay;
use App\DocumentType;
use App\Gender;
use App\City;

use Faker\Factory as Faker;
use Carbon\Carbon;
class DirectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Director::truncate();
        Schema::enableForeignKeyConstraints();

        $faker = Faker::create();
        $fakerS = Faker::create('es_ES');

        $workings = WorkingDay::all()->pluck('id')->toArray();
        $documents = DocumentType::all()->pluck('id')->toArray();
        $genders = Gender::all()->pluck('id')->toArray();
        $cities = City::all()->pluck('id')->toArray();


        for($i=0;$i<=99;$i++){
            $name = $faker->firstName;
            $email = $name."@".$faker->unique()->company.".edu.co";
            Director::create([
                'director_names'=>$name." ".$faker->firstName,
                'director_lastnames'=>$faker->lastName." ".$faker->lastName,
                'institutional_email'=> $email,
                'alternative_email'=>$faker->unique()->email,
                'address'=>$faker->address,
                'document_number'=>$fakerS->unique()->dni,
                'phone_number'=>$fakerS->mobileNumber,

                'working_day_id'=>$faker->randomElement($workings),
                'document_type_id'=>$faker->randomElement($documents),
                'gender_id'=>$faker->randomElement($genders),
                'city_id'=>$faker->randomElement($cities),

                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }

    }
}
