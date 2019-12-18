<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            //PrimaryKey
            $table->increments('id');
            
            //Information Table
            $table->text('account');
            $table->decimal('note_value');
            $table->decimal('percentage');

            //Filds RelationShips
            $table->integer('payroll_id')->unsigned();
            
            //Created and Updated at
            $table->timestamps();

            //RelationShips
            $table->foreign('payroll_id')->references('id')->on('payrolls');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
