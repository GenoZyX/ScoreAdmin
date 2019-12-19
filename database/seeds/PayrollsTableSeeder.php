<?php

use Illuminate\Database\Seeder;
//Use Models
use App\Payroll;
use App\Student;
use App\Subject;
//Use Library Faker (Data)
use Faker\Factory as Faker;
//Use Library Carbon (DateTimes)
use Carbon\Carbon;

class PayrollsTableSeeder extends Seeder
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
        Payroll::truncate();
        Schema::enableForeignKeyConstraints();

        //Vars Faker
        $faker= Faker::create();

        //Id Arrays
        $students = Student::all()->pluck('id')->toArray();
        $subjects = Subject::all()->pluck('id')->toArray();

        //Functional Vars
        $novelties = ['Aprobado','Reprobado','Recuperado','Excelencia','Retirado'];

        for($i=0;$i<=25;$i++){ //Amont

            Payroll::create([ //ORM Insert
                //Information Table
                'final_note'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 50),
                'novelty'=>$faker->randomElement($novelties),
                'observation'=>$faker->text($maxNbChars = $faker->numberBetween($min=20,$max=45)),

                //RelationShips
                'student_id'=>$faker->randomElement($students),
                'subject_id'=>$faker->randomElement($subjects),

                //TimeStamps
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
