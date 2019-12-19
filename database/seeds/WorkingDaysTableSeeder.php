<?php

use Illuminate\Database\Seeder;
//Use Models
use App\WorkingDay;
//Use Library Faker (Data)
use Faker\Factory as Faker;
//Use Library Carbon (DateTimes)
use Carbon\Carbon;

class WorkingDaysTableSeeder extends Seeder
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
        WorkingDay::truncate();
        Schema::enableForeignKeyConstraints();

        WorkingDay::create([ //ORM Insert
            //Table Information
            'working_day_name'=>'Diurna',
            'abbreviation'=>'D',

            //TimeStamps
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        WorkingDay::create([ //ORM Insert
            //Table Information
            'working_day_name'=>'Tarde',
            'abbreviation'=>'T',

            //TimeStamps
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        WorkingDay::create([ //ORM Insert
            //Table Information
            'working_day_name'=>'Completa',
            'abbreviation'=>'C',

            //TimeStamps
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        WorkingDay::create([ //ORM Insert
            //Table Information
            'working_day_name'=>'Nocturna',
            'abbreviation'=>'N',

            //TimeStamps
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        WorkingDay::create([ //ORM Insert
            //Table Information
            'working_day_name'=>'Mixta',
            'abbreviation'=>'M',

            //TimeStamps
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        WorkingDay::create([ //ORM Insert
            //Table Information
            'working_day_name'=>'Fin de Semana',
            'abbreviation'=>'F',

            //TimeStamps
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
