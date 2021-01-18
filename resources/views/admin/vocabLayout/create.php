


<?php

if(!empty($_GET)){

  $check = $_GET['gender'];
if($check == 1 ){
    echo 1;
}else{
    echo 2;
}

}

?>
<form action="create.php" method ="GET">
  <p>Please select your gender:</p>
  <input type="radio" id="male" name="gender" value=1>
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>

  <br>  


  <input type="submit" value="Submit">
</form>