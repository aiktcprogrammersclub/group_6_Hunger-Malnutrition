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
$username=$_POST['username'];





$sql1 = "delete  FROM register where name='$username'";
$retval1 = mysql_query( $sql1, $con );
echo "sucessfuly deleted";
?>


<body>
		<p><a href="http://localhost/admin/">GO BACK TO RECORDS</a></p>

</body>
</html>

