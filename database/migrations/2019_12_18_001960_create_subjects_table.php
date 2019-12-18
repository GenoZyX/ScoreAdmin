<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            //PrimaryKey
            $table->increments('id');
            
            //Filds RelationShips
            $table->integer('subject_name_id')->unsigned();
            $table->integer('teacher_id')->unsigned();
            $table->integer('grade_id')->unsigned();
            
            //Created and Updated at
            $table->timestamps();

            //RelationShips
            $table->foreign('subject_name_id')->references('id')->on('subject_names');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('grade_id')->references('id')->on('grades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
