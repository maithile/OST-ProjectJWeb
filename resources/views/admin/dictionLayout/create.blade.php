@extends('layout.indexAdmin')
@section('content')

@if(!empty(session('success')))
  <div class="alert alert-success"> {{ session('success') }}</div>
@endif
{!! Form::open(['action' => 'AdminPostLessonCotroller@store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
 
 <div class="col-lg-12 col-sm-12">
    <div id="add-listing">
    <div class="add-listing-section">
    <div class="add-listing-headline">
    <h3><i class="sl sl-icon-doc"></i> Lesson Create</h3>
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
        <h3><i class="sl sl-icon-map"></i>Script</h3>
        </div>
        <div class="submit-section">
        
    <div class="row with-forms">
        <div class="form">
        @error('script')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{Form::label('script', 'Script')}}
        {{Form::text('script', '', ['id' =>'summary', 'class' => 'WYSIWYG', 'placeholder' => 'Text'])}}
        
        </div>


        {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
       </div>
    </div>
</div>

{!! Form::close() !!}

    <div class="add-listing-section">
    <div class="add-listing-headline">
    <h3><i class="sl sl-icon-docs"></i> More</h3>
    </div>
    
    <label class="margin-top-30 margin-bottom-10">Topic & Relate<span>(optional)</span></label>
    <div class="checkboxes in-row margin-bottom-20">
        <p> change to laravel collective</p>
    <input id="check-a" type="checkbox" name="check">
    <label for="check-a">Travel</label>
    <input id="check-b" type="checkbox" name="check">
    <label for="check-b">Sport</label>
    <input id="check-d" type="checkbox" name="check">
    <label for="check-d">Onsen</label>
    <input id="check-e" type="checkbox" name="check">
    <label for="check-e">Autum Leaves</label>
    <input id="check-f" type="checkbox" name="check">
    <label for="check-f">Kanji</label>
    <input id="check-g" type="checkbox" name="check">
    <label for="check-g">Smoking allowed</label>
    <input id="check-h" type="checkbox" name="check">
    <label for="check-h">Events</label>
    </div>
    
    </div>
    <a href="#" class="button preview">Preview <i class="fa fa-arrow-circle-right"></i></a>

    
    </div>
    </div>
    </div>
    </div>

    
    
@endsection

