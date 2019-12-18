<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            //PrimaryKey
            $table->increments('id');
            
            //Information Table
            $table->string('name_grade',100);
            $table->string('sub_index',10)->nullable();


            //Filds RelationShips
            $table->integer('teacher_id')->unsigned();
            $table->integer('institution_id')->unsigned();
            $table->integer('working_day_id')->unsigned();
            $table->integer('classroom_id')->unsigned();
            
            //Created and Updated at
            $table->timestamps();

            //RelationShips
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('institution_id')->references('id')->on('institutions');
            $table->foreign('working_day_id')->references('id')->on('working_days');
            $table->foreign('classroom_id')->references('id')->on('classrooms');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
