@extends('layout.indexAdmin')
@section('content')

@if(!empty(session('success')))
  <div class="alert alert-success"> {{ session('success') }}</div>
@endif

<div class="col-lg-12 col-md-12">
    <div class="dashboard-list-box">

    <h4 class="gray">All Question</h4>
    <div class="table-box">
    <table class="basic-table booking-table">
        <thead>
        <tr>
        <th>Question </th>
        <th>Lesson Title</th>
        <th>View</th>
        <th class="textright">Delete</th>
        </tr>
        </thead>
        @foreach ($question as $value)
    <tbody>
    <tr>
        <td>{{$value->question}}</td>
        <td>Lesson title</td>
        <td><a href="/admin/question/{{$value->id}}"><button class="btn btn-default" type="button">
            View
            </button></a></td>
        <td class="textright">
        {!!Form::open(['action' => ['AdminQuestionController@destroy', $value->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
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
    </div>
    <div class="pagination-container">
    {{$question->links()}} 
    </div>
    </div>
    </div>
    </div>


@endsection

