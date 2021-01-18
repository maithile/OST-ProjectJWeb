<?php

namespace App;
use App\Lesson;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // 1-n
protected $table = 'questions';
public $timestamp = false;

protected $fillable = [
  'lesson_id',
  'question',
  'choice1',
  'choice2',
  'choice3',
  'correct_answer'
];

public function lessons(){
    return $this->belongsTo(Lesson::class, 'lesson_id','id');
  }
}
