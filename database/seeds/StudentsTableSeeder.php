<?php

use Illuminate\Database\Seeder;
use App\Student;
use App\WorkingDay;
use App\DocumentType;
use App\Gender;
use App\City;
use App\Grade;
use Faker\Factory as Faker;
use Carbon\Carbon;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Student::truncate();
        Schema::enableForeignKeyConstraints();

        $faker = Faker::create();
        $fakerS = Faker::create('es_ES');

        $workings = WorkingDay::all()->pluck('id')->toArray();
        $documents = DocumentType::all()->pluck('id')->toArray();
        $genders = Gender::all()->pluck('id')->toArray();
        $cities = City::all()->pluck('id')->toArray();
        $grades = Grade::all()->pluck('id')->toArray();

        for($i=0;$i<=99;$i++){
            $name = $faker->firstName;
            $email = $name."@".$faker->unique()->company.".edu.co";
            Student::create([
                'student_names'=>$name." ".$faker->firstName,
                'student_lastnames'=>$faker->lastName." ".$faker->lastName,
                'institutional_email'=> $email,
                'alternative_email'=>$faker->unique()->email,
                'address'=>$faker->address,
                'document_number'=>$fakerS->unique()->dni,
                'phone_number'=>$fakerS->mobileNumber,

                'working_day_id'=>$faker->randomElement($workings),
                'document_type_id'=>$faker->randomElement($documents),
                'gender_id'=>$faker->randomElement($genders),
                'city_id'=>$faker->randomElement($cities),
                'grade_id'=>$faker->randomElement($grades),

                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
