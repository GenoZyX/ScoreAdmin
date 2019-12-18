<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            //PrimaryKey
            $table->increments('id');
            
            //Information Table
            $table->string('nit',20)->unique();
            $table->string('institution_name',100);
            $table->string('address',100);
            $table->string('phone_number',20);
            $table->string('institutional_email',100)->unique();
            
            //Filds RelationShips
            $table->integer('director_id')->unsigned();
            $table->integer('city_id')->unsigned();
            
            //Created and Updated at
            $table->timestamps();

            //RelationShips
            $table->foreign('director_id')->references('id')->on('directors');
            $table->foreign('city_id')->references('id')->on('cities');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}
