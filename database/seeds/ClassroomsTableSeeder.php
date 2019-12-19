<?php

use Illuminate\Database\Seeder;
//Use Models
use App\Classroom; 
use App\Institution;
//Use Library Faker (Data)
use Faker\Factory as Faker;
//Use Library Carbon (DateTimes)
use Carbon\Carbon; 

class ClassroomsTableSeeder extends Seeder
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
        Classroom::truncate();
        Schema::enableForeignKeyConstraints();

        // Vars Faker
        $faker= Faker::create();

        //Id Arrays
        $institutions = Institution::all()->pluck('id')->toArray();

        for($i=0;$i<=49;$i++){ //Amount

            //Functional Vars
            $num1 = $faker->numberBetween($min=1,$max=5);
            $num2 = $faker->numberBetween($min=0,$max=9);
    
            Classroom::create([ //ORM Insert
                //Information Table
                'number_classroom'=>$num1.'0'.$num2,
                
                //RelationShips
                'institution_id'=>$faker->randomElement($institutions),
                
                //TimeStamps
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
