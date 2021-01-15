<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dictionary;

class AdminDictionaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $dic = Dictionary::paginate(5);

         return view('admin.dictionLayout.index', compact('dic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dictionLayout.create');
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
    
            'vocabulary' => 'required',
            'meaning' => 'required'
        ]);
        // create 
        $newVocab = new Dictionary;
        $newVocab->vocabulary = $request->input('vocabulary');
        $newVocab->meaning = $request->input('meaning');
        $newVocab->save();
        return redirect('/admin/dictionary')->with('success', 'New vocabulary created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dic = Dictionary::find($id);
        return view('admin.dictionLayout.show', compact('dic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dic = Dictionary::find($id);
        return view('admin.dictionLayout.edit', compact('dic'));
       
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

        'vocabulary' => 'required',
        'meaning' => 'required'
    ]);

    $updateVocab = Dictionary::find($id);
    $updateVocab->vocabulary = $request->input('vocabulary');
    $updateVocab->meaning = $request->input('meaning');
    $updateVocab->save();
     return redirect('/admin/dictionary')->with('success', 'update Ok Sir!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $delVocab = Dictionary::find($id);

        if ($delVocab != null) {
            $delVocab->delete();
            return redirect('/admin/dictionary')->with('success', 'Delete Ok Sir!');
       }
    
       
    
    }
}
