@extends('layout.index')

@section('content')

@foreach ($lesson ?? '' as $value)

<h1> <a href = "/advance/{{$value->id}}">{{ $value->script}} </a></h1>

 
 
{{--  <audio controls>
    
    <source src="/storage/images/{{$value->script}}">
  </audio>--}} 

@endforeach

@endsection
