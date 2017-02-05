<?php
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = array('secret' => '6LdalxMUAAAAAHrzEg5_q38S3hPyGvve08q_CUOV', 'response' => $_POST["g-recaptcha-response"]);

  // use key 'http' even if you send the request to https://...
  $options = array(
  	  'http' => array(
	      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	      'method'  => 'POST',
	      'content' => http_build_query($data),
	  ),
  );
  $context  = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
  if ($result === FALSE) {
  	echo "captcha";
  }
  else
  {
    $result = json_decode($result);
  }

  $email = $_POST["email"];
  $nachricht = $_POST["message"];

  // Mail settings
  // $recipient = 'info@urologie-seseke.de';
  $recipient = 'info@chko.org';
  $subject = 'Neue Nachricht';
  $mailheader = 'von: ' . $email;

  if ($result->success) { // check captcha
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // check email
		$content = $nachricht;
		mail($recipient, $subject, $content, $mailheader) or die('server');
		echo "true";
	}else{
		echo "email";
	}
  }else{
	echo "captcha";
  }
 ?>
