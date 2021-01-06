<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';
    protected $primaryKey = 'id';
    public $timestamp = 'false';

    
  public function lesson(){
     return $this->hasMany(Lesson::class, 'level_id', 'id'); // co nhieu post tra ve khoa phu trong bang lesson
  }
     
}
