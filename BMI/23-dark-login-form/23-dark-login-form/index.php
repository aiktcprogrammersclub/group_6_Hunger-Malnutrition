<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>BMI</title>
  <link rel="stylesheet" href="css/style.css">


</head>
<body>
  <form method="post" class="login">
    <p>
      <label for="login">Weight :</label>
      <input type="text" name="login" id="login" placeholder="Weight in kgs">
    </p>

    <p>
      <label for="password">Length :</label>
      <input type="text" name="password" id="password" placeholder="length in meters">
    </p>

    <p class="login-submit">
      <button type="submit" class="login-button">Login</button>
    </p>


  </form>
</body>



<?php
$weight=$_POST['login'];
$length=$_POST['password'];



echo "<center></br></br><font color='red'>YOUR RESULT IS::::</center>";

 $a=$length*$length;

 $result=$weight / $a;
 
 print "</br></br><font color='red'><center> $result</center>";



?>





</html>
