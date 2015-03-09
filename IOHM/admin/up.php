



<html>
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

mysql_select_db($database,$con);
$name=$_POST['name1'];
$address=$_POST['address'];






$sql1 = "update register set address='$address' where name='$name'";
$retval1 = mysql_query( $sql1, $con );




echo "sucessfuly updated";
?>


<body>
		<p><a href="http://localhost/admin/">GO BACK TO RECORDS</a></p>

</body>
</html>

