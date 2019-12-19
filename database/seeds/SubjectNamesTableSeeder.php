<?php

use Illuminate\Database\Seeder;
//Use Models
use App\SubjectName;
use App\Institution;
//Use Library Faker (Data)
use Faker\Factory as Faker;
//Use Library Carbon (DateTimes)
use Carbon\Carbon;

class SubjectNamesTableSeeder extends Seeder
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
        SubjectName::truncate();
        Schema::enableForeignKeyConstraints();

        //Vars Faker
        $faker = Faker::create();

        //Id Arrays
        $institutions = Institution::all()->pluck('id')->toArray();

        //Functional Vars
        $names=['Inglés','Español','Matemáticas',
        'Álgebra','Informática','Biología',
        'Cálculo','Gestión Empresarial','Geografía',
        'Historía','Sociales','Filosofía',
        'Cátedra de Paz','Economía','Física'];

        for($i=0;$i<=14;$i++){ //Amont

            SubjectName::create([ //ORM Insert
                //Information Table
                'name_subject'=>$names[$i],
                'description'=>$faker->text($maxNbChars = $faker->numberBetween($min=200,$max=400)),

                //RelationShips
                'institution_id'=>$faker->randomElement($institutions),

                //TimeStamps
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
