



@php

print_r($answer = json_decode(json_encode($questions), true));

print_r($inputed);

$count = count($answer);

$x = count(array_diff($answer, $inputed));

echo "banj lam dung ".$x. "tren" .$count;




@endphp


