<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Lesson;
use App\Level;
use App\Question;
use App\Dictionary;
use App\Comment;
use App\ReplyComment;

class LessonController extends Controller
{
    public function index(){ 
    
        return view('welcome'); // ket noi controller voi view
    }

    public function basic(){
        $lesson = Lesson::where('level_id','=', 1)->paginate(5);   
        return view('pages.basic',  compact('lesson'));

    }
    public function inter(){

        $lesson = Lesson::where('level_id','=', 2)->paginate(5);  
        return view('pages.inter',  compact('lesson')); // ket noi controller voi view

    }
    public function advance(){
        $lesson = Lesson::where('level_id','=', 3)->paginate(5);
        return view('pages.advance',  compact('lesson')); // ket noi controller voi view
    }
    public function show($id){
        $comment = Comment::where('lesson_id','=', $id)->get();
        $lesson_show = Lesson::where('level_id','=', 1)->latest()->paginate(4);
        $lesson = Lesson::find($id); 
        $array1  = $lesson->talker; 
        $array2 = $lesson->script; 
        $Array = array_combine($array2, $array1);
        $vocabulary = $lesson->vocabulary;
        $questions = $lesson->questions; 
        return view('pages.show', compact('lesson', 'questions', 'vocabulary', 'Array', 'lesson_show', 'comment')); 
    }

    public function answerSubmit(Request $request, $id)
         { 
        $inputed = $request->input('answer') ;
        $lesson = Lesson::find($id); 
        $questions = $lesson->questions->pluck('correct_answerId'); 
        return view('pages.show-anser', compact('lesson', 'questions','inputed')); 
    }


}