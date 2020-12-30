<?php

use Illuminate\Database\Seeder;
use App\Question;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       factory(App\Question::class, 10)->create()->each(function($q){

          $q->lessons()->associate(factory(App\Lesson::class)->make());
       });



    }
}
