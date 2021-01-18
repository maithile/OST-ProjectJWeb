
@foreach ($questions as $value)

<form action="UserAnswerCotroller@store">
    <p>{{$value->question}}</p>
    <input type="radio" id="male" name="gender" value="{{$value->choice1}}">
    <label for="male">{{$value->choice1}}</label><br>

    <input type="radio" id="male" name="gender" value="{{$value->choice2}}">
    <label for="male">{{$value->choice2}}</label><br>

    <input type="radio" id="male" name="gender" value="{{$value->choice3}}">
    <label for="male">{{$value->choice3}}</label><br>

    <br>  
    @endforeach 
<div class="button">
<button class="mt_btn_yellow mar-top-10">Submit</button>
</div>
</div>
</div>
</div>

</form>