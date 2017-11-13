<?php

header('Access-Control-Allow-Origin: *');

// require_once('path/to/wp-config.php');

function FindWPConfig($dirrectory){
global $confroot;
foreach(glob($dirrectory."/*") as $f){
    if (basename($f) == 'wp-config.php' ){
        $confroot = str_replace("\\", "/", dirname($f));
        return true;
    }
    if (is_dir($f)){
        $newdir = dirname(dirname($f));
    }
}
if (isset($newdir) && $newdir != $dirrectory){
    if (FindWPConfig($newdir)){
        return false;
    }
}
return false; 
}




global $confroot;
FindWPConfig(dirname(dirname(__FILE__)));

require_once( $confroot . '/wp-config.php');

session_start();

define("SLACK_HOOK", "https://hooks.slack.com/services/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");

function filter_data($data) {
  	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
}

function notify_slack($first_name, $last_name, $email, $message) {
	$url = SLACK_HOOK;
	$text = $message.' (email: '.$email.')';
	$payload = array(
		"channel" => "#leads",
		"username" => $first_name.' '.$last_name.' (kafnu.com)',
		"text" => $text,
		"icon_url" => "https://www.kafnu.com/kafnu_assets/images/icons/favicon.png"
	);

	$data = array('payload' => json_encode($payload));
	$options = array(
	    'http' => array(
	        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	        'method'  => 'POST',
	        'content' => http_build_query($data)
	    )
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	if ($result === FALSE) { /* Handle error */ }
	var_dump($result);
}

$form_validation_error_msg = array();
$form_validation_errors = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$first_name = filter_data($_POST['first_name']);
	$last_name = filter_data($_POST['last_name']);
	$email = filter_data($_POST['email']);
	$message = filter_data($_POST['message']);
	$captcha=$_POST['g-recaptcha-response'];

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
	if(empty($_POST['g-recaptcha-response'])){
          $form_validation_error_msg[] = "<p>Please complete the Captcha!</p>";
		  $form_validation_errors = true;
        }        
        
        $url = 'https://www.google.com/recaptcha/api/siteverify';
		$captchadata = array(
			// 'secret' => '6Lf-OzEUAAAAAMgrqAlp4QH1thhY7I1ynSySHqYn',
			'secret' => '6LemIjYUAAAAALQWlopQIx_jCxUnkskDd5p4k7f9',
			'response' => $_POST["g-recaptcha-response"]
		);
		$options = array(
			'http' => array (
				'method' => 'POST',
				'content' => http_build_query($captchadata)
			)
		);
		$context  = stream_context_create($options);
		$verify = file_get_contents($url, false, $context);
		$captcha_success=json_decode($verify);
		if ($captcha_success->success==true) {
		if($form_validation_errors==false) {
		// Create connection

		$db_user = "wp_kafnu";
		$db_hostname = "127.0.0.1";
		$db_password = "K4fFnu_jdfdif!A!";

		$db_user = DB_USER;
		$db_hostname = DB_HOST;
		$db_password = DB_PASSWORD;



		// Local testing
		// $db_hostname = "localhost";
		// $db_password = "george";

		$ip_address = $_SERVER['REMOTE_ADDR'];
		if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
		    $ip_address = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
		}

		$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
		//$conn = new mysqli_connect($db_hostname, $db_user, $db_password);
		$db = new PDO('mysql:host='.$db_hostname.';dbname=wp_kafnu', $db_user, $db_password);

		//$q1 = $db->prepare("insert into kafnu_contact(id) values (:value)");
		//$q1->execute(array("value" => 2));

		$query = $db->prepare("INSERT INTO kafnu_contact (first_name, last_name, email, message, ip_address, language) VALUES (:first_name, :last_name, :email, :message, :ipaddress, :language)");

		$parameters = array(
			":first_name" => $first_name,
			":last_name" => $last_name,
			":email" => $email,
			":message" => $message,
			":ipaddress" => $ip_address,
			":language" => $language
		);
		$query->execute($parameters);
		if($query->rowCount() == 0) {
			error_log("Error inserting db record: ".implode($parameters));
		}

		//notify_slack($first_name, $last_name, $email, $message);

		echo 'Thank you for getting in touch! We will be in contact to assist you.';

		// if(!$mail->send()) {
		//     echo 'Message could not be sent.';
		//     echo 'Mailer Error: ' . $mail->ErrorInfo;
		// } else {
		//     echo 'Thank you for getting in touch! We will be in contact to assist you.';
		// }

	}else {
		// foreach ($form_validation_error_msg as $key => $error_msg) {
		// 	echo $error_msg;
		// }
		echo 'error sending email';
	}
		}
		else{
			echo "<p>You are a bot! Go away!</p>";
		}

}
?>
