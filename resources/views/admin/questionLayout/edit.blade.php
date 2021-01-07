@extends('layout.indexAdmin')
@section('content')


{!! Form::open(['action' => ['AdminQuestionController@update', $question->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

<div class="add-listing-section">
    <div class="add-listing-headline">
    <h3><i class="sl sl-icon-map"></i>Question</h3>
    </div>
    
    
    <div class="row with-forms">

        <div class="col-md-6">
       
            {{Form::label('lesson_id','Lesson')}}
             {!!Form::select('lesson_id', ['id' => 'chooses'] + $lesson) !!}  
             </div>
     

        <div class="col-md-8">
          
        {{Form::label('question','Question')}}
        {{Form::text('question', $question->question, ['class' => 'form-group', 'placeholder' => 'Question'])  }}
        </div>
        <div class="col-md-8">
           
        {{Form::label('option_1','Option_1')}}
        {{Form::text('option_1', $question->option_1, ['class' => 'form-group']) }}
        </div>

        <div class="col-md-8">
          
        {{Form::label('option_2','Option_2')}}
        {{Form::text('option_2', $question->option_2, ['class' => 'form-group'])  }}
        </div>

        <div class="col-md-8">
           
        {{Form::label('option_3','Option_3')}}
        {{Form::text('option_3', $question->option_3, ['class' => 'form-group'])  }}
        </div>

        <div class="col-md-8">
          
         {{Form::label('answer','Answer')}}
         {{Form::text('answer', $question->answer, ['class' => 'form-group'])  }}
        </div>

       </div>
       </div>
       </div>
    
       {{Form::hidden('_method','PUT')}}
       {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
      
      <div class="col-md-10">

        <a href="{{ route('question.index') }}" class="btn btn-primary" ><i class="fa fa-arrow-circle-left"></i> Back </a>
        </div> 
        
        
      
    </div>
    </div>
    </div>
    </div>
    
@endsection

