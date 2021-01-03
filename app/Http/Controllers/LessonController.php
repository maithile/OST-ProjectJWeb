<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Lesson;
use App\Level;
use App\Question;
use App\Dictionary;


class LessonController extends Controller
{

    public function index(){ 
        return view('welcome'); // ket noi controller voi view
    }

    public function basic(){

     $lesson = Lesson::where('level_id','=', 1)->paginate(1);   
    
    //$questions = $lesson->questions; // thu lay level name // xem lai cho này
       
        return view('pages.basic',  compact('lesson'));
    }



    public function inter(){

        $lesson = Lesson::where('level_id','=', 2)->paginate(1);  
        return view('pages.inter',  compact('lesson')); // ket noi controller voi view
    
    }

    public function advance(){
        $lesson = Lesson::where('level_id','=', 3)->paginate(1);
        return view('pages.advance',  compact('lesson')); // ket noi controller voi view
    }
 
    public function show($id){

        $lesson = Lesson::find($id)->first();

       // split sentences
         $script = $lesson->script;
         $Array = explode('.', trim($script));
        
         
 

        $questions = $lesson->questions; //  for question

        $vocabulary = $lesson->vocabulary;
          
        //return $dic = $vocabulary->with('Dictionary')->dictionary;

      
        return view('pages.show', compact('lesson', 'questions', 'vocabulary', 'Array')); 

         }


}