<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payrolls', function (Blueprint $table) {
            //PrimaryKey
            $table->increments('id');
            
            //Information Table
            $table->decimal('final_note')->nullable();
            $table->string('novelty',20)->nullable();
            $table->text('observation')->nullable();
            //Filds RelationShips
            $table->integer('student_id')->unsigned();
            $table->integer('subject_id')->unsigned();

            //Created and Updated at
            $table->timestamps();

            //RelationShips
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('subject_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payrolls');
    }
}
