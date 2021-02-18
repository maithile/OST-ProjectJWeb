<?php
namespace App;
use App\Level;
use App\Question;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    // 1-n
     protected $table = 'lessons';
     public $timestamp = false;
     protected $fillable = ['level_id', 'title','mp3_file', 'script', 'image', 'id'];


    public function questions(){
      
        return $this->hasMany(Question::class, 'lesson_id', 'id');
    }

    public function vocabulary(){
        return $this->hasMany(Vocabulary::class, 'lesson_id', 'id');
    }
 
    public function level(){
       return $this->belongsTo(Level::class, 'level_id', 'id');
   }

   public function users(){
       return $this->belongstoMany(User::class, 'manages','user_id', 'lesson_id');
   }

   public function vocabularies(){
    return $this->hasMany(Dictionary::class, 'lesson_id', 'id');
}

  public function comments(){
      return $this->hasMany(Comment::class, 'lesson_id', 'id');
  }

  public function category(){
    return $this->belongsto(Catefory::class, 'category_id');
}

}
