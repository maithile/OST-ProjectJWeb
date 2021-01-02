
<br>
<div> <img src="/storage/images/{{$lesson->image}}" width="360" height="230"> 

<br>
<div>
    <audio controls>
        <source src="/storage/images/{{$lesson->mp3_file}}" type="audio/mpeg">
    </audio>

</div>

</div> 
<p>Question</p>   


@foreach ($questions as $values)

{{$values->question-1}}
    
@endforeach





</div>