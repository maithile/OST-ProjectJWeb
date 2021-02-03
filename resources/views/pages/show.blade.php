@extends('layout.index')
@section('content')
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
    <div class="course-tabs">
    <div class="nav-content-c">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Question</a></li>
    <li><a data-toggle="tab" href="#menu1">Vocabulary</a></li>
    <li><a data-toggle="tab" href="#menu2">Script</a></li>
    <li><a data-toggle="tab" href="#menu3">Discuss</a></li>
    </ul>

    <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <div class="post_body">
    <div class="over-view">  

         {{-- submitansnwer --}}
     {{-- <form action="{{ route('answer-submit', $lesson->id) }}" method="POST">
       <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        @foreach ($questions as $value)
        <div><h2> {{$value->question}} </h2></div>
        <input type="radio" id="male" name="answer" value="1"> 
         <p>{{ $value->answer1}}</p>
         <input type="radio" id="male" name="answer" value="2"> 
         <p>{{ $value->answer2}}</p>
         <input type="radio" id="male" name="answer" value="3"> 
         <p>{{$value->answer3}}</p>
        @endforeach  
        <input class="btn btn-primary" type="submit" name ="submit" value="Submit">
   </form> --}}
       {{-- submitansnwer end--}}

       <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        @foreach ($questions as $value)
        <div><h2> {{$value->question}} </h2></div>
        <input type="radio" id="male" name="answer" value="1"> {{ $value->answer1}} <br><br>
        <input type="radio" id="male" name="answer" value="2"> {{ $value->answer2}} <br><br>
        <input type="radio" id="male" name="answer" value="3"> {{ $value->answer3}} <br><br><br>
        @endforeach  
        <input class="btn btn-primary" id="check-btn" type="submit" name ="submit" value="Submit">

<script>
jQuery(document).ready(function($){
  var correct_ans = $('#correct-ans').val();
  var selected_ans = "";

  $('#check-btn').click(function() {
    selected_ans = $('input[name="answer"]:checked').val();
    if(selected_ans == null) {
      alert("Please answer the question.");
    } else {
      if(correct_ans == selected_ans) {
        alert("Congratulation! Correct!");
      } else {
        alert("Nope! You're wrong -_-");
      }
    }
  });

});

</script>

</div>
</div>
</div>

                {{-- vocabulary --}}
<div id="menu1" class="tab-pane fade"> 
    <div class="panel-group course-accd" id="accordion">
        @foreach ($vocabulary as $value)
    <div class="panel panel-default">
    <div class="panel-heading">
    <h4 class="panel-title">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
    <ul class="accd-titles">
    <li>{{$value->dictionary->vocabulary }}</li>
    <li class="let-title">{{$value->dictionary->meaning }}</li>
    </ul>
    </a>
    </h4>
    </div>
    </div>
    @endforeach
    </div>
    </div>
                      {{-- vocabulary end --}}
       
        {{-- Script --}}

        <div id="menu2" class="tab-pane fade">
                @foreach($Array as $key => $values)
                <b>{!! $values  !!}</b> : {!!$key !!} <br>
            @endforeach  </p> 
            </div>
        {{-- Script  end --}}

        <div id="menu3" class="tab-pane fade">
          cau hoi phu
         </div>
        </div>
         </div>
                           {{-- comment--}}
   
        </div>
    </div>

         {{-- side bar--}}
            <aside class="col-md-4 col-sm-12">
            <div class="widget">
            <form class="search-form" role="search" action="http://markupthemex.com/" method="post">
            <input id="sidebar-search" placeholder="Search Courses" type="text">
            </form>
            </div>
            <div class="widget widget_categories">
            <h3 class="blog_heading_border">Categories </h3>
            <ul>
            <li>
            <a href="#"> Travel</a>
            <span class="categoryCount">(07)</span>
            </li>
             <li>
            <a href="#"> Sports </a>
            <span class="categoryCount">(18)</span>
            </li>
            <li>
            <a href="#"> Cooking </a>
            <span class="categoryCount">(08)</span>
            </li>
            <li>
            <a href="#"> Banking Management </a>
            <span class="categoryCount">(05)</span>
            </li>
            <li>
            <a href="#"> Busines Studies </a>
            <span class="categoryCount">(02)</span>
            </li>
            </ul>
            </div>

            <div class="widget widget_recent_entries">
            <h3 class="blog_heading_border"> Recent Lessons</h3>
            <ul>
                @foreach ($lesson_show as $value)  
            <li>
            <img src="/storage/images/{{$value->image}}" alt="image" height="60%" width="22%">
            <h4>
            <a href="#">{{$value->title}}</a>
            </h4>
            <p>{{$value->updated_at}} |
            <span> 5 comment</span>
            </p>
            </li>
            @endforeach
            </ul>
            </div>

            <div class="widget widget_tag_cloud">
            <h3 class="blog_heading_border"> Lesson Tags </h3>
            <ul>
            <li>
            <a href="#">Travel  </a>
            </li>
            <li>
            <a href="#"> Business </a>
            </li>
            <li>
            <a href="#"> Onsen </a>
            </li>
            <li>
            <a href="#"> Teachers </a>
            </li>
            <li>
            <a href="#"> Engineering </a>
             </li>
            <li>
            <a href="#"> Cooking </a>
            </li>
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


                  <h3 class="blog_heading_border"> Discuss </h3>

                 
                {{--  comment  --}}
                    {{-- <div class="leave_review">
                    <h3 class="blog_heading_border"> Leave a Comment </h3>

                    {!! Form::open(['action' => ['LessonController@loadComment'], 'method' => 'POST', 'id' => 'postForm' ]) !!}

                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" id ="lesson_id" name="lesson_id" value="{{$lesson->id}}" /> 

                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        {{Form::label('name','Name')}}
                        {{Form::text('name', '', ['class' => 'form-group', 'id' => 'name' ])  }}
                      </div>
                    <div class="col-sm-12">
                      {{Form::label('body','Message')}}
                      {{Form::textarea('body', '', ['class' => 'form-group', 'id' => 'body'])  }}
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                    </div>loadComment
                    </div>
                    {{Form::submit('Submit', ['class' => 'mt_btn_yellow pull-right', 'id' => 'submit'])}}
                    {!! Form::close() !!} --}}
                  
                     {{--  display comment  --}}
                <form> 
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name ="lesson_id"  id = "lesson_id" value="{{$lesson->id}}">

                    <div id="comment_show">   

                    </div>
                 </form>         
                  <script type="text/javascript"> 
                    $(document).ready(function(){
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
                   {{--  end display comment  --}}


                    </div>  
                    
                    {{--  end comment  --}}

                     
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                </div>
                <br>
               

            </div>
            </div>
            </div>
            </section>
            
            @endsection


