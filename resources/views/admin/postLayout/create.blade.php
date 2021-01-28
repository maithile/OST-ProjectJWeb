@extends('layout.indexAdmin')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
 <script src="{{ asset('js/app.js') }}"></script> 
@if(!empty(session('success')))
  <div class="alert alert-success"> {{ session('success') }}</div>
@endif
                        {{--Lesson --}}
{!! Form::open(['action' => 'AdminPostLessonCotroller@store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}

 
 <div class="col-lg-12 col-sm-12">
    <div id="add-listing">
    <div class="add-listing-section">
    <div class="add-listing-headline">
    <h3>Lesson Create</h3>
    </div>

    <div class="row with-forms">
        <div class="col-sm-10"> 
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror 
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'search-field', 'placeholder' => 'Title'])}}
        </div>
    </div>

    <div class="row with-forms">
        <div class="col-md-4">

         @error('level_id')
         <div class="alert alert-danger">{{ $message }}</div>
         @enderror

        {{Form::label('level_id','Level')}}
        {!!Form::select('level_id', ['id' => 'Seclect Level'] + $level) !!} 
        </div>
  </div>

    <div class="row with-forms">
        <div class="col-md-6">
         @error('mp3_file')
            <div class="alert alert-danger">{{ $message }}</div>
         @enderror
        {{Form::label('mp3_file', 'mp3_file')}}
        {{Form::file('mp3_file')}}
        </div>

        <div class="col-md-6">
         @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
         @enderror
        {{Form::label('image', 'Image')}}
        {{Form::file('image')}}
        </div>
        </div>
    </div>
    </div>

    <div class="add-listing-section">
        <div class="add-listing-headline">
        <h3>Script</h3>
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
     
        {{Form::label('script', 'Script')}}
        {{Form::text('script[]', '', ['class' => 'WYSIWYG'  ])}}
        </div>

        <div class="col-md-3">
     
        {{Form::label('talker.*', 'talker')}}
        {{Form::text('talker[]', '', [ 'class' => 'WYSIWYG', 'placeholder' => 'talker'])}}
         </div>

         <div class="col-md-8">
     
        {{Form::label('script', 'script')}}
        {{Form::text('script[]', '', ['class' => 'WYSIWYG'])}}
        </div>
        
        <div class="col-md-3">
       
        {{Form::label('talker', 'talker')}}
        {{Form::text('talker[]', '', [ 'class' => 'WYSIWYG', 'placeholder' => 'talker'])}}
            </div>

            <div class="col-md-8">
     
        {{Form::label('script', 'script')}}
        {{Form::text('script[]', '', ['class' => 'WYSIWYG'])}}
        </div>

        <div class="col-md-3">
    
        {{Form::label('talker', 'talker')}}
        {{Form::text('talker[]', '', [ 'class' => 'WYSIWYG', 'placeholder' => 'talker'])}}
            </div>

            <div class="col-md-8">
        
        {{Form::label('script', 'script')}}
        {{Form::text('script[]', '', ['class' => 'WYSIWYG'])}}
            </div>
        </div>
       </div>
       </div>

    </div>
    </div>           
                                 {{--End Lesson--}}
       {{--Question--}}  

    <div class="add-listing-section">
    
        <div class="add-listing-headline">
        <h3>Question</h3>
        </div>
        
        <div class="row with-forms">
            <div class="col-md-8">
                @error('question')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            {{Form::label('question','question')}}
            {{Form::text('question', '', ['class' => 'form-group', 'placeholder' => 'Question'])  }}
            </div>
            <div class="col-md-8">
                @error('answer1')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            {{Form::label('answer1','answer1')}}
            {{Form::text('answer1', '', ['class' => 'form-group']) }}
            </div>
            <div class="col-md-8">
                @error('answer2')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            {{Form::label('answer2','answer2')}}
            {{Form::text('answer2', '', ['class' => 'form-group'])  }}
            </div>
    
            <div class="col-md-8">
                @error('answer3')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            {{Form::label('answer3','answer3')}}
            {{Form::text('answer3', '', ['class' => 'form-group'])  }}
            </div>
            <div class="col-md-8">
                @error('correct_answerId')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
             {{Form::label('correct_answer','correct_answer')}}
             {{Form::text('correct_answerId', '', ['class' => 'form-group'])  }}
            </div>
           </div>
        </div>
                                     {{--End Question--}}  
             
{{--Vocabulary--}}

       <div class="add-listing-section">
           <div class="add-listing-headline">
           <h3>Vocabularies</h3>
           </div>
           
           <div class="row with-forms">

            </div>
                <div class="row with-forms">
                <div class="col-md-4">
                    @error('dictionary_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
               {!! Form::select('dictionary_id',['id' => 'Search Word'] + $dictionary, null, ['class' => 'g']) !!}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-default pull-right'])}}
            {!! Form::close() !!}
               </div>
              
               </div> 
              </div>
              </div>
          </div>

   <script type="text/javascript">
     $(document).ready(function() {
     $('.g').select2();
     });
 </script> --}}
@endsection

