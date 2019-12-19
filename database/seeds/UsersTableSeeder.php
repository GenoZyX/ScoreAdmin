<?php

use Illuminate\Database\Seeder;
//Use Models
use App\User;
use App\WorkingDay;
use App\DocumentType;
use App\Gender;
use App\City;
use App\Institution;
//Use Library Faker (Data)
use Faker\Factory as Faker;
//Use Carbon (DateTimes)
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
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
        User::truncate();
        Schema::enableForeignKeyConstraints();

        //Vars Faker
        $faker = Faker::create();
        $fakerS = Faker::create('es_ES');

        //Id Arrays
        $workings = WorkingDay::all()->pluck('id')->toArray();
        $documents = DocumentType::all()->pluck('id')->toArray();
        $genders = Gender::all()->pluck('id')->toArray();
        $cities = City::all()->pluck('id')->toArray();
        $institutions = Institution::all()->pluck('id')->toArray();

        for($i=0;$i<=29;$i++){ //Amount
            
            //Functional Vars
            $name = $faker->firstName;
            $lname= $faker->lastName;
            $email = $name."@".$faker->unique()->company.".edu.co";
            
            User::create([ //ORM Insert
                //Information Session
                'username'=>$name." ".$lname,
                'institutional_email'=>$email,
                'password'=>bcrypt($faker->word),
                'user_photo'=>'tmp/users_photo/'.bcrypt('username'.$faker->word).$faker->fileExtension,
                
                //Information Table
                'user_names'=>$name." ".$faker->firstName,
                'user_lastnames'=>$lname." ".$faker->lastName,
                'phone_number'=>$fakerS->mobileNumber,
                'document_number'=>$fakerS->unique()->dni,
                'address'=>$faker->address,
                'alternative_email'=>$faker->unique()->email,
                
                //RelationShips
                'working_day_id'=>$faker->randomElement($workings),
                'document_type_id'=>$faker->randomElement($documents),
                'gender_id'=>$faker->randomElement($genders),
                'city_id'=>$faker->randomElement($cities),
                'institution_id'=>$faker->randomElement($institutions),


                //TimeStamps
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}

