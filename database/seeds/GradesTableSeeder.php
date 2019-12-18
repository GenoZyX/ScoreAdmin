<?php

use Illuminate\Database\Seeder;
use App\Grade;
use App\Teacher;
use App\Institution;
use App\WorkingDay;
use App\Classroom;
use Faker\Factory as Faker;
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
        Schema::disableForeignKeyConstraints();
        Grade::truncate();
        Schema::enableForeignKeyConstraints();

        $faker = Faker::create();
        $fakerS = Faker::create('es_ES');

        $name=["Parvulos","Prejardín","Jardín","Transición","Primero","Segundo","Tercero","Cuarto","Quinto","Sexto","Séptimo","Octavo","Noveno","Décimo","Once"];
        $sub=["A","B","C","D"];

        $teachers= Teacher::all()->pluck('id')->toArray();
        $institutions = Institution::all()->pluck('id')->toArray();
        $workings = WorkingDay::all()->pluck('id')->toArray();
        $classrooms = Classroom::all()->pluck('id')->toArray();

        for($i=0;$i<=199;$i++){
            Grade::create([
                'name_grade'=>$faker->randomElement($name),
                'sub_index'=>$faker->randomElement($sub),
                'teacher_id'=>$faker->randomElement($teachers),
                'institution_id'=>$faker->randomElement($institutions),
                'working_day_id'=>$faker->randomElement($workings),
                'classroom_id'=>$faker->randomElement($classrooms),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]);
        }

    }
}
