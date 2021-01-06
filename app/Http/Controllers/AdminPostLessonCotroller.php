<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\File;
use App\Lesson;
use App\Level;
use App\Question;
use App\Dictionary;
use App\Vocabulary;

class AdminPostLessonCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout.indexAdmin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $level =Level::pluck('level','id' )->all();
        return view('admin.postLayout.create', compact('level'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request, [
             
            'title' => 'required',
           // 'mp3_file' => 'required|mimes:application/octet-stream,audio/mpeg,mp3,wav',
            //'image' => 'required|mimes:jpeg,png,gif,jpg,svg|max:2048',
            'script' => 'required',
           'level_id' => 'required'

        ]);
     
    //create Post Lesson

      $post_lesson = new Lesson;
      $post_lesson->level_id = $request->input('level_id');
      $post_lesson->title = $request->input('title');
      //$post_lesson->mp3_file = $request->input('mp3_file');
      $post_lesson->script = $request->input('script');
      //$post_lesson->image = $request->input('image');  gioi qua co be co gang len
      
      
       $post_lesson->save();

return 1;
   

      
        return 2;


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return view('admin.postLayout.show');  // tao sau


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.postLayout.edit');
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
       //  return view('admin.postLayout.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
