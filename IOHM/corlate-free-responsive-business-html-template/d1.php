
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


$sql="insert into donate values('".$_REQUEST['name']."', '".$_REQUEST['email']."',
 '".$_REQUEST['address']."','".$_REQUEST['telno']."','".$_REQUEST['amount']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}