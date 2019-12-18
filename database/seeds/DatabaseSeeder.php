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
        $this->call(DocumentTypesTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(WorkingDaysTableSeeder::class);
        $this->call(DirectorsTableSeeder::class);
        $this->call(InstitutionsTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        //$this->call(SubjectsTableSeeder::class);
        $this->call(ClassroomsTableSeeder::class);
        $this->call(TeachersTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        //$this->call(SubjectsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        //$this->call(PayrollsTableSeeder::class);
        //$this->call(ScoresTableSeeder::class);
    }
}
