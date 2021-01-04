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

     $lesson = Lesson::where('level_id','=', 1)->paginate(3);   
    
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

        $lesson = Lesson::find($id); 

       //  split sentences

         $script = $lesson->script; 
   
       // split roler  
         $separator1 = '/\{([A-z\s]*)\}/';     
         preg_match_all($separator1, $script, $match1);
         $roler = $match1[1];
      
       // split sentences

        $separator2 = '/\}([A-z\s.?!]*)\&/';  

        preg_match_all($separator2, $script, $match2);
        $talk = $match2[1];
        
        $Array = array_combine($roler, $talk);

        
         $questions = $lesson->questions; 

         $vocabulary = $lesson->vocabulary; // lay ra duoc bang dictionnary = 
        

         
      
        return view('pages.show', compact('lesson', 'questions', 'vocabulary', 'Array')); 

         }


}