<?php

use Illuminate\Database\Seeder;
//Use Model
use App\Subject;
use App\SubjectName;
use App\Teacher;
use App\Grade;
//Use Library Faker (Data)
use Faker\Factory as Faker;
//Use Library Carbon (DateTimes)
use Carbon\Carbon;

class SubjectsTableSeeder extends Seeder
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
        Subject::truncate();
        Schema::enableForeignKeyConstraints();

        //Vars Faker
        $faker = Faker::create();

        //Id Arrays
        $subnames= SubjectName::all()->pluck('id')->toArray();
        $teachers = Teacher::all()->pluck('id')->toArray();
        $grades = Grade::all()->pluck('id')->toArray();

        for($i=0;$i<=199;$i++){ //Amont

            Subject::create([ //ORM Insert

                //RelationShips
                'subject_name_id'=>$faker->randomElement($subnames),
                'teacher_id'=>$faker->randomElement($teachers),
                'grade_id'=>$faker->randomElement($grades),

                //TimeStamps
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
