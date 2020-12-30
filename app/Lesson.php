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
      
        return $this->hasMany(Question::class, 'lesson-id'); // trả về kết quả của bảng question. khoa phu trong bang quention
    }

    public function vocabulary(){
        return $this->hasMany('App\Vocabulary','lesson-id');
    }
 
    public function level(){
       return $this->belongsto('App\Level');
   }


   public function users(){
       return $this->belongstoMany('App\User', 'manages','user-id', 'lesson-id');
   }


}
