<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('level_id')->unsigned();
            $table->foreign('level_id')->references('id')->on('levels');

            // $table->bigInteger('category_id')->unsigned();
            // $table->foreign('category_id')->references('id')->on('catefories')->onDelete('cascade');
            
            $table->string('title');
            $table->string('mp3_file');
            $table->string('image');
            $table->text('talker');
            $table->text('script');
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
        Schema::dropIfExists('lessons');
    }
}