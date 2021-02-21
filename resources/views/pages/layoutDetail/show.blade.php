@extends('layout.index')
@section('content')
@if(session('success'))
 <h1>{{session('success')}}</h1>
@endif
<section id="mt_services" class="light-bg services-section section-inner">
    <div class="container">
    <div class="course-detail">
    <div class="row">   
    <div class="col-md-8 col-sm-12">
        <div class="post_title">
        <h2>{{$lesson->title}}</h2>
        </div>
    <div class="post_img">
        <img src="/storage/images/{{$lesson->image}}"> 
    </div>
    <br>
    <div class="audio" >
        <audio controls >
            <source src="/storage/audioFile/{{$lesson->mp3_file}}" type="audio/mpeg">
        </audio>    
    </div>
    <div class="share pull-right " >
        <div class="fb-share-button" data-href="http://127.0.0.1:8000/home" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F127.0.0.1%3A8000%2Fhome&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
    </div>
    <div class="course-tabs">
    <div class="nav-content-c">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">質問</a></li>
    <li><a data-toggle="tab" href="#menu2">脚本</a></li>
    </ul>
    <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <div class="post_body">
    <div class="over-view">      
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    {{-- @foreach ($questions as $value)
    <div><h2> {{$value->question}} </h2></div>
    <input type="radio" id="male" name="answer" value="1"> {{ $value->answer1}} <br><br>
    <input type="radio" id="male" name="answer" value="2"> {{ $value->answer2}} <br><br>
    <input type="radio" id="male" name="answer" value="3"> {{ $value->answer3}} <br><br><br>
    @endforeach  
    <input class="btn btn-primary" id="check-btn" type="submit" name ="submit" value="Submit">
    <input type="hidden" id="correct-ans" name ="correct-ans" value="{{ $value->correct_answerId}}"> --}}
</div>
</div>
</div>
  
    <div id="menu2" class="tab-pane fade">
        {!! $lesson->script !!}
    </div>
        
        </div>
         </div>
    {{-- comment--}}
        </div>
       </div>
         {{-- side bar--}}
            <aside class="col-md-4 col-sm-12">
            <div class="widget">
                <form action="/search" method="POST" role="search">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" name="q"
                            placeholder="検索..."> <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <span> 検索</span>
                            </button>
                        </span>
                    </div>
                </form>
             
           {{--End Search--}}
            </div>   
            {{-- Categori--}}
            <div class="widget widget_categories">
            <h3 class="blog_heading_border">テーマ</h3>
            <ul>
            @foreach ($category as $value)
            <li>
            <a href="/displayCate/{{$value->id}}">{{$value->name}}</a>
            <span class="categoryCount">(0 {{ $value->pots->count()}})</span>
            </li>
            @endforeach
            </ul>
            </div>
             {{-- End   Categori--}}
            <div class="widget widget_recent_entries">
            <h3 class="blog_heading_border"> 最近のレッスン</h3>
            <ul>
                @foreach ($lesson_show as $value)  
            <li>
            <img src="/storage/images/{{$value->image}}" alt="image" height="60%" width="22%">
            <h4>
            <a href="/show/{{$value->id}}">{{$value->title}}</a>
            </h4>
            <span>{{$lesson->level->level}}</span>   
            <p>{{$value->updated_at}} |
            <span>{{$value->comments_count}} Comments</span>
            </p>
            </li>
            @endforeach
            </ul>
            </div>
        
            </aside>
            {{-- side bar end --}}
            </div>
            </div>
            <br>
            {{-- lesson related to categories(Example Travel)--}}
            <div class="related-item">
            <div class="row inner-detail-p">
                   <div id="review-c">
                    <div class="review-wrap">
                        <div class="col-sm-9">
                            <div class="leave_review">
                  
             {{--  add comment  --}}
                 <div class="leave_review">
                  <h3 class="blog_heading_border"> コメント </h3>
                  {!! Form::open(['action' => ['CommentsController@addComment'], 'method' => 'POST', 'id' => 'postForm' ]) !!}
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                      <input type="hidden" id ="lesson_id" name="lesson_id" value="{{$lesson->id}}" /> 
                  <div class="row">

                    <div class="col-sm-6">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                        {{Form::label('name','名前')}}
                        {{Form::text('name', '', ['class' => 'form-group', 'id' => 'name' ])  }}
                    </div>

                  <div class="col-sm-12">
                            @error('body')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 
                        {{Form::label('body','メッセージ')}}
                        {{Form::textarea('body', '', ['class' => 'form-group', 'id' => 'body'])  }}
                  </div>
                  <div class="col-md-12">
                        {{Form::submit('Submit', ['class' => 'send mt_btn_yellow pull-right', 'id' => 'submit'])}}
                        {!! Form::close() !!}
                    </div>
                </div>
            {{--  End add comment  --}}
    <div id="comment_show"></div>
{{-- 
                 <script>
                  function toggleReply(commentId){
                      $('.reply-form-'+commentId).toggleClass('hidden');
                  }
                 </script> --}}
<script> 
    $(document).ready(function(){
    　　 $.ajaxSetup({
    　　headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
     });
        loadComment(); 
    function loadComment(){
        var lesson_id= $("#lesson_id").val();
        var _token = $('input[name="_token"]').val();
        $.ajax({
                method: "POST",
                url: "{{url('/loadComment')}}",
                dataType: "html",
                data: {_token:_token, lesson_id: lesson_id},     
                success: function(data){
                $('#comment_show').html(data);
                }
                });
                }
            }); 
 </script>              
                
        </div>          
    
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        
        </div>
        </div>
        </div>
            </section>         
            @endsection