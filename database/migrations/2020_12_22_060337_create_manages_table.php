<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('lesson-id')->unsigned();
            $table->foreign('lesson-id')->references('id')->on('lessons');
 
            $table->bigInteger('user-id')->unsigned();
            $table->foreign('user-id')->references('id')->on('users');
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
        Schema::dropIfExists('manages');
    }
}
