@extends('layout.indexAdmin')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
                    @error('talker.*')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @error('script.*')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

               <div class="col-md-3">  
                    {{Form::label('talker', 'talker')}}
                    {{Form::text('talker[]', '', ['id' =>'summary', 'class' => 'WYSIWYG', 'placeholder' => 'talker'])}}
                </div>

                <div class="col-md-8">
                    {{Form::label('script', 'テスト')}}
                    {{Form::text('script[]', '', ['class' => 'WYSIWYG'  ])}}
                </div>

                <div class="col-md-3">
                    {{Form::label('talker.*', '会話者')}}
                    {{Form::text('talker[]', '', [ 'class' => 'WYSIWYG', 'placeholder' => 'talker'])}}
                </div>

                <div class="col-md-8">
                    {{Form::label('script', 'テスト')}}
                    {{Form::text('script[]', '', ['class' => 'WYSIWYG'])}}
                </div>
            
                <div class="col-md-3">
                    {{Form::label('talker', '会話者')}}
                    {{Form::text('talker[]', '', [ 'class' => 'WYSIWYG', 'placeholder' => 'talker'])}}
                </div>

                <div class="col-md-8">
                    {{Form::label('script', 'テスト')}}
                    {{Form::text('script[]', '', ['class' => 'WYSIWYG'])}}
                </div>

            <div class="script-form">
                <div class="script-add">

                <div class="col-md-3">
                    {{Form::label('talker', '会話者')}}
                    {{Form::text('talker[]', '', [ 'class' => 'WYSIWYG', 'placeholder' => 'talker'])}}
                </div>

                <div class="col-md-8">
                    {{Form::label('script', 'テスト')}}
                    {{Form::text('script[]', '', ['class' => 'WYSIWYG'])}}
                </div>
            </div>
            </div>
        </div>
            <input type="button" onclick="Addscript()" value="追加">
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
                    @error('answer1')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                {{Form::label('answer1','答え１')}}
                {{Form::text('answer1', '', ['class' => 'form-group']) }}
                </div>

                <div class="col-md-8">
                    @error('answer2')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                {{Form::label('answer2','答え２')}}
                {{Form::text('answer2', '', ['class' => 'form-group'])  }}
                </div>

                <div class="col-md-8">
                    @error('answer3')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                {{Form::label('answer3','答え２')}}
                {{Form::text('answer3', '', ['class' => 'form-group'])  }}
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
　@endsection　　
    <script>
    function addNew(){
        let html = $('.question-item').html();
        $('.question-list').append(html);
    }
    </script>
    <script>
        function Addscript(){
            let html = $('.script-add').html();
            $('.script-form').append(html)
        }
　　</script>
