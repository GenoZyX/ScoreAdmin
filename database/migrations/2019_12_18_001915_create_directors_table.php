<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directors', function (Blueprint $table) {
            //PrimaryKey
            $table->increments('id');

            //Information Table
            $table->string('director_names',45);
            $table->string('director_lastnames',45);
            $table->string('institutional_email',100)->unique();
            $table->string('alternative_email',100)->unique()->nullable();
            $table->string('address',100);
            $table->string('document_number',20);
            $table->string('phone_number',20);

            //Filds RelationShips
            $table->integer('working_day_id')->unsigned();
            $table->integer('document_type_id')->unsigned();
            $table->integer('gender_id')->unsigned();
            $table->integer('city_id')->unsigned();
            
            //Created and Updated at
            $table->timestamps();

            //RelationShips
            $table->foreign('document_type_id')->references('id')->on('document_types');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('working_day_id')->references('id')->on('working_days');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directors');
    }
}
