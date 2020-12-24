@extends('layout.index')

@section('content')

@foreach ($lesson as $value)

{{ $value->script }} 
<img src="/storage/images/{{$value->script }}"/>
@endforeach

@endsection


        
