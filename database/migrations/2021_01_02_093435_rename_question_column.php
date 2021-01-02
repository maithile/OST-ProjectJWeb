<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameQuestionColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions', function(Blueprint $table) {
            $table->renameColumn("`question-1`", "question_1");
            $table->renameColumn("`option-1`", "option_1");
            $table->renameColumn("`option-2`", "option_2");
            $table->renameColumn("`option-3`", "option_3");
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function(Blueprint $table) {
            $table->renameColumn("question_1", "`question-1`");
            $table->renameColumn("option_1", "`option-1`");
            $table->renameColumn("option_2", "`option-2`");
            $table->renameColumn("option_3", "`option-3`");
        });
        
    }
}
