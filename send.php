<?php
require_once '/lib/swift_required.php';

// Here we get all the information from the fields sent over by the form.
//$name = $_POST['name'];
//$email = $_POST['email'];
//$message = $_POST['message'];

//	$to = 'youremail@domain.com';
//	$subject = 'the subject';
//	$message = 'FROM: '.$name.' Email: '.$email.'Message: '.$message;
//	$headers = 'From: youremail@domain.com' . "\r\n";

//if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
  //  mail($to, $subject, $message, $headers); //This method sends the mail.
	//echo "Your email was sent!"; // success message
//}else{
//	echo "Invalid Email, please provide an correct email.";
//}


$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('moneyjar@moneyjar.ml')
  ->setPassword('moneyjaar');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Test Subject')
  ->setFrom(array('abc@example.com' => 'ABC'))
  ->setTo(array('arbuzinside@gmail.com'))
  ->setBody('This is a test mail.');

$result = $mailer->send($message);
?>
	
	
	


?>