@extends('layout.indexAdmin')
@section('content')

@if(!empty(session('success')))
  <div class="alert alert-success"> {{ session('success') }}</div>
@endif
{!! Form::open(['action' => 'AdminQuestionController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}

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
            @error('option_1')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        {{Form::label('option_1','Option_1')}}
        {{Form::text('option_1', '', ['class' => 'form-group']) }}
        </div>

        <div class="col-md-8">
            @error('option_2')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        {{Form::label('option_2','Option_2')}}
        {{Form::text('option_2', '', ['class' => 'form-group'])  }}
        </div>

        <div class="col-md-8">
            @error('option_3')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        {{Form::label('option_3','Option_3')}}
        {{Form::text('option_3', '', ['class' => 'form-group'])  }}
        </div>

        <div class="col-md-8">
            @error('answer')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         {{Form::label('','Answer')}}
         {{Form::text('answer', '', ['class' => 'form-group'])  }}
        </div>

       </div>
       </div>
       </div>
        {{Form::submit('Submit', ['class' => 'btn btn-default'])}}
        {!! Form::close() !!}
    <a href="#" class="button preview">Preview <i class="fa fa-arrow-circle-right"></i></a>
    </div>
    </div>
    </div>
    </div>
    
    
    
@endsection

