<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Storage;
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

        $lesson = Lesson::orderBy('created_at','desc')->paginate(5);
        return view('admin.postLayout.index', compact('lesson'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $dictionary = Dictionary::pluck('vocabulary','id')->all();
        $lesson = Lesson::pluck('title','id')->all();
        $level = Level::pluck('level','id')->all();
        return view('admin.postLayout.create', compact('level', 'lesson', 'dictionary'));
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
            'script' => "required|array",
            "script.*"  => "required|string",
            'level_id' => 'required',
            'talker' => "required|array",
            "talker.*"  => "required|string"
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
      $post_lesson->talker = $request->input('talker');

      $post_lesson->image = $fileNameToStore;  
      $post_lesson->save();
      $post_lesson->id;


      // create question 
    //   $question = new Question;
    //   $question->lesson_id = $request->input('lesson_id');
    //   $question->question = $request->input('question');
    //   $question->correct_answer = $request->input('correct_answerId');
    //   $question->save();

   
   return redirect('/admin/post')->with('success', 'Create lesson success'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lesson = Lesson::find($id); 

        // $collection = collect($array1 );
        // $combined = $collection->combine($array2 );
        // $combined->all();

         $array1  = $lesson->talker; 
         $array2 = $lesson->script; 
         $Array = array_combine($array2, $array1);

        $questions= $lesson->questions;
        $vocabulary =$lesson->vocabulary;
        return view('admin.postLayout.show', compact('lesson', 'questions', 'vocabulary', 'Array'));  // tao sau
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

          $lesson = Lesson::find($id);
          $array1  = $lesson->talker; 
          $array2 = $lesson->script; 
          $Array = array_combine($array2, $array1);
          $level = $lesson->level;
        return view('admin.postLayout.edit', compact('lesson', 'level', 'Array'));
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
        $this->validate($request, [
             
            'title' => 'required',
            //'mp3_file' => 'required|mimes:application/octet-stream,audio/mpeg,mp3,wav',
             //'image' => 'required|mimes:jpeg,png,gif,jpg,svg|max:2048',
            'script' => 'required',
            'level_id' => 'required',
            'talker' => 'required'
            
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
    }
    //create Post Lesson
      $post_lesson = Lesson::find($id);
      $post_lesson->level_id = $request->input('level_id');
      $post_lesson->title = $request->input('title');

      if($request->hasFile('mp3_file')){
      $post_lesson->mp3_file = $fileMp3NameToStore;
    }
      $post_lesson->script = $request->input('script');
      $post_lesson->talker = $request->input('talker');
      
      if($request->hasFile('image')){
      $post_lesson->image = $fileNameToStore;  
    }
      $post_lesson->save();


      return redirect('/admin/post')->with('success', 'Create lesson success'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $lesson =Lesson::find($id);

        if(isset($lesson->image)){
            Storage::delete('public/images/' .$lesson->image);
        }

        if(isset($lesson->mp3_file)){
            Storage::delete('public/audioFile/'.$lesson->audioFile);
        }

        $lesson->delete();
        return redirect('/admin/post')->with('success', 'Ⅾeleted lesson success'); 
    }
}
