<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index(){

        return view('welcome'); // ket noi controller voi view
    }

    public function basic(){

        
     // do du lieu ra day
        return view('pages.basic'); // ket noi controller voi view
    }

    
    public function intermedicate(){
        return view('pages.intermedicate'); // ket noi controller voi view
    }

    public function advance(){
        return view('pages.advance'); // ket noi controller voi view
    }
}
