<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';
    protected $fillable = [
        'question_id','answer','is_collect'
        ];

    public function questions(){
        return $this->belongsTo(Question::class, 'question_id', 'id');
    }

    public function storeAnswer($data,$question){

        foreach($data['option'] as $key => $option){
    
        $is_correct = 0;
    
        if($key == $data['correct_answer']){
    
        $is_correct = 1;
    
        }
        $answer = Answer::create([

        'question_id'=>$question->id,
        'answer'=>$option,
        'is_collect'=>$is_correct
    
        ]);
    

        }
    }
}
