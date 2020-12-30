<?php

use App\User;
use App\Lesson;
use App\Level;
use App\Manage;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class); 
        $this->call(LevelTableSeeder::class);
        $this->call(LessonTableSeeder::class);
        $this->call(QuestionTableSeeder::class);
        $this->call(DictionaryTableSeeder::class);
        $this->call(VocaburalyTableSeeder::class);
        $this->call(ManageTableSeeder::class);
    }
}


