<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    protected $table = 'dictionaries';
    public $timestamp = 'fasle';


  public function vocabularies(){
       return $this->belongsTo(Lesson::class, 'lesson_id', 'id');
  }  
  protected $casts = [
    'vocabulary' => 'array',    
    'meaning' => 'array',
  
  ];


}
