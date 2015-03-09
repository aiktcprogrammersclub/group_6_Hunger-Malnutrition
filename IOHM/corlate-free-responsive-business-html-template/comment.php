
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


	$sql="insert into comment (name,email,message) values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['message']."')";
	$res=mysql_query($sql);
        $message=$_POST['message'];
        $name=$_POST['name'];
	
   
	
          if($res)
	{
	echo "commented"."</br>";
            
                  echo $name;

                echo $message;
   }
	
    else 
	{
	  echo "There is some problem in inserting record";
	}



	?>

