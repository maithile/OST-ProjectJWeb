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
  'option_1',
  'option_2',
  'option_3',
  'answer'
];

public function lessons(){
    return $this->belongsTo(Lesson::class, 'lesson_id','id');
  }
}
