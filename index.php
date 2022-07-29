<?php
//Include required PHPMailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$recipient = $_GET["recipient"];
$email = $_GET["email"];
    

if ($recipient && $email) {
	

	
	//Create instance of PHPMailer
	$mail = new PHPMailer();
	//Set mailer to use smtp
	$mail->isSMTP();
	//Define smtp host
	$mail->Host = "smtp.gmail.com";
	//Enable smtp authentication
	$mail->SMTPAuth = true;
	//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
	//Port to connect smtp
	$mail->Port = "587";
	//Set gmail username
	$mail->Username = "";
	//Set gmail password
	$mail->Password = "";
	//Email subject
	$mail->Subject = "Title";
	//Set sender email
	$mail->setFrom($recipient);
	//Enable HTML
	$mail->isHTML(true);
	//Attachment
	//	$mail->addAttachment('img/attachment.png');
	//Email body
	$mail->Body = "

	<div style='background-color:#D9D9D9; padding: 20px;'>

		<div style='margin-bottom: 30px; text-align:center; color:gray;'>
			<div><h2> Using PHP mailer</h2></div>
			<div><strong><h2>Title</h2></strong></div>
		</div>
		<!-- Card message -->
		<div style='width: 40%; padding:20px; font-family: Courier New, Courier, monospace; margin-left: auto; margin-right: auto;  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s; background-color: #fff;'>
			<div>
				<p>Hi,</p>
				<p> '{$email}'</p>
				<p> Thank you, <br></p>
			</div>
		</div>
	</div>

	";

	//Add recipient
	$mail->addAddress("rogermooresangol@gmail.com");
	//Finally send email
	if ( $mail->send() ) {
		echo "Email Sent..!";
	}else{
		echo "Message could not be sent. Mailer Error: ";
	}
	//Closing smtp connection
	$mail->smtpClose();

}