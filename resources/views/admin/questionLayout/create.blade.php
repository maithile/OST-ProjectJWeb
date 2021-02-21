@extends('layout.indexAdmin')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
<script src="{{ asset('js/app.js') }}"></script> 

@if(!empty(session('success')))
  <div class="alert alert-success"> {{ session('success') }}</div>
@endif
{{-- Creat Question --}}
{!! Form::open(['action' => 'QuestionsController@store', 'method' => 'POST']) !!}
 <div class="col-lg-12 col-sm-12">
        <div id="add-listing">
    
    <div class="add-listing-section">
        <div class="add-listing-headline">
        <h3>質問</h3>
        </div>
        <div class="question-list">
            <div class="question-item row with-forms">               
            <div class="col-md-8">
                    @error('question')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <select name = "lesson_id">
                      @foreach ($lesson as $item)
                          <option value="{{$item->id}}">{{$item->title}}
                          </option>
                      @endforeach
                    </select>
            </div>
            <div class="col-md-8">
                    @error('correct_answerId')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
               <input type="text" name ="question" value="{{ old('question') }}" placeholder="name of question">
            </div>
            <div class="col-md-12">
                @error('correct_answerId')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              @for ($i = 0; $i < 4; $i++)    
                <input type="text" name = "option[]"  placeholder="options{{$i+1}}" required=""><input type ="radio" name="correct_answer" value="{{$i}}"><span>Is correct answer</span>
               @endfor
        </div>
               </div>
           </div>  
        </div>
   
        {{Form::submit('作成', ['class' => 'btn btn-success pull-right'])}}
          

　@endsection　
　
 



