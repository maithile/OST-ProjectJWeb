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

            $lesson = Lesson::all(); 
            //$questions = $lesson->questions; // thu lay level name // xem lai cho này
       
            
        return view('pages.basic', compact('lesson')); //, //compact('questions')); // ket noi controller voi view
    }

    public function intermedicate(){
        return view('pages.intermedicate'); // ket noi controller voi view
    }

    public function advance(){
        return view('pages.advance'); // ket noi controller voi view
    }
}
