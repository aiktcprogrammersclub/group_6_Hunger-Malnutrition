<?php
$weight=$_POST['login'];
$length=$_POST['password'];

$k=echo "According to your weight that is $weight and height is $length ";

echo "</br></br>";

 $a=$length*$length;

 $result=$weight / $a;
 
 echo "<font color='red'> $result";



?>