@extends('layout.index')

@section('content')

@foreach ($lesson ?? '' as $value)

<h1> <a href = "basic/{{$value->id}}">{{ $value->script}} </a></h1>

 
 
{{--  <audio controls>
    
    <source src="/storage/images/{{$value->script}}">
  </audio>--}} 

@endforeach

@endsection


        
