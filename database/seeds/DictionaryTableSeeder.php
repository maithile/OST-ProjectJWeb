<?php

use Illuminate\Database\Seeder;
use App\Dictionary;

class DictionaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Dictionary::class, 10)->create();
    }
}
