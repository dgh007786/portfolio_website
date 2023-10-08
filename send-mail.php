<?php

	// site owner
	$site_name = 'Gunjan Dayani Portfolio';
	$sender_domain = 'dgh007786007@gmail.com';
	$to = 'gunjandayani015@gmail.com';
	
	// contact form fields
	$name = trim( $_POST['name'] );
	$email = trim( $_POST['email'] );
	$subject = trim( $_POST['subject'] );
	$message = trim( $_POST['message'] );
	
	// check for error
	$error = false;
	if ( $name === "" ) { $error = true; }
	if ( $email === "" ) { $error = true; }
	if ( $subject === "" ) { $error = true; }
	if ( $message === "" ) { $error = true; }
	
	if(isset($_POST['url']) && $_POST['url'] == ''){
		 
		if ( $error == false )
		{
			$body = "Name: $name \n\nEmail: $email \n\nMessage: $message";
			
			$headers = "From: " . $site_name . ' <' . $sender_domain . '> ' . "\r\n";
			$headers .= "Reply-To: " . $name . ' <' . $email . '> ' . "\r\n";
			
			$mail_result = mail( $to, $subject, $body, $headers );
			
			if ( $mail_result == true )
				{ echo 'success'; }
			else
				{ echo 'unsuccess'; }
		}
		else // not validated
		{
			echo 'error';
		}
		// end if
		 
	}
	else // BOT DETECTED - lets lie to it 
	{
		//echo "Thanks, We'll get back to you as soon as possible";
		echo 'success';
	}
	
?>