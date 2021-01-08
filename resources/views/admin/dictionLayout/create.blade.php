@extends('layout.indexAdmin')
@section('content')

@if(!empty(session('success')))
  <div class="alert alert-success"> {{ session('success') }}</div>
@endif
{!! Form::open(['action' => 'AdminDictionaryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}

<div class="add-listing-section">
    <div class="add-listing-headline">
    <h3><i class="sl sl-icon-map"></i>Dictionaries Create</h3>
    </div>
    
    <div class="row with-forms">

        <div class="col-md-4">
            @error('vocabulary')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        {{Form::label('vocabulary','Vocabulary')}}
        {{Form::text('vocabulary', '', ['class' => 'form-group'])  }}
        </div>
    
        <div class="col-md-8">
            @error('meaning')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        {{Form::label('meaning','Meaning')}}
        {{Form::text('meaning', '', ['class' => 'form-group']) }}
        </div>
       </div>
       </div>
       </div>
       
        {{Form::submit('Submit', ['class' => 'btn btn-default pull-right'])}}
        {!! Form::close() !!}
    </div>
    </div>
    </div>
    </div>
    
    
    
@endsection

