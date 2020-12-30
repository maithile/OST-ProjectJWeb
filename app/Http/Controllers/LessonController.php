<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Lesson;
use App\Level;
use App\Question;
class LessonController extends Controller
{
    public function index(){ 
        return view('welcome'); // ket noi controller voi view
    }

    public function basic(){

        $lesson = Lesson::where('level-id','=', 1)->get();  

            //$questions = $lesson->questions; // thu lay level name // xem lai cho này
       
        return view('pages.basic',  compact('lesson'));
    }

    public function inter(){
        return view('pages.inter'); // ket noi controller voi view
    }

    public function advance(){

        $lesson = Lesson::where('level-id','=', 3)->get();  
        return view('pages.advance',  compact('lesson')); // ket noi controller voi view
    }
 
    public function show($id){

        $lesson = Lesson::find($id);
        return view('pages.detail', compact('lesson')); // ket noi controller voi view cho nay thoi
    }

}
