<html>


<head>
<title>


</title>
</head>

<style type="text/css">

.container{
		margin-left:400px;
		margin-right:400px;
		margin-top:25px;
		color: green;
		font-family: sans-serif;
		background-image: url("");
		font-size: 20px;
		font-weight: bold;
		
		 

}

label{
			color: red;

}

input{
			background-color:lightgrey;
			color: green;

}



</style>


<?php
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="root";       //blank if no password is set for mysql.
$database="web";  //database name which you created
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

$name = $_POST['name'];

$password = $_POST['password'];
if ($name== "siddiqua" && $password=="siddiqua")
{


$sql = 'SELECT name, address,email FROM register';



mysql_select_db($database,$con);

$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))

{
    echo "name :{$row['name']}  <br> ".
         "address : {$row['address']} <br> ".
         "email : {$row['email']} <br> ".
         "--------------------------------<br>";
} 
echo "Fetched data of register successfully\n" ;

}


else{ header("Location:http://localhost/admin/"); }


mysql_close($con);
?>

<body class="container">
<form method="POST" action="del.php">
<br>
 <label for="name" class="uname" data-icon="u" >  Enter your username to delete the record </label><br>
<br> 
 <input id="name" name="username"  type="text"/>
 <br>
 <input type="submit"  value="delete">
</form>   

<form method="POST" action="up.php">
<br>
 <label for="name" class="uname" data-icon="u" >  Enter your username to update the record </label><br> 
 <input id="name" name="name1" required="required" type="text"/>
 <br>
 <br>
  <label for="address" class="uname" data-icon="u" >  update the address field  </label><br>
 <input id="name" name="address"  type="text"/>
 <br>
 
 <input type="submit"  value="update">
</form> 

                             
</body>
</html>
