<?php
header('Access-Control-Allow-Origin: *');  

session_start();
require 'PHPMailer/PHPMailerAutoload.php';

$form_validation_error_msg = array();
$form_validation_errors = false;

function filter_data($data) {
  	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$first_name = filter_data($_POST['first_name']);
	$last_name = filter_data($_POST['last_name']);
	$email = filter_data($_POST['email']);
	$message = filter_data($_POST['message']);

	if(empty($first_name)) {
		$form_validation_error_msg[] = "<p>First name is required</p>";
		$form_validation_errors = true;	
	}

	if(empty($last_name)) {
		$form_validation_error_msg[] = "<p>Last name is required</p>";
		$form_validation_errors = true;	
	}

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$form_validation_error_msg[] = "<p>Email is not valid</p>";
		$form_validation_errors = true;
	}

	if(empty($message)) {
		$form_validation_error_msg[] = "<p>Message is required</p>";
		$form_validation_errors = true;	
	}

	if($form_validation_errors==false) {
		
		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'email-smtp.us-east-1.amazonaws.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'AKIAIHCZF7MDW7Y5V6MQ';                 // SMTP username
		$mail->Password = 'Akq56c04U49z61BjwjfiZSbb2i9sa6zrqKu7mANkE5nW';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom('hongkong@kafnu.com', $name);
		$mail->addAddress('manicdesign@gmail.com', 'Kafnu Info');     // Add a recipient //kafnuinfo@nextstory.com
		$mail->addReplyTo($email, $name);

		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Message from Kafnu website';
		$body    = 'Hi, <br><br> We just got a message on Kafnu website and here is details of message: <p>First name: '.$first_name.' </p><p>Last name: '.$last_name.' </p><p>Email: '.$email.' </p><p>Message: '.$message;

		$mail->Body    = $body;

		$mail->AltBody = '';

		if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    echo 'Thank you for getting in touch! We will be in contact to assist you.';
		}

	}else {
		foreach ($form_validation_error_msg as $key => $error_msg) {
			echo $error_msg;
		}
	}

}
?>