<?php

namespace App;
use App\Level;
use App\Question;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    // 1-n
    //protected $table = 'lessons'; // sd bang vi ten bang khac
    public $timestamp = false;


    public function questions(){
      
        return $this->hasMany(Question::class, 'lesson-id'); // trả về kết quả của bảng question.
    }

    public function vocabulary(){
        return $this->hasMany('App\Vocabulary','foreign_key');

    }
 
    public function level(){
       return $this->belongsto('App\Level', 'foreign_key');
   }



   public function users(){
       return $this->belongstoMany('App\User', 'users_id', 'lessons_id');
   }

}
