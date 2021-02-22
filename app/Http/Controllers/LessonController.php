<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Lesson;
use App\Level;
use App\Question;
use App\Answer;
use DB;
use App\Comment;
use App\Catefory;
use App\Result;
use PhpParser\Node\Stmt\Foreach_;

class LessonController extends Controller
{
    public function index(){ 

        return view('welcome'); // ket noi controller voi view
    }
    public function basic(){
      
        $category = Catefory::all();
        $lesson    = Lesson::where('level_id','=', 1)->withCount('comments')->paginate(5);   
        return view('pages.layouts.basic',  compact('lesson', 'category'));

    }
    public function inter(){
        $category = Catefory::all();
        $lesson    = Lesson::where('level_id','=', 2)->withCount('comments')->paginate(5); 
        return view('pages.layouts.inter',  compact('lesson', 'category')); 

    }
    public function advance(){
        $category = Catefory::all();
        $lesson    = Lesson::where('level_id','=', 3)->withCount('comments')->paginate(5); 
        return view('pages.layouts.advance',  compact('lesson', 'category'));
    }
    public function show($id){
        $category    = Catefory::with('pots')->get();
        $lesson      = Lesson::find($id); 
        $questions  = Question::where('lesson_id','=', $id)->with('answers')->get(); 
      
       
        
      
        $comment_count = Comment::where('lesson_id', '=', $id)->get();
        $comment = Comment::where([
                                    ['lesson_id', '=', $id],
                                    ['parrent_id', '=', '0'],
                                    ])->orderBy('created_at','desc')->limit(5)->get();
        $lesson_show = Lesson::where([
                                     ['id', 'not like', $id]
                                     ])->withCount('comments')->latest()->paginate(4);
        return view('pages.layoutDetail.show', compact('lesson', 'questions', 'lesson_show', 'comment', 'category', 'comment_count')); 
    }

    public function  displayCate($id){

        $category       = Catefory::all();
        $comment_count  = Comment::where('lesson_id', '=', $id)->get();
        $categoryDetail = Catefory::where('id', '=', $id)->get();
        $lesson         = Lesson::where('category_id','=', $id)->paginate(5);  
        return view('pages.layoutDetail.displayCate', compact('lesson', 'category', 'comment_count', 'categoryDetail')); 
    }

    public function search(Request $request){
        
        $this->validate($request, [
            'q' => 'required'
        ]);

        $category = Catefory::all();
        $search = $request->input('q');
        if($search != '')
        $lesson = Lesson::Where('title', 'LIKE', '%'. $search .'%')
                         ->orWhere('script', 'LIKE', '%'. $search .'%')
                         ->get();  
        
        if(count($lesson) > 0)
         return view ('pages.layoutDetail.search', compact('lesson', 'search', 'category'))->withDetails($lesson)->withQuery($search);
        else  
        return view ('pages.layoutDetail.search', compact('category', 'search', 'lesson'))->withMessage('No result! Try agian!'); 
    }

    // public function question(Request $request){


    //   $input = $request->input('Mit');
    //   $questions  = Question::where('lesson_id','=', $request->id)->with('answers')->get(); 
      
    //   return view('pages.layoutDetail.question', compact('input', 'questions'));
      
    // }
}

