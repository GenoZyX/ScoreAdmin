<?php

use Illuminate\Database\Seeder;
//Use Models
use App\Score;
use App\Payroll;
//Use Library Faker (Data)
use Faker\Factory as Faker;
//Use Library Carbon (DateTimes)
use Carbon\Carbon;
class ScoresTableSeeder extends Seeder
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
        Score::truncate();
        Schema::enableForeignKeyConstraints();

        //Vars Faker
        $faker= Faker::create();

        //Id Arrays
        $payrolls = Payroll::all()->pluck('id')->toArray();

        for($i=0;$i<=299;$i++){ //Amont

            Score::create([ //ORM Insert
                //Information Table
                'account'=>$faker->text($maxNbChars = 40),
                'note_value'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 50),
                'percentage'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
                
                //RelationShips
                'payroll_id'=>$faker->randomElement($payrolls),

                //TimeStamps
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
         }
    }
}
