@extends('layout.index')
@section('content')
<br>
<div class="container">
@if (isset($lesson))
  <div><h3>検索ワード： {!! $search !!}</h3></div>
  <div><h3>結果件数： {{ $lesson->count()}}</h3></div> 
  <br>
 @foreach ($lesson as $value)  
 <div class="row">

  <div class="col-sm-4">
     <div class="image">
      <a href="/show/{{$value->id}}"><img src="/storage/images/{{$value->image}}" width="50%"></a>
      </div>
      <br>  
  </div>
  <div class="col-sm-8">
      <div> <a href="/show/{{$value->id}}"><h3>{!! $value->title = preg_replace("/($search)/i","<span class='highlight'>$1</span>", $value->title) !!}</h3></a> </div>
      <div>{!! preg_replace("/($search)/i","<span class='highlight'>$1</span>", $value->script) !!}</div>   
  </div>
  @endforeach
  @elseif(isset($Message))
         <p>{{$Message}}</p>
  @endif
 </div>
</div>

  <style>
  .highlight { background-color: #ffa; }  
  </style>
 @endsection
