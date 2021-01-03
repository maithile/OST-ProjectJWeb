<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    protected $table = 'dictionaries';
    public $timestamp = 'fasle';


  public function vocabularies(){
       return $this->belongsto(Vocabulary::class, 'dictionary_id', 'id');
  }  

  

}
