<?php

namespace App;
use App\Lesson;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // 1-n
protected $table = 'questions';
public $timestamp = false;

public function lessons(){
    return $this->belongsTo(Lesson::class, 'lesson_id','id');
  }

}
