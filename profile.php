<?php
session_start();
ob_start();
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

  <title>Profile | <?php echo $_SESSION['username']; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

  <!-- =======================================================
  * Template Name: FlexStart - v1.4.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
          <li>Profile</li>
        </ol>
        <h2 style="
    font-family: 'Titillium Web';
    letter-spacing: 1px;
" >WELCOME : <?php echo $_SESSION['username']; ?> </h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
      <div class="container">
    <div class="main-body">
            
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo empty($_SESSION['avatar_path']) ? "uploads/profile.jpg" : $_SESSION['avatar_path'] ; ?>" alt="user image" class="rounded-circle" >
                    <style>
                      .rounded-circle {
                                display: inline-block;
                                width: 150px;
                                height: 150px;
                                border-radius: 50%;

                                background-repeat: no-repeat;
                                background-position: center center;
                                background-size: cover;
                                
                                box-shadow: 0px 4px 9px 1px rgba(0,0,0,0.42);
                                -webkit-box-shadow: 0px 4px 9px 1px rgba(0,0,0,0.42);
                                -moz-box-shadow: 0px 4px 9px 1px rgba(0,0,0,0.42);
                                }
                    </style>
                    <div class="mt-3">
                      <h4><?php echo $_SESSION['username']; ?></h4>
                      <p class="text-secondary mb-3"><?php echo $_SESSION['bio']; ?></p>
                      <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                      <!-- <button class="btn btn-primary">Change Image</button> -->
                      <a class="btn btn-primary " href="update_avatar">Change Image</a>
                      <!-- <button class="btn btn-outline-primary">Message</button> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                    <span class="text-secondary">https://bootdey.com</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary">@bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                </ul>
              </div> -->
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['username']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['email']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['mobile']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Game UID </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['uid']; ?>
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">In Game Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['ign']; ?>
                    </div>
                  </div> 
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " href="update">Edit Details</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->



            </div>
          </div>

        </div>
    </div>
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
          <li><i class="bi bi-chevron-right"></i> <a href="indexinner-page.html">Tournaments</a></li>
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