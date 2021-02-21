@extends('layout.indexAdmin')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
<script src="{{ asset('js/app.js') }}"></script> 

@if(!empty(session('success')))
  <div class="alert alert-success"> {{ session('success') }}</div>
@endif

{{-- Creat Lesson --}}
{!! Form::open(['action' => 'AdminPostLessonCotroller@store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
 <div class="col-lg-12 col-sm-12">
        <div id="add-listing">
        <div class="add-listing-section">
        <div class="add-listing-headline">
        <h3>レッスン作成 </h3>
        </div>
    <div class="row with-forms">
      <div class="col-sm-10"> 
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
        {{Form::label('title', 'タイトル')}}
        {{Form::text('title', '', ['class' => 'search-field', 'placeholder' => 'タイトル'])}}
         </div>
    </div>

    <div class="row with-forms">
      <div class="col-md-4">
            @error('level_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        {{Form::label('level_id','レベル選択')}}
        {!!Form::select('level_id', ['id' => 'レベル選択'] + $level) !!} 
        </div>
      <div class="col-md-4">
            @error('level_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        {{Form::label('category_id','テーマ選択')}}
        {!!Form::select('category_id', ['id' => 'テーマ選択'] +  $category) !!} 
           </div>
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
    </div>

    <div class="add-listing-section">
        <div class="add-listing-headline">
            <h3>脚本</h3>
        </div>
        <div class="submit-section">
            <div class="row with-forms">
                    @error('script')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <div class="col-md-8">
                    {{Form::label('script', 'テスト')}}
                    {{Form::textarea('script', '', ['id' => 'editor'])}}
                </div>
        </div>
            </div>
       </div>
    </div>        
 {{--End Lesson--}}
　{{--Question--}}  
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
                {{Form::label('question','質問')}}
                {{Form::text('question', '', ['class' => 'form-group', 'placeholder' => '質問'])  }}
                </div>

                <div class="col-md-8">
                    @error('correct_answerId')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                 {{Form::label('correct_answer','正解')}}
                 {{Form::text('correct_answerId', '', ['class' => 'form-group'])  }}
                </div>
               </div>
           </div>
           
            <div class="col-md-8">
                <input type="button" onclick="addNew()" value="追加">  
            </div>
        </div>
       {{--End Question--}}  
        {{Form::submit('作成', ['class' => 'btn btn-success pull-right'])}}
            {!! Form::close() !!}

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    function addNew(){
        let html = $('.question-item').html();
        $('.question-list').append(html);
    }
</script>


　@endsection　
　
 



