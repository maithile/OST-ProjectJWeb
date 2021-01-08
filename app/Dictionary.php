<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    protected $table = 'dictionaries';
    public $timestamp = 'fasle';


  public function vocabularies(){
       return $this->hasone(Dictionary::class, 'dictionary_id');
  }  




}
