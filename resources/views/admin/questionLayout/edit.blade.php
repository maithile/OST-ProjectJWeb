@extends('layout.indexAdmin')
@section('content')

@if(!empty(session('success')))
  <div class="alert alert-success"> {{ session('success') }}</div>
@endif
{!! Form::open(['action' => ['AdminQuestionController@update', $question->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

<div class="add-listing-section">
    <div class="add-listing-headline">
    <h3><i class="sl sl-icon-map"></i>Question</h3>
    </div>
    
    
    <div class="row with-forms">

        <div class="col-md-6">
            @error('lesson')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {{Form::label('lesson_id','Lesson')}}
            {!!Form::select('lesson_id', [$lesson_title->id => $lesson_title->title]) !!}  
             </div>
      

        <div class="col-md-8">
            @error('question')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {{Form::label('question','Question')}}
            {{Form::text('question', $question->question, ['class' => 'form-group', 'placeholder' => 'Question'])  }}
            </div>

            <div class="col-md-8">
                @error('choice1')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            {{Form::label('choice1','choice1')}}
            {{Form::text('choice1', $question->choice1, ['class' => 'form-group']) }}
            </div>

            <div class="col-md-8">
            @error('choice2')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {{Form::label('choice2','choice2')}}
            {{Form::text('choice2', $question->choice2, ['class' => 'form-group'])  }}
            </div>

            <div class="col-md-8">
            @error('choice3')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {{Form::label('choice3','choice3')}}
            {{Form::text('choice3', $question->choice3, ['class' => 'form-group'])  }}
            </div>

            <div class="col-md-8">
            @error('correct_answer')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {{Form::label('correct_answer','correct_answer')}}
            {{Form::text('Id', $question->correct_answerId, ['class' => 'form-group'])  }}
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

