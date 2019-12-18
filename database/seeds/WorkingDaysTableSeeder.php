<?php

use Illuminate\Database\Seeder;
use App\WorkingDay;
use Faker\Factory as Faker;
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
        Schema::disableForeignKeyConstraints();
        WorkingDay::truncate();
        Schema::enableForeignKeyConstraints();


        WorkingDay::create([
            'working_day_name'=>'Diurna',
            'abbreviation'=>'D',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        WorkingDay::create([
            'working_day_name'=>'Tarde',
            'abbreviation'=>'T',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        WorkingDay::create([
            'working_day_name'=>'Completa',
            'abbreviation'=>'C',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        WorkingDay::create([
            'working_day_name'=>'Nocturna',
            'abbreviation'=>'N',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        WorkingDay::create([
            'working_day_name'=>'Mixta',
            'abbreviation'=>'M',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        WorkingDay::create([
            'working_day_name'=>'Fin de Semana',
            'abbreviation'=>'F',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
