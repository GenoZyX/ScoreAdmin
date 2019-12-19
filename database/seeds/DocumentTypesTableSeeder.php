<?php

use Illuminate\Database\Seeder;
//Use Models
use App\DocumentType;
//Use Library Faker (Data)
use Faker\Factory as Faker;
//Use Library Carbon (DateTimes)
use Carbon\Carbon;

class DocumentTypesTableSeeder extends Seeder
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
        DocumentType::truncate();
        Schema::enableForeignKeyConstraints();

        DocumentType::create([ //ORM Insert
            //Table Information
            'document_type_name'=> 'Tarjeta de Identidad',
            'abbreviation' => 'TI',
            
            //TimeStamps
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DocumentType::create([ //ORM Insert
            //Table Information
            'document_type_name'=> 'Cédula de Ciudadanía',
            'abbreviation' => 'CC',

            //TimeStamps
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DocumentType::create([ //ORM Insert
            //Table Information
            'document_type_name'=> 'Documento Nacional de Identidad',
            'abbreviation' => 'DNI',

            //TimeStamps
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DocumentType::create([ //ORM Insert
            //Table Information
            'document_type_name'=> 'Cédula de Extranjería',
            'abbreviation' => 'CE',

            //TimeStamps
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DocumentType::create([ //ORM Insert
            //Table Information
            'document_type_name'=> 'Registro Civil',
            'abbreviation' => 'RC',

            //TimeStamps
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
