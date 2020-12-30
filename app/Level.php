<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';
    public $timestamp = 'false';

  public function lesson(){
     return $this->hasMany('App\Lesson', 'level-id'); // co nhieu post tra ve khoa phu trong bang lesson
  }
     
}
