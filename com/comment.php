<html>

<head>
			<title>
							Comments			
			</title>
			
			
			
<style>

#respond {
  margin-top: 40px;
}

#respond input[type='text'],
#respond input[type='email'], 
#respond textarea {
  margin-bottom: 10px;
  display: block;
  width: 100%;

  border: 1px solid rgba(0, 0, 0, 0.1);
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;
  -khtml-border-radius: 5px;
  border-radius: 5px;

  line-height: 1.4em;
}



</style>

</head>



<div id="respond">

  <h3>Leave a Comment</h3>

  <form action="?" method="post" id="commentform">

    <label for="comment_author" class="required">Your name</label>
    <input type="text" name="name" id="comment_author" value="" tabindex="1" required="required">

    <label for="email" class="required">Your email;</label>
    <input type="email" name="email" id="email" value="" tabindex="2" required="required">

    <label for="comment" class="required">Your message</label>
    <textarea name="message" id="comment" rows="10" tabindex="4"  required="required"></textarea>


    <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID" />
    <input name="submit" type="submit" value="Submit" />

  </form>

</div>

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
     $test=1;
   
   }	
	
	
          if($res)
	{
	echo "Record successfully inserted"."</br>";
            
                  echo $name;

                echo $message;
   }
	
    else if($test==1 && $res==FALSE)
	{
	  echo "There is some problem in inserting record";
	}



	?>


</html>
