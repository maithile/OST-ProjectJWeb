@extends('layout.indexAdmin')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
<script src="{{ asset('js/app.js') }}"></script> 

@if(!empty(session('success')))
  <div class="alert alert-success"> {{ session('success') }}</div>
@endif

 {{--Lesson --}}
{!! Form::open(['action' => ['AdminPostLessonCotroller@update', $lesson->id], 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
 <div class="col-lg-12 col-sm-12">
    <div id="add-listing">

<div class="add-listing-section">
    <div class="add-listing-headline">
        <h3>レッスン作成</h3>
        </div>

        <div class="row with-forms">
            <div class="col-sm-10"> 
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                {{Form::label('title', 'タイトル')}}
                {{Form::text('title', $lesson->title, ['class' => 'search-field', 'placeholder' => 'タイトル'])}}
        </div>
        <div class="row with-forms">
                <div class="col-md-4">
                    @error('level_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                {{Form::label('level_id','レベル')}} 
                {!!Form::select('level_id', [$level->id => $level->level]) !!}
        </div>
        <div class="col-md-4">
                    @error('level_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                {{Form::label('category_id','テーマ')}} 
                {!!Form::select('category_id', [$category->id => $category->name]) !!}
        </div>
        <div class="row with-forms">
                <div class="col-md-6">
                    @error('mp3_file')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                {{Form::label('mp3_file', 'リスニングファイル')}}
                {{Form::file('mp3_file')}}
        </div>
        <div class="col-md-6">
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                {{Form::label('image', '写真')}}
                {{Form::file('image')}}
        </div>
        
</div>

<div class="add-listing-section">
    <div class="add-listing-headline">
        <h3>Script</h3>
        </div>   
        <div class="row with-forms">
                @error('script')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            
            <div class="col-md-8">
                {{Form::label('script', 'テスト')}}
                {!! Form::textarea('script',  $lesson->script, ['id' => 'editor']) !!}
            </div>
        </div>
</div>
          
 {{--End Lesson--}}                           
      
 {{--Question--}}  

<div class="add-listing-section">
　  <div class="add-listing-headline">
        <h3>質問</h3>
    </div>  
    <div class="row with-forms">

        <div class="col-md-8">
                    @error('question')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @foreach ($questions as $item)
                {{Form::label('question','question')}}
                {{Form::text('question', $item->question, ['class' => 'form-group', 'placeholder' => 'Question'])  }}
        </div>                
        <div class="col-md-8">
                    @error('correct_answerId')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                {{Form::label('correct_answer','correct_answer')}}
                {{Form::text('correct_answerId', $item->correct_answerId, ['class' => 'form-group'])  }}
    </div>
  </div> 
  </div> 
</div> 
        @endforeach
       {{--End Question--}}                              
    {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update', ['class' => 'btn btn-success pull-right'])}}
            {!! Form::close() !!}
        
              </div>
              </div>
          </div>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
