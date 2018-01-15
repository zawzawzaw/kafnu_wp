<?php
header('Access-Control-Allow-Origin: *');

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
	$country_id=$_POST['country_id'];

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
      // 'secret' => '6LfNrzsUAAAAAPbWP9AHQ4wp0LLQTsjOd2MILJil',
			'secret' => '6Lf-OzEUAAAAAMgrqAlp4QH1thhY7I1ynSySHqYn',
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
     //Check Condition for country code
     if($country_id != 'general'){
       $Ndata = new stdClass();
       $Ndata->FullName = $first_name . " ". $last_name;
       $Ndata->Email = $email;
       if($country_id == 1095){
         $Ndata->AddedBusinesses = [427337923, 428422995];
         $Ndata->InvoicingBusinessId = 428422995;
       }
       else{
         $Ndata->AddedBusinesses = [427337923, 406046646];
         $Ndata->InvoicingBusinessId = 406046646;
       }
       $Ndata->Notes = $message;
       $Ndata->SimpleTimeZoneId = 2043;
       $Ndata->CountryId = $country_id;
       $Ndata->CreateUser = false;

       $request = json_encode($Ndata, JSON_UNESCAPED_UNICODE);
        // echo '<script type=text/javascript> $("#contact-form")[0].reset(); grecaptcha.reset(); </script>';
       // print_r($request);
       // die();
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, NAX_CONTACT_URL);
       curl_setopt($ch, CURLOPT_POST, count($request));
       curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($ch, CURLOPT_USERPWD, NAX_API_USER);
       curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
       curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Accept: application/json'
       ));


       $result = curl_exec($ch);
       $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

       curl_close($ch);
       // print_r($httpcode);
       $response = json_decode($result);

       if($httpcode == 200){
         $sendingApiStatus = 1;

       }
       else{
         $sendingApiStatus = 0;
       }
       // Create connection


       // removed stuff
       $db_user = DB_USER;
       $db_hostname = DB_HOST;
       $db_password = DB_PASSWORD;

       $ip_address = $_SERVER['REMOTE_ADDR'];
       if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
           $ip_address = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
       }

       $language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
       //$conn = new mysqli_connect($db_hostname, $db_user, $db_password);
       // $db = new PDO('mysql:host='.$db_hostname.';dbname=wp_kafnu', $db_user, $db_password);
       // $db = new PDO('mysql:host='.$db_hostname.';dbname=kafnu_contacts', $db_user, $db_password);
       //$db = new PDO('mysql:host='.$db_hostname.';dbname=kafnudb', $db_user, $db_password);
       $db = new PDO('mysql:host='.$db_hostname.';dbname=kafnudb', $db_user, $db_password);

       //$q1 = $db->prepare("insert into kafnu_contact(id) values (:value)");
       //$q1->execute(array("value" => 2));

       $query = $db->prepare("INSERT INTO kafnu_contact (first_name, last_name, email, message, ip_address, language, status, api_status) VALUES (:first_name, :last_name, :email, :message, :ipaddress, :language, :status, :api_status)");

       $parameters = array(
         ":first_name" => $first_name,
         ":last_name" => $last_name,
         ":email" => $email,
         ":message" => $message,
         ":ipaddress" => $ip_address,
         ":language" => $language,
         ":status" => 1,
         ":api_status" => $sendingApiStatus
       );
       $query->execute($parameters);
       if($query->rowCount() == 0) {
         error_log("Error inserting db record: ".implode($parameters));
       }


       //notify_slack($first_name, $last_name, $email, $message);

       // echo 'Thank you for getting in touch! We will be in contact to assist you.';

       // if(!$mail->send()) {
       //     echo 'Message could not be sent.';
       //     echo 'Mailer Error: ' . $mail->ErrorInfo;
       // } else {
       //     echo 'Thank you for getting in touch! We will be in contact to assist you.';
       // }
     }
     else{
       // Create connection


   		// removed stuff
      $db_user = DB_USER;
      $db_hostname = DB_HOST;
      $db_password = DB_PASSWORD;

   		$ip_address = $_SERVER['REMOTE_ADDR'];
   		if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
   		    $ip_address = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
   		}

   		$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
   		$db = new PDO('mysql:host='.$db_hostname.';dbname=kafnudb', $db_user, $db_password);

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
     }

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
