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
use App\ReplyComment;
use App\Catefory;

class LessonController extends Controller
{
    public function index(){ 
    
        return view('welcome'); // ket noi controller voi view
    }

    public function basic(){
        $lesson    = Lesson::where('level_id','=', 1)->paginate(5);   
        return view('pages.basicLayout.basic',  compact('lesson'));

    }
    public function inter(){
        $lesson    = Lesson::where('level_id','=', 2)->paginate(5);  
        return view('pages.interLayout.inter',  compact('lesson')); 

    }
    public function advance(){
        $lesson    = Lesson::where('level_id','=', 3)->paginate(5);
        return view('pages.advanceLayout.advance',  compact('lesson'));
    }
    public function showBasic($id){
        $category    = Catefory::with('pots')->get();
        $comment     = Comment::where('lesson_id','=', $id)->get(); 
        $lesson      = Lesson::find($id); 
        $array1      = $lesson->talker; 
        $array2      = $lesson->script; 
        $Array       = array_combine($array2, $array1);
        $vocabulary  = $lesson->vocabulary;
        $questions   = $lesson->questions; 
        $lesson_show = Lesson::where([
                                     ['id', 'not like', $id],
                                     ['level_id', '=', '1'],
                                     ])->latest()->paginate(4);

        return view('pages.basicLayout.show', compact('lesson', 'questions', 'vocabulary', 'Array', 'lesson_show', 'comment', 'category')); 
    }


       public function showInter($id){
        $category    = Catefory::with('pots')->get();
        $comment     = Comment::where('lesson_id','=', $id)->get(); 
        $lesson      = Lesson::find($id); 
        $array1      = $lesson->talker; 
        $array2      = $lesson->script; 
        $Array       = array_combine($array2, $array1);
        $vocabulary  = $lesson->vocabulary;
        $questions   = $lesson->questions; 
        $lesson_show = Lesson::where([
                                     ['id', 'not like', $id],
                                     ['level_id', '=', '2'],
                                     ])->latest()->paginate(4);

        return view('pages.interLayout.show', compact('lesson', 'questions', 'vocabulary', 'Array', 'lesson_show', 'comment', 'category')); 
    }


    public function showAdvance($id){
        $category    = Catefory::with('pots')->get();
        $comment     = Comment::where('lesson_id','=', $id)->get(); 
        $lesson      = Lesson::find($id); 
        $array1      = $lesson->talker; 
        $array2      = $lesson->script; 
        $Array       = array_combine($array2, $array1);
        $vocabulary  = $lesson->vocabulary;
        $questions   = $lesson->questions; 
        $lesson_show = Lesson::where([
                                     ['id', 'not like', $id],
                                     ['level_id', '=', '3'],
                                     ])->latest()->paginate(4);

        return view('pages.advanceLayout.show', compact('lesson', 'questions', 'vocabulary', 'Array', 'lesson_show', 'comment', 'category')); 
    }
    public function  displayCate($id){

        $category    = Catefory::where('id', '=', $id)->get();
        $lesson      = Lesson::where('category_id','=', $id)->paginate(5);  
        return view('pages.displayCate', compact('lesson', 'category')); 
    }

    public function answerSubmit(Request $request, $id)
         { 
        $inputed    = $request->input('answer') ;
        $lesson     = Lesson::find($id); 
        $questions  = $lesson->questions->pluck('correct_answerId'); 
        return view('pages.show-anser', compact('lesson', 'questions','inputed')); 
    }
    public function loadComment(Request $request)
    {
        $lesson_id  = $request->lesson_id;
        $comment    = Comment::where('lesson_id', $lesson_id)->get();
        $output     = '';   
        foreach($comment as $key => $value){
        $output .= '<ol class="review-lists">
                    <li class="comment">
                    <div class="activity_rounded"> 
                    <img src="/storage/Iconimage/about.png" alt="image"> </div>     
                    <div class="comment-body">
                    <h4 class="text-left">'.$value->name.'&nbsp;&nbsp;
                     <small class="date-posted pull-right">'.$value->created_at.'</small>
                    </h4>
                    <p>'.$value->body.'</p>
                    <a href="#" class="pull-left">Reply</a>
                   <form method="post" action="">
                    <div class="form-group">
                        <input type="text" name="comment" class="form-control" />
                        <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Reply" />
                    </div>
                </form>
                    <div class="clearfix"></div>
                    </div>
                    </li>
                    </ol>  ';
      }

      return $output;
    }

    public function addComment(Request $request)
    {
        $lesson_id           = $request->lesson_id;
        $comment             = new Comment();
        $comment->name       = $request->name;
        $comment->body       = $request->body;
        $comment->parrent_id = '0';
        $comment->lesson_id  = $request->lesson_id;
        $comment->save();
        return back();
    }

   







}