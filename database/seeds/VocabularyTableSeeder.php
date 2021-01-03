<?php

use Illuminate\Database\Seeder;

class VocabularyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Vocabulary::class, 10)->create()->each(function ($v) {
            $v->lessons()->associate(factory(App\Lesson::class)->make());
        });

        
        factory(App\Vocabulary::class, 10)->create()->each(function ($v2) {
            $v2->dictionary()->save(factory(App\Dictionary::class)->make());
        });
    }
}
