@extends('layout.indexAdmin')
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
    <li class="active"><a data-toggle="tab" href="#home">質問</a></li>
    <li><a data-toggle="tab" href="#menu2">脚本</a></li>
    </ul>
    <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <div class="post_body">
    <div class="over-view">  
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    @foreach ($questions as $value)
    <div><h2> {{$value->question}} </h2></div>
    <input type="radio" id="male" name="answer" value="1"> {{ $value->answer1}} <br><br>
    <input type="radio" id="male" name="answer" value="2"> {{ $value->answer2}} <br><br>
    <input type="radio" id="male" name="answer" value="3"> {{ $value->answer3}} <br><br><br>
    @endforeach  
    <input class="btn btn-primary" id="check-btn" type="submit" name ="submit" value="Submit">
    <input type="hidden" id="correct-ans" name ="correct-ans" value="{{ $value->correct_answerId}}">
</div>
</div>
</div>
        {{-- Script --}}
        <div id="menu2" class="tab-pane fade">
                @foreach($Array as $key => $values)
                <b>{!! $values  !!}</b> : {!!$key !!} <br>
            @endforeach  </p> 
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
    
    </div>
    </section>
    <div class="col-md-10">
    <a href="{{ route('post.index')}}" class="btn btn-primary " >Back</a>
    <a href="{{ route('post.edit', $lesson->id) }}" class="btn btn-primary pull-right" >修正</a>

    </div>



@endsection
