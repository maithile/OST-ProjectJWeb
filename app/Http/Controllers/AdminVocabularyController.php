<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\Dictionary;
use App\Vocabulary;

class AdminVocabularyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $lesson = Lesson::pluck('title','id')->all();
      //$dictionary = Dictionary::all();
       $dictionary = Dictionary::pluck('vocabulary','id')->all();

        return view('admin.vocabLayout.create', compact('lesson', 'dictionary'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request, [

             'lesson_id' => 'required',
             'dictionary_id' => 'required'

        ]);

      // creeate vocabulary
         $vocab = new Vocabulary;
         $vocab->lesson_id = $request->input('lesson_id');
         $vocab->dictionary_id = $request->input('dictionary_id');
         $vocab->save();

         return redirect('/admin/post/create')->with('success', 'Create vocabulary success'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
