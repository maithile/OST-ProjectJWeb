@extends('layout.indexAdmin')
@section('content')
    @if(!empty(session('success')))
    <div class="alert alert-success"> {{ session('success') }}
    </div>
    @endif
<div class="col-lg-12 col-md-12">
    <div class="dashboard-list-box">
    <h4 class="gray">テーマ分類</h4>
    <div class="table-box">
    <table class="basic-table booking-table">
        <thead>
        <tr>
        <th>ID</th>
        <th>テーマ</th>
        <th>レッスン数</th>
        <th>詳細</th>
        <th>削除</th>
        </tr>
        </thead>
   @foreach ($category  as $value)
    <tbody>
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->pots->count()}}</td>
        <td><a href="{{route('category.show', $value->id)}}"><button class="btn btn-default" type="button">
            詳細
            </button></a></td> 
        <td>
       {!!Form::open(['action' => ['CategoryController@destroy', $value->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-primary'])}}
        {!!Form::close()!!} 
     
        </div>
        </td>
        </tr>
       <tr>
    </tbody>
    @endforeach
    </table>
    </div>
    </div>W
    </div>
    </div>
    </div>
@endsection

