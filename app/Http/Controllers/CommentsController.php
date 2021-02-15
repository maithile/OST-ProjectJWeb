<?php
namespace App\Http\Controllers;
use App\Http\Requests\commentRequest;
use Illuminate\Http\Request;
use App\Lesson;
use App\Level;
use App\Question;
use App\Dictionary;
use App\Comment;
use App\ReplyComment;
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
    
    public function loadComment(Request $request)
    {
        $lesson_id  = $request->lesson_id;
        $comment = Comment::where([
            ['lesson_id', '=', $lesson_id],
            ['parrent_id', '=', '0'],
            ])->orderBy('created_at','desc')->limit(5)->get();
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
                    <button class="pull-left mt_btn_yellow" onclick="toggleReply('.$value->id.')">Reply</button>
                    </div>
                    </li>
                    </ol>  ';
      }

      return $output;
    }
    public function addComment(Request $request)
    {

       $this->validate($request, [
           'name' => 'required',
           'body' => 'required',
       ]);
        $lesson_id           = $request->lesson_id;
        $comment             = new Comment;
        $comment->name       = $request->input('name');
        $comment->body       = $request->input('body');
        $comment->parrent_id = '0';
        $comment->lesson_id  = $request->lesson_id;
        $comment->save();
        return back()->with('success', 'Comment'); 
    }
    public function replyComment(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'body' => 'required',
        ]);
        $lesson_id    = $request->lesson_id;
        $reply        = new Comment();
        $reply->body  = $request->get('body');
        $reply->name  = $request->get('name');
        $reply->parrent_id = $request->get('comment_id');
        $reply->lesson_id  = $request->lesson_id;
        $reply->save();
     return back()->with('success', 'Comment'); 
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
      $comment = new Comment();
      $comment->name = $request->name;
      $comment->body = $request->body;
      $comment->lesson_id = $request->lesson_id;
      $comment->save(); 
    return response()->json($comment);

    }

    // public function ReplyComment(Request $request){
     
    //     $data =[
    //         'comment_id' =>$request->comment_id,
    //         'body'       =>$request->body,
    //         'name'       =>$request->name
    //     ];
  
    //     ReplyComment::create($data);
    //     return redirect()->route('show', $request->comment_id);
  
    //  }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
      
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
