<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    protected $table = 'answers';
    public $timestamp = 'fasle'; 

    public function question(){
        return $this->belongsTo(Question::class, 'question_id', 'id');
      }
  

}
