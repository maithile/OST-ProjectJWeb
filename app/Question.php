<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    // 1-n
protected $table = 'questions';
public $timestamp = false;
protected $fillable = ['lesson_id', 'question'];


public function lessons(){
    return $this->belongsTo(Lesson::class, 'lesson_id','id');
  }

public function answers(){
  return $this->hasMany(Answer::class, 'question_id');
}

public function storeQuestion($data){
    $data['lesson_id'] = $data['lesson_id'];
    return Question::create($data);
}

}
