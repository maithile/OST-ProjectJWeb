<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    protected $table = 'vocabularies';
    public $timestamp= 'false';


   public function lessons(){
    return $this->belongsto(Lesson::class);
  }
  
  public function dictionary(){
    return $this->hasOne(Dictionary::class, 'dictionary_id', 'id');// 
  }
  
}
