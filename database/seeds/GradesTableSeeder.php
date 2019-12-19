<?php

use Illuminate\Database\Seeder;
//Use Models
use App\Grade;
use App\Teacher;
use App\Institution;
use App\WorkingDay;
use App\Classroom;
//Use Library Faker (Data)
use Faker\Factory as Faker;
//Use Library Carbon (DateTimes)
use Carbon\Carbon;

class GradesTableSeeder extends Seeder
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
        Grade::truncate();
        Schema::enableForeignKeyConstraints();

        //Vars Faker
        $faker = Faker::create();
        $fakerS = Faker::create('es_ES');

        //Id Arrays
        $teachers= Teacher::all()->pluck('id')->toArray();
        $institutions = Institution::all()->pluck('id')->toArray();
        $workings = WorkingDay::all()->pluck('id')->toArray();
        $classrooms = Classroom::all()->pluck('id')->toArray();

        //Functional Vars
        $name=["Parvulos","Prejardín","Jardín","Transición","Primero","Segundo","Tercero","Cuarto","Quinto","Sexto","Séptimo","Octavo","Noveno","Décimo","Once"];
        $sub=["A","B","C","D"];

        for($i=0;$i<=199;$i++){ //Ammount
            Grade::create([ //ORM Insert
                //Information Table
                'name_grade'=>$faker->randomElement($name),
                'sub_index'=>$faker->randomElement($sub),
                
                //RelationShips
                'teacher_id'=>$faker->randomElement($teachers),
                'institution_id'=>$faker->randomElement($institutions),
                'working_day_id'=>$faker->randomElement($workings),
                'classroom_id'=>$faker->randomElement($classrooms),
                
                //TimeStamps
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]);
        }

    }
}
