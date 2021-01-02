<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // 1-n
protected $table = 'questions';
public $timestamp = false;


public function lessons(){
    return $this->belongsto('App\Lesson',  'id', 'lesson-id');
  }
}
