// Here we get all the information from the fields sent over by the form.

$email = $_POST['email'];

$name = 'New user';
$message = 'One more click on your website';
 
$to = 'moneyjar@moneyjar.ml';
$subject = 'Woop! New costumer interested!';
$message = 'FROM: '.$name.' Email: '.$email.'Message: '.$message;
$headers = 'From: moneyjarl@moneyjar.ml' . "\r\n";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message, $headers); //This method sends the mail.
echo "Your email was sent!"; // success message
}else{
echo "Invalid Email, please provide an correct email.";
}