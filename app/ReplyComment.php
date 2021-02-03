<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReplyComment extends Model
{

    protected $fillable = ['comment_id', 'body', 'name'];

  public function comment(){
    return $this->belongsTo(Comment::class, 'comment_id', 'id');
  }




}
