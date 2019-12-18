<?php

use Illuminate\Database\Seeder;
use App\Classroom;
use App\Institution;
use Faker\Factory as Faker;
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
        Schema::disableForeignKeyConstraints();
        Classroom::truncate();
        Schema::enableForeignKeyConstraints();

        $faker= Faker::create();

        $institutions = Institution::all()->pluck('id')->toArray();

        for($i=0;$i<=49;$i++){

            $num1 = $faker->numberBetween($min=1,$max=5);
            $num2 = $faker->numberBetween($min=0,$max=9);
    
            Classroom::create([
                'number_classroom'=>$num1.'0'.$num2,
                'institution_id'=>$faker->randomElement($institutions),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
