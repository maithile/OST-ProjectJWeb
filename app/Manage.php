<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manage extends Model
{
    protected $table = 'manages';


    public function users(){
        return $this->belongstoMany('App\User', 'manages','user-id', 'lesson-id');
    }


    
   public function lesson(){
    return $this->belongstoMany('App\Lesson', 'manages', 'user-id', 'lesson-id'); // tra ve lessons
}



 
}
