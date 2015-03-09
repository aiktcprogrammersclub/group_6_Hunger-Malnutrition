<?php

include 'library.php'; // include the library file
include "classes/class.phpmailer.php"; // include the class name
if(isset($_POST["send"])){
	$email = "siddiquamaazsk@gmail.com";
	$name= $_POST['name'];
	$mes=$_POST['message'];
	$mail	= new PHPMailer;      // call the class 
	$mail->IsSMTP(); 
	$mail->Host = SMTP_HOST;    //Hostname of the mail server
	$mail->Port = SMTP_PORT;    //Port of the SMTP like to be 25, 80, 465 or 587
	$mail->SMTPAuth = true;        //Whether to use SMTP authentication
	$mail->Username = SMTP_UNAME;       //Username for SMTP authentication any valid email created in your domain
	$mail->Password = SMTP_PWORD;         //Password for SMTP authentication
	$mail->AddReplyTo("siddiquamaazsk@gmail.com", "siddiqua Reply"); //reply-to address
	$mail->SetFrom("siddiquamaazsk@gmail.com", "siddiqua Cell"); //From address of the mail
	// put your while loop here like below,
	$mail->Subject = "suggestion and complain"; //Subject od your mail
	$mail->AddAddress($email, "LocalHost Email"); //To address who will receive this email
	$mail->MsgHTML("The message is from $name and<br> the message is this $mes"); //Put your body of the message you can place html code here
	//$mail->AddAttachment("email-pic/pl.jpg"); //Attach a file here if any or comment this line, 
	$send = $mail->Send(); //Send the mails
	if($send){

                   header("Location: http://localhost/suggest/contactthanks.php");
		
		  
	}
	else{
                   header("Location: http://localhost/suggest/contactthanks.php");
	}
}



?>