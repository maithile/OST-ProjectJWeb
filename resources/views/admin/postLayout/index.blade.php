@extends('layout.indexAdmin')
@section('content')
@if(!empty(session('success')))
  <div class="alert alert-success"> {{ session('success') }}</div>
@endif
<div class="col-lg-12 col-md-12">
    <div class="dashboard-list-box">
    <h4 class="gray">レッスン管理</h4>
    <div class="table-box">
    <table class="basic-table booking-table">
        <thead>
        <tr>
        <th>Id</th>
        <th>タイトル</th>
        <th>コメント人数</th>
        <th>詳細</th>
        <th>削除</th>
        </tr>
        </thead>
   @foreach ($lesson as $value)
    <tbody>
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->title}}</td>
        <td>{{$value->comments->count()}}</td>
        <td><a href="{{route('post.show', $value->id)}}">
          <button class="btn btn-default" type="button">詳細
          </button></a>
        </td> 
        <td>   
       {!!Form::open(['action' => ['AdminPostLessonCotroller@destroy', $value->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-primary'])}}
        {!!Form::close()!!} 
        </td>
        </tr>
       <tr>
    </tbody>
    @endforeach
    </table>

    </div>
    </div>
  </div>
        {{$lesson->links()}} 
@endsection

