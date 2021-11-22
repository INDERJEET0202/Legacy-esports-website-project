<?php
if(!defined('MYSITE')){
    echo ("<h1> You can't access this page</h1>");
    die();
  }
  
$server = "localhost";
$user = "root";
$password = "";
$db = "emailphp";

// $server = "localhost";
// $user = "teamlega_teamlegacy";
// $password = "1UI5^N~.L2kN";
// $db = "teamlega_users";


$con = mysqli_connect($server, $user, $password, $db);
if(!$con){
    //     echo "successfully connected";
    
    // }
    // else{
        die("Error" . mysqli_connect_error());
    }

?>