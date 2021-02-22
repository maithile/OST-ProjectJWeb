@extends('layout.indexAdmin')
@section('content')

@if(!empty(session('success')))
  <div class="alert alert-success"> {{ session('success') }}</div>
@endif
{!! Form::open(['action' => 'CategoryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
<div class="add-listing-section">

    <div class="add-listing-headline">
    <h3>テーマ作成</h3>
    </div>
    <div class="row with-forms">

        <div class="col-md-8">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        {{Form::label('name','テーマの名前')}}
        {{Form::text('name', '', ['class' => 'form-group'])  }}
        </div>
    
        {{Form::submit('作成', ['class' => 'btn btn-default pull-right'])}}
        {!! Form::close() !!}
      
       </div>
       </div>
       
    
   
    
    
    
@endsection

