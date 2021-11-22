<?php
session_start();
if(isset($_SESSION['loggedin'])){
  header('location:index');
  die();
}
ob_start();
define('MYSITE', true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TeamLegacy Esports - Signup</title>
  <meta content="official website of teamlegacy esports" name="description">
  <meta content="teamlegacy esports" name="og:title">
  <meta content="https://teamlegacyesports.com" name="og:url">
  <meta content="teamlegacyesports, esports, discord" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/tl-logo-2.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="signup/css/style-2.css">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="loader-style.css">
  <?php include 'signup/links/links.php' ?>


</head>

<body onload="myFunction()">

  <!-- LOADER -->
  
  <div id="loading" class="loader-wrapper">
    <!-- <div class="text"><h1>TEAMLEGACY ESPORTS</h1></div> -->
      <div class="center">
        <div class="down">
          <div class="up">
            <div class="squeeze">
              <div class="rotate-in">
                <div class="rotate-out">
                  <div class="square" align="center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow"></div>
      </div>
    </div>
    <script>

      var preloader  = document.getElementById('loading');
  
      function myFunction(){
        preloader.style.display = 'none';
      }
  
    </script>
  
    <!-- LOADER END -->
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span>TEAMLEGACY ESPORTS</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index#hero" style="
          padding-right: 30px;
      " >HOME</a></li>
          <!-- <li><a class="nav-link scrollto" href="inner-page.php">TOURNAMENT</a></li> -->
          <li class="dropdown"><a href="#"><span>TOURNAMENT</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index#services">Our Games</a></li>
              <li><a href="inner-page">Running Tournaments</a></li>
              <li><a href="index#portfolio">Past Tournaments</a></li>
            </ul>
          </li> 
          <li><a class="nav-link scrollto" href="blog">BLOGS</a></li>
          <li><a class="nav-link scrollto" href="#footer">SOCIALS</a></li>
          <li><a class="nav-link scrollto" href="#team">TEAM</a></li>
          <li><a href="#about">ABOUT US</a></li>
           <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="inner-page">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <hr style="margin: 0px">
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>  -->
          <li><a class="nav-link scrollto" href="#contact">CONTACT US</a></li>
          <li><a class="getstarted scrollto" href="login">LOGIN</a></li>
          <li><a class="signup" href="register">SIGNUP</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index">Home</a></li>
          <li>Signup</li>
        </ol>
        <h2>Signup</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
      <?php

include 'dbcon.php';

if (isset($_POST['submit'])){
    $username = mysqli_real_escape_string($con, $_POST['username']) ;
    $email = mysqli_real_escape_string($con, $_POST['email']) ;
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']) ;
    $password = mysqli_real_escape_string($con, $_POST['password']) ;
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']) ;

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $token = bin2hex(random_bytes(15));

    $emailquery = "select * from registration where email = '$email' ";
    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ERROR!</strong> Email already exists !!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }else{
        if($password === $cpassword){

            $insertquery = "insert into registration( username, email, mobile, password, cpassword, token, status) values('$username' ,'$email' ,'$mobile', '$pass' ,'$cpass', '$token', 'inactive')"; 

            $iquery = mysqli_query($con, $insertquery);

            if($iquery){
                
                    // allow for demo mode testing of emails
	                  define("DEMO", false); // setting to TRUE will stop the email from sending.
                  
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
	                  	"{CUSTOM_URL}" => "http://localhost/teamlegacy/activate.php?token=$token ",
	                  	"{CUSTOM_IMG}" => "https://cdn.discordapp.com/attachments/864240485446451210/864241308284878848/20210630_104427.png",
	                  	"{TO_NAME}" => "$username",
	                  	"{TO_EMAIL}" => "$email"
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
	                  // echo $email_message;
                  
                      // check if the email script is in demo mode, if it is then dont actually send an email
	                  if (DEMO)
	                  	die("<hr /><center>This is a demo of the HTML email to be sent. No email was sent. </center>");
                  
	                  // send the email out to the user	
	                  if ( mail($email_to, $email_subject, $email_message, $email_headers) ) {
                    $_SESSION['msg'] = ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> We have sent you a confirmation link to your e-mail '. $email . '. Please check your inbox.  
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> ';
                    header("location: login");
                } else {
                    echo "Email sending failed...";
                }
            }else{
                ?>
                <script>
                    alert("No connection");
                </script>
                <?php
            }
        
        }else{

            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>ERROR!</strong> Password is not matching please recheck the passaword !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
    }

}


?>

      <div class="card2 bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Create Account</h4>
                <p class="text-center">Get started with your free account</p>
                <p>
                    <!-- <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a> -->
                    <!-- <a href="construction.php" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via
                        facebook</a>
                    <a href="construction.php" class="btn btn-block btn-google">
                        <i class="fab fa-google"></i>   Login with Google
                    </a>
                </p>
                <p class="divider-text">
                    <span class="bg-light">OR</span>
                </p> -->
                <form action = "<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="username" class="form-control" placeholder="Full name"  type="text" required >
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="email" class="form-control" placeholder="email address"  type="email" required >
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <input name="mobile" class="form-control" placeholder="Phone number" type="text" required >
                    </div> <!-- form-group// -->

                    <!-- form-group end.// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Create password" name = "password"  type="password" required >
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Repeat password"  name = "cpassword" type="password" required >
                    </div> <!-- form-group// -->
                        <button type="submit" name = "submit"  class="btn btn-primary btn-block"> Create Account </button>
                        <br>
                        <p class="text-center">Have an account? <a href="login">Log In</a> </p>
                      </div> <!-- form-group// -->
                </form>
          </div>
    </section>

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

<div class="footer-newsletter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 text-center">
        <h4>NEWSLETTER</h4>
        <p>Subscribe to our newsletter and get all updates at your earliest !!</p>
      </div>
      <div class="col-lg-6">
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>
    </div>
  </div>
</div>


<style>
  
  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
 *{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: 'Poppins', sans-serif;
 }

 
 
 .wrapper .button{
   display: inline-block;
   height: 60px;
   width: 60px;
   /* float: center; */
   margin: 0 50px;
   overflow: hidden;
   background: #fff;
   border-radius: 50px;
   cursor: pointer;
   box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
   transition: all 0.3s ease-out;
 }
 .wrapper{
   display: flex;
   justify-content: center;
   align-items: center;
   padding-bottom: 50px;

 }
 .wrapper .button:hover{
   width: 200px;
 }
 .wrapper .button .icon{
   display: inline-block;
   height: 60px;
   width: 60px;
   text-align: center;
   border-radius: 50px;
   box-sizing: border-box;
   line-height: 60px;
   transition: all 0.3s ease-out;
 }
 .wrapper .button:nth-child(1):hover .icon{
   background: #4267B2;
 }
 .wrapper .button:nth-child(2):hover .icon{
   background: #1DA1F2;
 }
 .wrapper .button:nth-child(3):hover .icon{
   background: #E1306C;
 }
 .wrapper .button:nth-child(4):hover .icon{
   background: #5865F2;
 }
 .wrapper .button:nth-child(5):hover .icon{
   background: #ff0000;
 }
 .wrapper .button .icon i{
   font-size: 25px;
   line-height: 60px;
   transition: all 0.3s ease-out;
 }
 .wrapper .button:hover .icon i{
   color: #fff;
 }
 .wrapper .button span{
   font-size: 20px;
   font-weight: 500;
   line-height: 60px;
   margin-left: 10px;
   transition: all 0.3s ease-out;
 }
 .wrapper .button:nth-child(1) span{
   color: #4267B2;
 }
 .wrapper .button:nth-child(2) span{
   color: #1DA1F2;
 }
 .wrapper .button:nth-child(3) span{
   color: #E1306C;
 }
 .wrapper .button:nth-child(4) span{
   color: #5865F2;
 }
 .wrapper .button:nth-child(5) span{
   color: #ff0000;
 }

 @media (max-width: 992px){
      .wrapper{
        display: block;
      }
 }
     </style>
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   

     <div class="wrapper" data-aos="fade-up">
           <div class="button">
             <div class="icon"><i class="fab fa-facebook-f"></i></div>
             <a href="https://www.facebook.com/" target="_blank"><span>Facebook</span></a>
           </div>
           <div class="button">
             <div class="icon"><i class="fab fa-linkedin"></i></div>
             <a href="https://www.linkedin.com/company/team-legacy-esports" target="_blank"><span>LinkedIn</span></a>
           </div>
           <div class="button">
             <div class="icon"><i class="fab fa-instagram"></i></div>
             <a href="https://www.instagram.com/teamlegacy_esports/" target="_blank"><span>Instagram</span></a>
           </div>
           <div class="button">
             <div class="icon"><i class="fab fa-discord"></i></div>
             <a href="https://discord.gg/Fd6EwQv6kA" target="_blank"><span>Discord</span></a>
           </div>
           <div class="button">
             <div class="icon"><i class="fab fa-youtube"></i></div>
             <a href="https://www.youtube.com/channel/UCfdgkhQv7lRz0GyX-XY4n3Q" target="_blank"><span>YouTube</span></a>
           </div>
         </div>

<div class="footer-top">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index" class="logo d-flex align-items-center">
          <img src="https://cdn.discordapp.com/attachments/864240485446451210/864241191791886336/TL_Esports_Management_20210624_163801.jpg" alt="">
          <span>TEAMLEGACY ESPORTS</span>
        </a>
        <p>TeamLegacy Esports is an all new automated Esports platform for both Players and Organizers . TeamLegacy esports provide the platform for the gamers to showcase their skills and nurture their talents. Gaming is still been criticised in India. We hope to change that and encourage youth to come and play with us</p>
        <div class="social-links mt-3">
          <a href="https://discord.gg/Fd6EwQv6kA" class="discord"><i class="bi bi-discord"></i></a>
          <a href="https://youtube.com/c/TeamLegacyEsports" class="youtube"><i class="bi bi-youtube"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/teamlegacy_esports/" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/company/team-legacy-esports" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="index#hero">Home</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="index#about">About us</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="index#services">Our Games</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Links</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="tournaments">Tournaments</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="index#portfolio">Previous Tournaments</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="index#team">Team</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="index#faq">F.A.Q</a></li>
          <!-- <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
        </ul>
      </div>

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contact Us</h4>
        <p>
          18/3 Kalikapur Purbapally <br>
          Kolkata, West Bengal 700099<br>
          India <br><br>
          <strong>Phone:</strong> +91 9875546960<br>
          <strong>Email:</strong> subho@teamlegacyesports.com<br>
        </p>

      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
    &copy; Copyright 2021 <strong><span>TeamlegacyEsports</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
    Brought to you by <a href="https://www.instagram.com/i_n_d_r_a_j_i_t_02/"> iNDRAjiT</a> <br>
    Developed by <a href="https://www.facebook.com/profile.php?id=100033803686797"> iNDRAjiT</a> <br>
    <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
  </div>
</div>
</footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>