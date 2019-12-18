<?php

use Illuminate\Database\Seeder;
use App\City;
use Faker\Factory as Faker;
use Carbon\Carbon;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        City::truncate();
        Schema::enableForeignKeyConstraints();

        $faker=Faker::create();

        for($i=0;$i<=199;$i++){ 
            City::create([
                'city_name'=>$faker->city,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
        }
    }
}
