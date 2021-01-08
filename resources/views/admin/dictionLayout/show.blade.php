
@extends('layout.indexAdmin')
@section('content')

<div class="add-listing-section">
    <div class="add-listing-headline">
    <h3><i class="sl sl-icon-map"></i>Vocabulary Detail</h3>
    </div>
    <div class="row with-forms">

        <div class="col-md-4">
        <p><b>Vocabulary<b></p>
            <p>{{$dic->vocabulary}}</p>
        </div>
        <div class="col-md-8">
            <p><b>Meaning<b></p>
                <p>{{$dic->meaning}}</p>
            </div>
        </div>
        </div>
       
        <div class="col-md-10">
          <a href="{{ route('dictionary.index') }}" class="btn btn-primary" ><i class="fa fa-arrow-circle-left"></i> Back </a>
          </div> 
          <a href="{{ route('dictionary.edit', $dic->id) }}" class="btn btn-primary" >Edit</a>
        </div>
    
    </div>
    </div>
    </div>
    
@endsection

