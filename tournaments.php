<?php
session_start();
define('MYSITE', true);
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header("location: login");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TeamLegacy Esports - Inner Page</title>
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
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="loader-style.css">


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
    
    <?php require '_nav.php' ?>

    <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index">Home</a></li>
          <li>Tournaments</li>
        </ol>
        <h2>Tournaments</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page" style = "padding: 0px 0px;" >

        <!-- ======= Scrims Section ======= -->
        <section id="hero" class="hero3 d-flex align-items-center">

            <div class="container">
              <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                  <h1 data-aos="fade-up" style = " font-family: 'Poppins';font-size: 19px; " class="aos-init aos-animate" >Welcome to Our Tournaments Section, Register to Our Upcoming Tournaments and Win Big Prizes</h1>
                  <!-- <h2 data-aos="fade-up" data-aos-delay="400" style="
                  color: rgb(255, 255, 255);">Play FREEFIRE Weekly Scrims in TeamLegacy Esports .. Battle with other Top Tier Teams / Professionals and Underdogs To Keep Grinding Your Team . Participate and get exclusive rewards only on TeamLegacy Esports.</h2> -->
                  <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                      <!-- <a href="https://discord.gg/Fd6EwQv6kA" target="_blank" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Play Now</span>
                        <i class="bi bi-arrow-right"></i>
                      </a> -->
                    </div>
                  </div>
                </div>
                <!-- <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                  <img src="https://media.discordapp.net/attachments/847473868192743424/873305018244149289/20210807_020930.jpg" class="img-fluid" alt="">
                </div> -->
              </div>
            </div>
      
          </section><!-- End Hero -->
      
          <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
      <h1 data-aos="fade-up">FREEFIRE INFINITY SERIES</h1>
      <h2 data-aos="fade-up" data-aos-delay="400" style="
      color: black;">FreeFire Infinity Series ( Phase II ) in going on in our DISCORD server with an overall PRIZEOOL of 15k INR. Wanna register? Join DISCORD now !!!</h2>
      <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          <a href="https://discord.gg/Fd6EwQv6kA" target="_blank" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Register Now</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="https://media.discordapp.net/attachments/847473868192743424/873305018244149289/20210807_020930.jpg" class="img-fluid" alt="">
    </div>
  </div>


</section><!-- End Hero -->
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