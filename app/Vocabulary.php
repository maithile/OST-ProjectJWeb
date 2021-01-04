<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    protected $table = 'vocabularies';
    protected $primaryKey = 'id';
    public $timestamp= 'false';


   public function lessons(){
    return $this->belongsto(Lesson::class);
  }
  

  public function dictionary(){
    return $this->belongsto(Dictionary::class, 'dictionary_id'); // each vocaburary thuoc ve dictionary


}
}