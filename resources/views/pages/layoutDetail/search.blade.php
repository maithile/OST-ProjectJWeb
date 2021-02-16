@extends('layout.index')
@section('content')
<br>
<div class="container">
@if (isset($lesson))
@foreach ($lesson as $value)  
<div class="row">
    <div class="col-sm-4">
     <div class="image">
          <img src="/storage/images/{{$value->image}}" width="50%">
      </div>
      <br>
    </div>
    <div class="col-sm-8">
      <div class="title"><h3>{{$value->title}}</h3></div>
      <div >{{ implode(",", $value->script)}}</div>
    {{-- <div> {{ str_replace('/(' . $search . ')/i', "<h1>$search</h1>", implode(",", $value->script) )}}
    </div> --}}
    </div>
  </div>
  @endforeach
  @elseif(isset($message))
         <p>{{ $message }}</p>
         @endif
</div>

  {{-- <style>
  .highlight { background-color: #ffa; }  
  </style> --}}
 @endsection
