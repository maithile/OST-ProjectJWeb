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
        
        $level = Level::pluck('level','id' )->all();
        return view('admin.questionLayout.create', compact('level'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // for post
        $this->validate($request, [
             
            'title' => 'required',
            'mp3_file' => 'required|mimes:application/octet-stream,audio/mpeg,mp3,wav',
            'image' => 'required|mimes:jpeg,png,gif,jpg,svg|max:2048',
            'script' => 'required',
            'level_id' => 'required'
            
        ]);

    //upload image file 

    if($request->hasFile('image')){
        //get file name with extension
       $filenameWithExt = $request->file('image')->getClientOriginalName(); 
        //Get just name
       $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
       // get extension 
       $extension = $request->file('image')->getClientOriginalExtension();
       //file name to store
       $fileNameToStore = $filename.'_'.time().'.'.$extension;
       //store file
       $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
    
    }else{
        $fileNameToStore = 'noimage.jpg';
    }
 
    // upload mp3 file
    if($request->hasFile('mp3_file')){
        //get mp3 file name with extension 

        $filename_mp3WithExt = $request->file('mp3_file')->getClientOriginalName();
        // get just name
        $filename_mp3 = pathinfo($filename_mp3WithExt, PATHINFO_FILENAME);
        //get extension
        $extension_mp3 = $request->file('mp3_file')->getClientOriginalExtension();
        //file mp3 name to store
        $fileMp3NameToStore = $filename_mp3 .'_'.time().'.'.$extension_mp3;
        //path to store
        $path_mp3 = $request->file('mp3_file')->storeAs('public/audioFile', $fileMp3NameToStore);

    }else{
        $$fileMp3NameToStore  = 'nofile.jpg'; 
 }
    //create Post Lesson
      $post_lesson = new Lesson;
      $post_lesson->level_id = $request->input('level_id');
      $post_lesson->title = $request->input('title');
      $post_lesson->mp3_file = $fileMp3NameToStore;
      $post_lesson->script = $request->input('script');

      $post_lesson->image = $fileNameToStore;  
      $post_lesson->save();

   return redirect('/admin/post/create')->with('success', 'Create lesson success'); 

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
