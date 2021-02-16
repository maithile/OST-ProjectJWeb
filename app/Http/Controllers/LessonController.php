<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Lesson;
use App\Level;
use App\Question;
use App\Dictionary;
use App\Comment;
use App\Catefory;
class LessonController extends Controller
{
    public function index(){ 

        return view('welcome'); // ket noi controller voi view
    }
    public function basic(){
        
        $lesson    = Lesson::where('level_id','=', 1)->withCount('comments')->paginate(5);   
        return view('pages.layouts.basic',  compact('lesson'));

    }
    public function inter(){
        $lesson    = Lesson::where('level_id','=', 2)->withCount('comments')->paginate(5); 
        return view('pages.layouts.inter',  compact('lesson')); 

    }
    public function advance(){
        $lesson    = Lesson::where('level_id','=', 3)->withCount('comments')->paginate(5); 
        return view('pages.layouts.advance',  compact('lesson'));
    }
    public function show($id){
        $category    = Catefory::with('pots')->get();
        $lesson      = Lesson::find($id); 
        $array1      = $lesson->talker; 
        $array2      = $lesson->script; 
        $Array       = array_combine($array2, $array1);
        $vocabulary  = $lesson->vocabulary;
        $questions   = $lesson->questions; 
        $comment_count = Comment::where('lesson_id', '=', $id)->get();
        $comment = Comment::where([
                                    ['lesson_id', '=', $id],
                                    ['parrent_id', '=', '0'],
                                    ])->orderBy('created_at','desc')->limit(5)->get();
        $lesson_show = Lesson::where([
                                     ['id', 'not like', $id]
                                     ])->withCount('comments')->latest()->paginate(4);
        return view('pages.layoutDetail.show', compact('lesson', 'questions', 'vocabulary', 'Array', 'lesson_show', 'comment', 'category', 'comment_count')); 
    }

    public function  displayCate($id){
        $comment_count = Comment::where('lesson_id', '=', $id)->get();
        $category       = Catefory::where('id', '=', $id)->get();
        $lesson         = Lesson::where('category_id','=', $id)->paginate(5);  
        return view('pages.displayCate', compact('lesson', 'category', 'comment_count')); 
    }
    public function search(Request $request ){
       
        $search = $request->input('q');
        if($search != '')
        $lesson = Lesson::Where('title', 'LIKE', '%'. $search .'%')
                         ->orWhere('script', 'LIKE', '%'. $search .'%')
                         ->get();  
        if(count($lesson) > 0)
         return view ('pages.search', compact('lesson', 'search'))->withDetails($lesson)->withQuery($search);
        else  
         return view ('pages.search')->withMessage('No result! Try agian!'); 

    }
}

