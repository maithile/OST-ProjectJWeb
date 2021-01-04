
<br>
<div> <img src="/storage/images/{{$lesson->image}}" width="360" height="230"> 

<br>
<div>
    <audio controls>
        <source src="/storage/images/{{$lesson->mp3_file}}" type="audio/mpeg">
    </audio>

</div>
<p>script</p> 

@foreach($Array as $key => $values)
 <b> {!! $key !!}</b> : {!! $values !!} <br>
@endforeach  

</div> 
<p>Question</p>   

@foreach ($questions as $value)
<div><h2> {{$value->question_1}} </h2></div>
<div> {{$value->option_1}}</div>
<div> {{$value->option_2}}</div>
<div> {{$value->option_3}}</div>
<div> {{$value->id}}</div>
@endforeach  


 
 @foreach ($vocabulary as $value)

<div> Dictionrty_id: {{$value->dictionary_id}} </div>
<div> Vocabulary: {{$value->dictionary->vocabulary }}</div>
<div> Meaning: {{$value->dictionary->meaning }} </div> 


@endforeach 







</div>