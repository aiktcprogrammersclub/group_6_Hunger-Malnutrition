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

$name=$_POST['name'];
$email=$_POST['email'];

$user = "SELECT * FROM register WHERE name='$name' and email='$email'";


 $result = mysql_query($user) or die("cannot execute query");

 $count = mysql_num_rows($result);

if($count==1)
{
    echo "<center><h3><Font Color=red>Username Already Exist.<br><mark>Please Choose Different Username</mark><br><a href=workingmail.php>Go Back</a></Font></h3></center>";
   die();

}
else {

include 'library.php'; // include the library file
include "classes/class.phpmailer.php"; // include the class name
if(isset($_POST["send"])){
	$email = $_POST["email"];
	$mail	= new PHPMailer; // call the class 
	$mail->IsSMTP(); 
	$mail->Host = SMTP_HOST; //Hostname of the mail server
	$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
	$mail->SMTPAuth = true; //Whether to use SMTP authentication
	$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
	$mail->Password = SMTP_PWORD; //Password for SMTP authentication
	$mail->AddReplyTo("siddiquamaazsk@gmail.com", "siddiqua Reply"); //reply-to address
	$mail->SetFrom("siddiquamaazsk@gmail.com", "siddiqua Cell"); //From address of the mail
	// put your while loop here like below,
	$mail->Subject = "Your Email From Localhost"; //Subject od your mail
	$mail->AddAddress($email, "LocalHost Email"); //To address who will receive this email
	$mail->MsgHTML("<b>Hello</b>This is your localhost email"); //Put your body of the message you can place html code here
	//$mail->AddAttachment("email-pic/pl.jpg"); //Attach a file here if any or comment this line, 
	$send = $mail->Send(); //Send the mails
	if($send){

              echo '<center><h3 style="color:#009933;">Mail sent</h3></center>';
		$sql="insert into register (name,email,password) values('".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."')";
			$res=mysql_query($sql);


		/*if($res)
			     { $test=1; }	
	  	elseif($res)
    			{
             			 echo '<center><h3 style="color:#009933;">Record Sucessfully Inserted</h3><br>KNOW YOU CAN LOGIN</center>';
      			} */

	     	 } 

		else
		{
		echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
		}
}


}

?>



<html lang="en" class="no-js">   <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="sid" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />

		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">

           
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Login and Registration Form </h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                          




  <form  method="POST" action="login.php" > 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="name" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="name" name="name1" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password1" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                           





















 <form  method="POST" action="#" > 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="name" class="uname" data-icon="u">Your username</label>
                                    <input id="name" name="name" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="email" class="youmail" data-icon="e" > Your email</label>
                                    <input id="email" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>

                                    <p> 
                                    <label for="address" class="address" data-icon="" > Adress</label>
                                    <input id="address" name="address" required="required" type="text" placeholder="myuseraddress"/> 
                                </p>
                                 
                                   <p> 
                                    <label for="phoneno" class="phoneno" data-icon="" > Phone no.</label>
                                    <input id="phoneno" name="phoneno" required="required" type="integer" placeholder="90004930.."/> 
                                </p>

                        
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="repassword" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="repassword" name="repassword" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" name="send" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>