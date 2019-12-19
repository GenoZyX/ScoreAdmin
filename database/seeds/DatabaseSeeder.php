<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Depency Order, Strong to Weak Tables
        $this->call(DocumentTypesTableSeeder::class); //ok
        $this->call(GendersTableSeeder::class); //ok
        $this->call(CitiesTableSeeder::class); //ok
        $this->call(WorkingDaysTableSeeder::class); //ok

        $this->call(DirectorsTableSeeder::class); //ok
        $this->call(InstitutionsTableSeeder::class); //ok
        $this->call(UsersTableSeeder::class); //ok
        
        $this->call(SubjectNamesTableSeeder::class); //ok
        $this->call(ClassroomsTableSeeder::class); //ok
        $this->call(TeachersTableSeeder::class); //ok
        $this->call(GradesTableSeeder::class); //ok
        $this->call(SubjectsTableSeeder::class); //ok
        $this->call(StudentsTableSeeder::class); //ok

        $this->call(PayrollsTableSeeder::class); //ok
        $this->call(ScoresTableSeeder::class); //ok
    }
}
