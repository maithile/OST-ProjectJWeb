<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{

protected $fillable = ['lesson_id', 'body', 'name'];
    
public function lesson(){
    return $this->BelongsTo(Lesson::class, 'lesson_id', 'id');
}
public function user(){
    return $this->BelongsTo(User::class, 'user_id', 'id');
}
public function replyComment(){
    return $this->hasMany(ReplyComment::class, 'comment_id', 'id');
}


}
