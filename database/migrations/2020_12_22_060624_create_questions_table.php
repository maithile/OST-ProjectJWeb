<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('lesson-id')->unsigned();
            $table->foreign('lesson-id')->references('id')->on('lessons');
 
             
            $table->string('question-1');
            $table->string('option-1');
            $table->string('option-2');
            $table->string('option-3');
            $table->string('answer');
            $table->timestamps();
         });
 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
