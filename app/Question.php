<?php

namespace App;
use App\Lesson;
use App\answer;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // 1-n
protected $table = 'questions';
public $timestamp = false;

public function lessons(){
    return $this->belongsTo(Lesson::class, 'lesson_id','id');
  }

  public function answer() {
    return $this->hasMany(answer::class,'question_id','id' );
  }    

  
}
