<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catefory extends Model
{
   
    protected $table = 'catefories';

public function pots(){
    return $this->hasMany(Lesson::class, 'category_id');
}
  
}
