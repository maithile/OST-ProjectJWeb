
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


@foreach ($questions as $values)
<div><h2> {{$values->question_1}} </h2></div>
<div> {{$values->option_1}}</div>
<div> {{$values->option_2}}</div>
<div> {{$values->option_3}}</div>
<div> {{$values->id}}</div>
@endforeach  


 
 @foreach ($vocabulary as $value)

<div> Dictionrty_id: {{$value->dictionary_id }}</div>
@endforeach 

<div> Vocabulary: </div>
<div> Meaning:  </div> 





</div>