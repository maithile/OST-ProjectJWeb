<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    protected $table = 'dictionaries';
    public $timestamp = 'fasle';

  public function vocabularies(){
       return $this->hasOne(Vocabulary::class, 'dictionary_id', 'id');
  }  


}
