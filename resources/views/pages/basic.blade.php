@extends('layout.index')

@section('content')

@foreach ($lesson as $value )

    <h1> {{$value->title}} </h1>

@endforeach

    
@endsection


        
