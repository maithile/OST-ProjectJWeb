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
    protected  $primaryKey = 'id';

    public function questions(){
      
        return $this->hasMany(Question::class, 'lesson_id', 'id');// trả về kết quả của bảng question. khoa phu trong bang quention
    }

    public function vocabulary(){
        return $this->hasMany(Vocabulary::class, 'lesson_id', 'id');
    }
 
    public function level(){
       return $this->belongsto(Level::class);
   }


   public function users(){
       return $this->belongstoMany(User::class, 'manages','user_id', 'lesson_id');
   }


}
