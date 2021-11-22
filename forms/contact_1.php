<?php

$message_sent = false;

if(isset ($_POST['email']) && $_POST['email'] != ''){

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){


        // Submit the form..
    $username = $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = $_POST['subject'];
    $message = $_POST['message'];

    // $to = "palindrajit10@gmail.com";
    $to = "clutchgodff7777@gmail.com";
    $body = "";

    $body .= "Form: ".$username . "\r\n";
    $body .= "Email: ".$userEmail . "\r\n";
    $body .= "Message: ".$message . "\r\n";

    // Email Headers
    $headers = "MIME_Version: 1.0". "\r\n ";
    $headers = "Content-Type:text/html;charset=UTF-8" . " \r\n";

    //additional headers
        $headers .= "From: ".$username . "<" .$userEmail . ">" . "\r\n";



    mail($to, $messageSubject, $body, $headers);

    $message_sent = true;
    
    }else{
        $invalid_class_name = "form-invalid";
      }
    


}



?>