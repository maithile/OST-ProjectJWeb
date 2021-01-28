<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\Level;
use App\Question;
use App\Dictionary;
use App\Comment;

class CommentsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function __construct()
    {
        //return $this->middleware('auth');
    }
 
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    

   $data = [

      'lesson_id' =>$request->lesson_id,
      'body' =>$request->body,
      'name' =>$request->name
   ];

   Comment::create($data);

   return redirect()->route('show', $request->lesson_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
              
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
