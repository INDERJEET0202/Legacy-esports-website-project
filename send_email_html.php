<?php

    // allow for demo mode testing of emails
	define("DEMO", true); // setting to TRUE will stop the email from sending.

	// set the location of the template file to be loaded
	$template_file = "./email_templates/template_email_activation.php";
	// $template_file = "template.php";

	// set the email 'from' information
	$email_from = "Legacy Esports <indrajitdiscord@gmail.com>";

	// create a list of the variables to be swapped in the html template
	$swap_var = array(
		"{SITE_ADDR}" => "https://www.teamlegacyesports.com",
		"{EMAIL_LOGO}" => "https://cdn.discordapp.com/attachments/864240485446451210/864243047192592424/20210713_020310.png",
		"{EMAIL_TITLE}" => "Verification Email from Legacy Esports!",
		"{CUSTOM_URL}" => "http://localhost/teamlegacy/reset_password.php?token=$ ",
		"{CUSTOM_IMG}" => "https://cdn.discordapp.com/attachments/864240485446451210/864241308284878848/20210630_104427.png",
		"{TO_NAME}" => "username",
		"{TO_EMAIL}" => "palindrajit10@gmail.com"
	);

	// create the email headers to being the email
	$email_headers = "From: ".$email_from."\r\nReply-To: ".$email_from."\r\n";
	$email_headers .= "MIME-Version: 1.0\r\n";
	$email_headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // load the email to and subject from the $swap_var
	$email_to = $swap_var['{TO_EMAIL}'];
	$email_subject = $swap_var['{EMAIL_TITLE}']; // you can add time() to get unique subjects for testing: time();

	// load in the template file for processing (after we make sure it exists)
	if (file_exists($template_file))
		$email_message = file_get_contents($template_file);
	else
		die ("Unable to locate your template file");

	// search and replace for predefined variables, like SITE_ADDR, {NAME}, {lOGO}, {CUSTOM_URL} etc
	foreach (array_keys($swap_var) as $key){
		if (strlen($key) > 2 && trim($swap_var[$key]) != '')
			$email_message = str_replace($key, $swap_var[$key], $email_message);
	}

	// display the email template back to the user for final approval
	echo $email_message;

    // check if the email script is in demo mode, if it is then dont actually send an email
	if (DEMO)
		die("<hr /><center>This is a demo of the HTML email to be sent. No email was sent. </center>");

	// send the email out to the user	
	if ( mail($email_to, $email_subject, $email_message, $email_headers) )
		echo '<hr /><center>Success! Your email has been sent to '. $email_to .'</center>';
	else
		echo '<hr /><center> UNSUCCESSFUL... Your email was <b>NOT</b> sent. </center>';

?>