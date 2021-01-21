@extends('layout.indexAdmin')
@section('content')

<div class="add-listing-section">
    <div class="add-listing-headline">
    <h3><i class="sl sl-icon-map"></i>Question</h3>
    </div>
    
    <div class="row with-forms">

       <div class="question" >

        <div style="display:block;">
          <div style="background-color:#f2f2f2; color:#444;">
         <p><b>Lesson</b> : {{$lesson_title->title}}</p>
          </div>
          <div style ="background-color:#f2f2f2; color:#444;">
            <h4> {{$question->question}}</h4>
          </div>
          </div>
          <div style="background-color:#f2f2f2; color:#444;">
            <p><b>1</b> : {{$question->choice1}}</p>
          </div>
          <div style="background-color:#f2f2f2; color:#444;">
            <p><b>2</b> : {{$question->choice2}}<p>
          </div>
          <div style="background-color:#f2f2f2; color:#444;">
            <p><b>3</b> : {{$question->choice3}}</p>
          </div>
          <div style="background-color:#f2f2f2; color:#444;">
            <p><b>correct_answer</b> : {{$question->correct_answerId}}</p>  
          
        </div>
        </div>
        </div>
       
        <div class="col-md-10">
          <a href="{{ route('question.index') }}" class="btn btn-primary" ><i class="fa fa-arrow-circle-left"></i> Back </a>
          </div> 
          <a href="{{ route('question.edit', $question->id) }}" class="btn btn-primary" >Edit</a>
        </div>
    
    </div>
    </div>
    </div>
    
@endsection

