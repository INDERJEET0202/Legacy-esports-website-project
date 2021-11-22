<?php

// if(!defined('MYSITE')){
//   echo ("<h1> You can't access this page</h1>");
//   die();
// }


session_start();
session_regenerate_id(true);
define('MYSITE', true);
ob_start();
if(!isset($_SESSION['AdminLoginId']) || $_SESSION['AdminLoginId'] != true){
  header("location: index");
  exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TeamLegacy Esports - Admin Panel</title>
    <meta content="official website of teamlegacy esports" name="description">
    <meta content="TeamLegacy eSports - Legacy eSports" name="og:title">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta content="https://teamlegacyesports.com" name="og:url">
    <meta property="og:site_name" content="Teamlegacy eSports ">
    <meta name="twitter:description"
        content="Team Legacy Esports is a not-for-profit organization with the responsibility to promote , grow and develop the quality , diversity and beauty of Esports">
    <meta property="og:image"
        content="https://cdn.discordapp.com/attachments/864240485446451210/864243047192592424/20210713_020310.png">
    <meta content="teamlegacyesports, esports, discord" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/tl-logo-2.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

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
    var preloader = document.getElementById('loading');

    function myFunction() {
        preloader.style.display = 'none';
    }
    </script>

    <!-- LOADER END -->
    <!-- ======= Header ======= -->

    <?php require '_nav.php';
          require 'dbcon.php';
    
    ?>

    <!-- End Header -->
    <?php 

      if(isset($_POST['logout']))
      {

        session_unset($_SESSION['AdminLoginId']);
        session_destroy();
    
        header("location: index");
      }

      ?>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index">Home</a></li>
                    <li>Admin Panel</li>
                </ol>
                <h3>You are logged in as Admin</h3>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <p>
                    Welcome to Admin Panel  - You are logged in as <strong> <?php echo $_SESSION['AdminLoginId']; ?> </strong>
                </p>

                <div class="table-responsive-sm">
                    <table class="table table-striped table-dark" id="myTable" 
                    style="
                                color: violet;
                                padding-top: 10px;
                                padding-bottom: 10px;" >
                                <hr>
                        <thead>
                            <tr>
                                <th scope="col">S.No</th>
                                <!-- <th scope="col">User Image</th> -->
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">UID</th>
                                <th scope="col">IGN</th>
                                <th scope="col">Status</th>
                                <th scope="col">Avatar</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          
                            $selectquery = " select * from registration ";
                            $query = mysqli_query($con, $selectquery);
                            $num = mysqli_num_rows($query);
                            $sno = 0;
                            while($row = mysqli_fetch_assoc($query)){
                              $sno = $sno + 1;
                              echo "<tr>
                              <th scope='row'>". $sno . "</th>
                              <td>". $row['username'] . "</td>
                              <td>". $row['email'] . "</td>
                              <td>". $row['uid'] . "</td>
                              <td>". $row['ign'] . "</td>
                              <td>". $row['status'] . "</td>
                              <td><img src='".$row['avatar_path']."' alt='n/a' width='40' height='40'></td>
                          </tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
                
                <h2 style="
    font-family: 'Titillium Web';
    font-size: revert;
    color: #783ca0;" > Total no. of registered Members are - <?php echo " $num "  ?> </h2>

                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <button type="submit" name="logout" class="btn btn-default btn-sm" style="
                                                                                border: 2px solid white;
                                                                                padding: 7px 19px;
                                                                                border-radius: 13px;
                                                                                background: black;
                                                                                color: white;
                                                                                margin: 1rem 0rem;">
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                    </button>
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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }



        .wrapper .button {
            display: inline-block;
            height: 60px;
            width: 60px;
            /* float: center; */
            margin: 0 50px;
            overflow: hidden;
            background: #fff;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-out;
        }

        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 50px;

        }

        .wrapper .button:hover {
            width: 200px;
        }

        .wrapper .button .icon {
            display: inline-block;
            height: 60px;
            width: 60px;
            text-align: center;
            border-radius: 50px;
            box-sizing: border-box;
            line-height: 60px;
            transition: all 0.3s ease-out;
        }

        .wrapper .button:nth-child(1):hover .icon {
            background: #4267B2;
        }

        .wrapper .button:nth-child(2):hover .icon {
            background: #1DA1F2;
        }

        .wrapper .button:nth-child(3):hover .icon {
            background: #E1306C;
        }

        .wrapper .button:nth-child(4):hover .icon {
            background: #5865F2;
        }

        .wrapper .button:nth-child(5):hover .icon {
            background: #ff0000;
        }

        .wrapper .button .icon i {
            font-size: 25px;
            line-height: 60px;
            transition: all 0.3s ease-out;
        }

        .wrapper .button:hover .icon i {
            color: #fff;
        }

        .wrapper .button span {
            font-size: 20px;
            font-weight: 500;
            line-height: 60px;
            margin-left: 10px;
            transition: all 0.3s ease-out;
        }

        .wrapper .button:nth-child(1) span {
            color: #4267B2;
        }

        .wrapper .button:nth-child(2) span {
            color: #1DA1F2;
        }

        .wrapper .button:nth-child(3) span {
            color: #E1306C;
        }

        .wrapper .button:nth-child(4) span {
            color: #5865F2;
        }

        .wrapper .button:nth-child(5) span {
            color: #ff0000;
        }

        @media (max-width: 992px) {
            .wrapper {
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
                <a href="https://www.youtube.com/channel/UCfdgkhQv7lRz0GyX-XY4n3Q"
                    target="_blank"><span>YouTube</span></a>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index" class="logo d-flex align-items-center">
                            <img src="https://cdn.discordapp.com/attachments/864240485446451210/864241191791886336/TL_Esports_Management_20210624_163801.jpg"
                                alt="">
                            <span>TEAMLEGACY ESPORTS</span>
                        </a>
                        <p>TeamLegacy Esports is an all new automated Esports platform for both Players and Organizers .
                            TeamLegacy esports provide the platform for the gamers to showcase their skills and nurture
                            their talents. Gaming is still been criticised in India. We hope to change that and
                            encourage youth to come and play with us</p>
                        <div class="social-links mt-3">
                            <a href="https://discord.gg/Fd6EwQv6kA" class="discord"><i class="bi bi-discord"></i></a>
                            <a href="https://youtube.com/c/TeamLegacyEsports" class="youtube"><i
                                    class="bi bi-youtube"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/teamlegacy_esports/" class="instagram"><i
                                    class="bi bi-instagram bx bxl-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/team-legacy-esports" class="linkedin"><i
                                    class="bi bi-linkedin bx bxl-linkedin"></i></a>
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
                            <li><i class="bi bi-chevron-right"></i> <a href="index#portfolio">Previous
                                    Tournaments</a></li>
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
                Brought to you by <a href="https://www.instagram.com/i_n_d_r_a_j_i_t_02/"> iNDRAjiT</a> <br>
                Developed by <a href="https://www.facebook.com/profile.php?id=100033803686797"> iNDRAjiT</a> <br>
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();

        });
    </script>

</body>

</html>