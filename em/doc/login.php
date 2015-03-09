<?php

$con=mysql_connect("localhost","root","root");
mysql_select_db("web",$con);

$username=mysql_real_escape_string($_POST['name1']);
$password=($_POST['password1']);

$query="select name from register where name='$username' and password='$password'";

  $q_result=mysql_query($query,$con);

  $numrow=mysql_num_rows($q_result);
  
 $r=$numrow;

 echo $r;


 if($numrow == 1)
  

 echo"connected";

   else 
         echo"not";
       

   
    

?>
