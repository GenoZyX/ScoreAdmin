<?php

use Illuminate\Database\Seeder;
//Use Models
use App\Gender;
//Use Library Faker (Data)
use Faker\Factory as Faker;
//Use Library Carbon (DateTimes)
use Carbon\Carbon;

class GendersTableSeeder extends Seeder
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
        Gender::truncate();
        Schema::enableForeignKeyConstraints();

        Gender::create([ //ORM Insert
            //Table Information
            'gender_name'=>'Masculino',
            'abbreviation'=>'M',

            //TimeStamps
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        Gender::create([ //ORM Insert
            //Table Information
            'gender_name'=>'Femenino',
            'abbreviation'=>'F',

            //TimeStamps
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        Gender::create([ //ORM Insert
            //Table Information
            'gender_name'=>'Otro',
            'abbreviation'=>'O',

            //TimeStamps
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
