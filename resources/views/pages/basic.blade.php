@extends('layout.index')

@section('content')

@foreach ($lesson as $value)

{{ $value->script }} 


<audio controls>
    <source src="/storage/images/{{$value->script}}">
  </audio>

@endforeach

@endsection


        
