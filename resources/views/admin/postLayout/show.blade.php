@extends('layout.indexAdmin')
@section('content')
 
<section id="mt_services" class="light-bg services-section section-inner">
    <div class="container">
    <div class="course-detail">
    <div class="row">
    <div class="col-md-10 col-sm-14">
    <div class="post_title">
    <h2>{{$lesson->title}}</h2>
    </div>
    <div class="post_img">
        <img src="/storage/images/{{$lesson->image}}"> 
        </div>
    <div class="audio">
        <audio controls>
            <source src="/storage/audioFile/{{$lesson->mp3_file}}" type="audio/mpeg">
        </audio>
    </div>

    <div class="course-tabs">
    <div class="nav-content-c">
    <ul class="nav nav-tabs">

    <li class="active"><a data-toggle="tab" href="#home">Question</a></li>
    <li><a data-toggle="tab" href="#menu1">Vocabulary</a></li>
    <li><a data-toggle="tab" href="#menu2">Script</a></li>
    <li><a data-toggle="tab" href="#menu3">Reviews</a></li>
    </ul>
    <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <div class="post_body">
    <div class="over-view">
        
    @foreach ($questions as $value)
    <div><h2> {{$value->question}} </h2></div>
    <div> {{$value->choice1}}</div>
    <div> {{$value->choice2}}</div>
    <div> {{$value->choice3}}</div>
    <div> {{$value->correct_answerId}}</div>
    @endforeach  

    </div>
    </div>
    </div>

    <div id="menu1" class="tab-pane fade">
       @foreach ($vocabulary as $value)
            <div> Dictionrty_id: {{$value->dictionary_id}} </div>
            <div> Vocabulary: {{$value->dictionary->vocabulary }}</div>
            <div> Meaning: {{$value->dictionary->meaning }} </div> 
        @endforeach 
    
    </div>

    <div id="menu2" class="tab-pane fade">
    <div class="advisor-description">
  
      @foreach($Array as $key => $values)
      <b>{!!$values !!}</b> : {!! $key  !!} <br>
       @endforeach  </p>  

      </div>
    </div>
    
    <div id="menu3" class="tab-pane fade">
    <div id="review-c">
      hey good job

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
   

    <div class="col-md-10">
    <a href="{{ route('post.index')}}" class="btn btn-primary " >Back</a>
    <a href="{{ route('post.edit', $lesson->id) }}" class="btn btn-primary pull-right" >Edit</a>

    </div>



@endsection
