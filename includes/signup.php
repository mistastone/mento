<?php

include 'functions.php';
require 'phpmailer/class.phpmailer.php';

//Retrieve form data. 
//GET - user submitted data using AJAX
//POST - in case user does not support javascript, we'll use POST instead

$first = ($_GET['first']) ?$_GET['first'] : $_POST['first'];
$last = ($_GET['last']) ?$_GET['last'] : $_POST['last'];
$email = ($_GET['email']) ?$_GET['email'] : $_POST['email'];
$password = md5(($_GET['password']) ?$_GET['password'] : $_POST['password']);
$token = generateRandomString();

//flag to indicate which method it uses. If POST set it to 1
if ($_POST) $post=1;

//Simple server side validation for POST data, of course, you should validate the email
//if (!$email) $errors[count($errors)] = 'Please enter your email.'; 

//If the errors array is empty, send the mail
if (!$errors) {

	$mail = new PHPMailer;

	$mail->IsSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.mandrillapp.com';                 // Specify main and backup server
	$mail->Port = 587;                                    // Set the SMTP port
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'snahrvar@gmail.com';               // SMTP username
	$mail->Password = 'laypOykX9Im6mLdaYPZnyA';           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

	$mail->From = 'info@mento.com';
	$mail->FromName = 'admin';
	$mail->AddAddress($email);  		  	  				// Add a recipient

	$mail->IsHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Mento Email';
	$mail->Body    = "Hello first: $first last: $last email: $email password: $password token: $token";
	$mail->AltBody = "Hello";

	$result = $mail->Send();
	
	if ($result) {
			
		//connect to the database
		$con = mysqli_connect('localhost', 'oasis_user', 'abc-123','oasis_mento');
		
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}
		
		//if you make the connection
		else {
			//sanitize the variables
			$first = mysqli_real_escape_string($con, $first);
			$last = mysqli_real_escape_string($con, $last);
			$email = mysqli_real_escape_string($con, $email);
			$password = mysqli_real_escape_string($con, $password);
			
			//insert the data into the db
			$query = "INSERT INTO `msn_users`(`first`, `last`, `email`, `password`, `token`) VALUES ('$first', '$last', '$email', '$password', '$token')";
			$result = mysqli_query($con, $query);

		}
		
	}

// If the errors array has values
} else {}

if ($result) return 1;
	else return 0;

?>