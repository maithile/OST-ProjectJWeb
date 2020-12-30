<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    protected $table = 'vocabularies';
    public $timestamp= 'false';


   public function lessons(){
    return $this->belongsto('App\Lesson');
  }
  
  public function dictionary(){
    return $this->hasOne('App\Dictionary');
  }


}
