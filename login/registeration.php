

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


$sql="insert into register (name,email,password) values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

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
		echo '<center><h3 style="color:#009933;">Mail sent successfully</h3><br>Siddiqua</center>';
	}
	else{
		echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
	}
}





?>
