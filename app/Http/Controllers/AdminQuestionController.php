<?php
namespace App\Http\Controllers;
use App\Lesson;
use App\Question;
use Illuminate\Http\Request;

class AdminQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     $question = Question::paginate(5);
     return view('admin.questionLayout.index', compact('question'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        $lesson = Lesson::pluck('title', 'id')->all();
        return view('admin.questionLayout.create', compact('lesson'));
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
    
            'lesson_id' => 'required',
            'question' => 'required',
            'option_1' => 'required',
            'option_2' => 'required',
            'option_3'=> 'required',
            'answer' => 'required'
        ]);

        // create question 
        $question = new Question;
        $question->lesson_id = $request->input('lesson_id');
        $question->question = $request->input('question');
        $question->option_1 = $request->input('option_1');
        $question->option_2 = $request->input('option_2');
        $question->option_3 = $request->input('option_3');
        $question->answer = $request->input('answer');
        json_encode($question->save());
        return redirect('/admin/question')->with('success', 'Created Ok Sir :))' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $question = Question::find($id);
       $lesson_title = $question->lessons;  // for lesson_id
    return view('admin.questionlayout.show', compact('question', 'lesson_title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::find($id);
        $lesson_title = $question->lessons; 
        return view('admin.questionlayout.edit', compact('question', 'lesson_title'));
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
    
            'lesson_id' => 'required',
            'question'  => 'required',
            'option_1'  => 'required',
            'option_2'  => 'required',
            'option_3'  => 'required',
            'answer'    => 'required'
        ]);

        // create question 
        $question = Question::find($id);
        $question->lesson_id = $request->input('lesson_id');
        $question->question = $request->input('question');
        $question->option_1 = $request->input('option_1');
        $question->option_2 = $request->input('option_2');
        $question->option_3 = $request->input('option_3');
        $question->answer = $request->input('answer');
        $question->save();

        return redirect('/admin/question')->with('success', 'Update Ok Baby :))' );

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $question = Question::find($id);
        $question->delete();
        return redirect('/admin/question')->with('success', 'Delete Ok Sir!');
    }
}
