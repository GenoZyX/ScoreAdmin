<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //PrimaryKey
            $table->increments('id');
            
            //Information User
            $table->string('username')->unique();
            $table->string('institutional_email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_photo')->nullable();
            $table->rememberToken();

            //Information Table
            $table->string('names',45);
            $table->string('lastnames',45);
            $table->string('phone_number',20);
            $table->string('document_number',20);
            $table->string('address',100);
            $table->string('alternative_email')->unique()->nullable();
            
            //Filds RelationShips 
            $table->integer('document_type_id')->unsigned();
            $table->integer('institution_id')->unsigned();
            $table->integer('working_day_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->integer('gender_id')->unsigned();
            
            //Created and Updated at
            $table->timestamps();

            //RelationShips
            $table->foreign('document_type_id')->references('id')->on('document_types');
            $table->foreign('institution_id')->references('id')->on('institutions');
            $table->foreign('working_day_id')->references('id')->on('working_days');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('gender_id')->references('id')->on('genders');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
