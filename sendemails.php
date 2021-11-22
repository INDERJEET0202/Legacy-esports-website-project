<?php

// Basic Email to send
$to_email = "palindrajit10@gmail.com";
$subject = "Simple Email Test via PHP";


// Email Headers
$headers = "From: LegacyEsports <indrajitdiscord@gmail.com>\r\n";
$headers .= "MIME_Version: 1.0\r\n ";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


// Create the HTML message
$body = "<html>  
    <body>
        <h1>Check Out this message</h1>
    </body>
</html>";


if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

?>     