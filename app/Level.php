<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';
    public $timestamp = 'false';

  public function lesson(){
     return $this->hasMany('App\Lesson', 'foreign key'); // co nhieu post
  }
     
}
