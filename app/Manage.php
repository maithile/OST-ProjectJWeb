<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manage extends Model
{
    protected $table = 'manages';
    protected $primaryKey = 'id';

    public function users(){
        return $this->belongstoMany(User::class, 'manages','user_id', 'lesson_id');
    }


    
   public function lesson(){
    return $this->belongstoMany(Lesson::class, 'manages', 'user_id', 'lesson_id'); // tra ve lessons
}



 
}
