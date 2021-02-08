<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catefory extends Model
{
   
    protected $table = 'catefories';

public function pots(){
    return $this->hasMany(Catefory::class, 'category_id');
}
  
}
