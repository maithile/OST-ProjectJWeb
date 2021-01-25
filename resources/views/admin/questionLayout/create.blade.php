@extends('layout.indexAdmin')
@section('content')

@if(!empty(session('success')))
  <div class="alert alert-success"> {{ session('success') }}</div>
@endif
{!! Form::open(['action' => 'AdminQuestionController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
{{ csrf_field() }}
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
        {!!Form::select('lesson_id', ['id' => 'Seclect Lesson'] + $lesson) !!} 
        </div>

        <div class="col-md-8">
            @error('question')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        {{Form::label('question','question')}}
        {{Form::text('question', '', ['class' => 'form-group', 'placeholder' => 'Question'])  }}
        </div>
    
        <div class="col-md-8">
            @error('choice1')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        {{Form::label('choice1','choice1')}}
        {{Form::text('choice1', '', ['class' => 'form-group']) }}
        </div>

        <div class="col-md-8">
            @error('choice2')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        {{Form::label('choice2','choice2')}}
        {{Form::text('choice2', '', ['class' => 'form-group'])  }}
        </div>

        <div class="col-md-8">
            @error('choice3')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        {{Form::label('choice3','choice3')}}
        {{Form::text('choice3', '', ['class' => 'form-group'])  }}
        </div>

        <div class="col-md-8">
            @error('')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         {{Form::label('correct_answerId','correct_answer')}}
         {{Form::text('correct_answerId', '', ['class' => 'form-group'])  }}
        </div>

       </div>
      
        {{Form::submit('Submit', ['class' => 'btn btn-default'])}}
        {!! Form::close() !!}
    </div>
    </div>
    
    
    
@endsection

