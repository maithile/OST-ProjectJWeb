<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    protected $table = 'vocabularies';
    public $timestamp= 'false';


   public function lessons(){
    return $this->belongsto('App\Lesson', 'foreign_key');
  }
  
  public function dictionary(){
    return $this->hasOne('App\Dictionary', 'foreign_key');
  }


}
