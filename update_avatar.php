<?php
session_start();
ob_start();
define('MYSITE', true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Update Details | Profile</title>
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
      <?php require '_nav.php' ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index">Home</a></li>
          <li>Update</li>
        </ol>
        <h2>Profile Update</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
<?php

    require 'dbcon.php';
    // echo "hi";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

      if (isset($_POST['submit'])){
        
        // if(isset($_GET['token'])){

        // $token = $_GET['token'];
        $email = $_SESSION['email'];
        // echo $email;
        // echo "hello";

        $orig_file = $_FILES["avatar"]["tmp_name"];
        $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = "$target_dir$email.$ext";
        $avatar_size = $_FILES["avatar"]["size"];
        // echo $ext;
        $valaid_file_ext = array('png', 'jpg', 'jpeg','gif');
        if (in_array($ext, $valaid_file_ext)){

        if ($avatar_size > 6000000) {
          echo "<script>alert('File size is too large maximum file size is 5 MB')</script>";
        }
        else {
        $updatequery = " update registration set  `avatar_path` = '$destination' where `email` = '$email' ";

        $iquery = mysqli_query($con, $updatequery);
        
        if($iquery){
          echo "<script>alert('Record Updated')</script>";
          session_start();
          move_uploaded_file($orig_file,$destination);
          session_unset();
          session_destroy();
      
      
          header("location: login");
          
          }
          else
          {
          echo "Failed to update record";
          }
        }
      }
      else{
        echo "<script>alert('Your file format is not supported. Only -> png, jpg, jpeg, gif can be used.')</script>";
      }
    }
  }

?>

        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Avatar Settings</h4>
                <p class="text-center"> <strong> Note </strong>: Image format supported are - png, jpg, jpeg & gif.</p>
                <p>
                <form action = "<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group input-group">
                    

                     <style>
                       .file {
                            visibility: hidden;
                            position: absolute;
                          }
                     </style>

                     <div class="ml-10 col-sm-15" style="
                                                      width: -webkit-fill-available;" >
                        <div id="msg"></div>
                          <input type="file" class="file" id = "avatar" name = "avatar" accept="image/*">
                          <div class="input-group my-3">
                            <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
                            <div class="input-group-append">
                              <button type="button" class="browse btn btn-primary">Browse...</button>
                            </div>
                          </div>
                        </div>
                        <small id = "avatar" class = "form-text text-danger ">• Image Upload is Optional and must be under 5MB</small>
                      <div class="ml-10 col-sm-15">
                        <img src="https://placehold.it/100x100" id="preview" class="img-thumbnail">
                    </div>


                    <script>
                      $(document).on("click", ".browse", function() {
                          var file = $(this).parents().find(".file");
                          file.trigger("click");
                        });
                        $('input[type="file"]').change(function(e) {
                          var fileName = e.target.files[0].name;
                          $("#file").val(fileName);
                        
                          var reader = new FileReader();
                          reader.onload = function(e) {
                            // get loaded data and render thumbnail.
                            document.getElementById("preview").src = e.target.result;
                          };
                          // read the image file as a data URL.
                          reader.readAsDataURL(this.files[0]);
                        });
                    </script>


                     <!-- <div class="custom-file">
                       <input type="file" accept = "image/*" class = "custom-file-input" id = "avatar" name = "avatar" style="cursor: pointer;" >
                       <label for="avatar" class = "custom-file-label" >Choose File</label>
                        <small id = "avatar" class = "form-text text-danger ">• Image Upload is Optional</small>
                     </div> -->
                     
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"  checked>
                              <label class="form-check-label" style = "padding-bottom: 10px;" for="flexCheckChecked">
                                You will be logged out after you update your details. Please login again !
                              </label>
                            </div>
                        <button type="submit" name = "submit"  class="btn btn-primary btn-block"> Update Avatar </button>
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
        <a href="index.php" class="logo d-flex align-items-center">
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