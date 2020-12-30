<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    protected $table = 'dictionaries';
    public $timestamp = 'fasle';


  public function vocabulary(){
       return $this->belongsto('App\Vocabulary', 'dictionary-id');
  }  


}
