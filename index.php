<?php
session_start();
ob_start();
define('MYSITE', true);
// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
//   header("location: login");
//   exit;

// }
?>


<?php
 require("forms/contact_1.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Legacy Esports</title>
  <meta content="official website of teamlegacy esports" name="description">
  <meta content="TeamLegacy eSports - Legacy eSports" name="og:title">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en_US">
  <meta content="https://teamlegacyesports.com" name="og:url">
  <meta property="og:site_name" content="Teamlegacy eSports ">
  <meta name="twitter:description" content="Team Legacy Esports is a not-for-profit organization with the responsibility to promote , grow and develop the quality , diversity and beauty of Esports">
  <meta property="og:image" content="https://cdn.discordapp.com/attachments/864240485446451210/864243047192592424/20210713_020310.png">
  <meta content="teamlegacyesports, esports, discord" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/les-logo-transparent.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/loader-style.css">


</head>
<body onload="myFunction()">

<!-- LOADER -->

  <div id="loading" class="loader-wrapper">
    <div class="text" ><h1>LEGACY ESPORTS</h1></div>
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
  

  <!-- LOADER END -->
  <!-- ======= Header ======= -->
  <div class="home">
        <?php require '_nav.php' ?>
        </div>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up" style="font-size: 37px;">FREE FIRE CHAMPIONSHIP SEASON 2</h1>
          <h2 data-aos="fade-up" data-aos-delay="400" style="
          color: white;"> Here we are back again with FreeFire Championship season 2 with an overall PRIZEPOOL of 15k INR. Wanna register? Join DISCORD now !!!</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="tournaments" target="_blank" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Register Now</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="https://cdn.discordapp.com/attachments/864240485446451210/894268147761295432/championship-s2.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Who We Are</h3>
              <h2>ABOUT US - <span> LEGACY ESPORTS </span> </h2>
              <p>
                Legacy Esports is a not-for-profit organization with the responsibility to promote , grow and develop the quality , diversity and beauty of Esports . As part of the fabric of our communities and our day-to-day life for now and generations to come . Most importantly to nurture , inspire and protect athletes and the Esports culture . Our ambition is to unite all esports stake holders , including athletes , event organizers , technology producers , innovators , and inventors , IP holders , parents , sponsors and fans.
              </p>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/about-us.png" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our PURPOSE</h2>
          <p>PURPOSE OF - <span> LEGACY ESPORTS </span> </p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/our-games.png" class="img-fluid" alt="">
              <h3>OUR GAMES</h3>
              <p>We provide a wide range of games that you can play and grow and become a professional player in Indian eSports </p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <img src="assets/img/grow-esports.png" class="img-fluid" alt="">
              <h3>GROW ESPORTS</h3>
              <p>We provide great Multi platform Esports Games. Join us in the journey of become a Professional esport player by playing your favorite esports game</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
              <img src="assets/img/our-teams.png" class="img-fluid" alt="">
              <h3>TEAM TLES</h3>
              <p>Need Help in any Tournament ? We're committed to providing the best service & support to customers By continuously improving our people & processes we aim to be best in class.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">
        
        <header class="section-header">
          <!-- <h2>We have crossed</h2> -->
          <p>WE HAVE CROSSED</p>
        </header>
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <a href="https://discord.gg/Fd6EwQv6kA" target="_blank"> <i class="bi bi-discord"></i></a>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="6600" data-purecounter-duration="1" class="purecounter"></span>
                <p> on Discord</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <a href="https://youtube.com/c/TeamLegacyEsports" target="_blank"> <i class="bi bi-youtube" style="color: #ff0000;"></i></a>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="12700" data-purecounter-duration="1" class="purecounter"></span>
                <p> on Youtube</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <a href="https://www.instagram.com/teamlegacy_esports/" target="_blank"><i class="bi bi-instagram" style="color: #ff0080;"></i></a>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter"></span>
                <p> on Instagram</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <a href="https://discord.gg/Fd6EwQv6kA" target="_blank"><i class="bi bi-twitter" style="color: #0084ff;"></i></a>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>on Twitter</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>WHAT WE PROVIDE</h2>
          <p>WHAT <span>LEGACY ESPORTS</span> PROVIDES?</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <img src="assets/img/features.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Passion & Commitment</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Honesty & Openness</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>One Team</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Enriched Gaming Experience</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>24/7 Support</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Wide-ranging Games</h3>
                </div>
              </div>

            </div>
          </div>

        </div> <!-- / row -->

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-6">
            <h3>Legacy Esports has been providing a great user experience in Management & Production</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Management</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Production</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab3">Marketing</a>
              </li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">
                <p>We bring a fresh perspective and infectious energy to every esports game tournament we manage. Our tournaments are filled with positive enthusiast esports players and our team is always present for their support.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Awesome Management</h4>
                </div>
                <p>Our team ensures events runs smoothly as planned</p>
                <!-- <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p> -->
              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">
                <p>We have our own Production work where we focus on quality and innovative design of the media,streams and videos of our esports tournament to look it highly professional. This provide the better crowd engagement to our platform.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>A class Production Team</h4>
                </div>
                <p>Our in-house team ensures to provide the best class creatives along with high-quality stream production</p>
                <!-- <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p> -->
              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">
                <p>
                  Our marketing executives aim to maximise profits through developing sales strategies that match customer requirements and by promoting products, services or ideas. Marketing executives develop and oversee marketing campaigns to promote products and services.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Marketing on every social platforms</h4>
                </div>
                <p>Our team make sure that we use every channel to reach our audience</p>
                <!-- <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p> -->
              </div>
              <!-- End Tab 3 Content -->

            </div>

          </div>

          <div class="col-lg-6">
            <img src="assets/img/features-2.png" class="img-fluid" alt="">
          </div>

        </div><!-- End Feature Tabs -->

        <!-- Feature Icons -->
        <div class="row feature-icons" data-aos="fade-up">
          <h3>WHY - <span> LEGACY ESPORTS </span> ?</h3>

          <div class="row">

            <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
              <img src="assets/img/features-3.png" class="img-fluid p-4" alt="">
            </div>

            <div class="col-xl-8 d-flex content">
              <div class="row align-self-center gy-4">

                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="ri-line-chart-line"></i>
                  <div>
                    <h4>Worldclass Platform</h4>
                    <p>Legacy Esports's platform is built using worldclass technologies for worldclass players</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="ri-gamepad-fill"></i>
                  <div>
                    <h4>Wide-ranging Games</h4>
                    <p>We help you participate tournaments and matches across multiple games</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="ri-award-fill"></i>
                  <div>
                    <h4>Compete with the Best</h4>
                    <p>Gives you an opportunity to compete with the best players in e-sports</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="ri-bookmark-3-fill"></i>
                  <div>
                    <h4>Enriched Gaming Experience</h4>
                    <p>You receive the best in class gaming experience for every single game that you play.</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="ri-shield-star-fill"></i>
                  <div>
                    <h4>Top Rated</h4>
                    <p>Legacy Esports is a highly rated community across the players in Discord Community</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="fas fa-money-bill-alt"></i>
                  <div>
                    <h4>Play and Earn</h4>
                    <p>At Legacy Esports, the more you play, the more you earn and the more you earn, the more you play</p>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div><!-- End Feature Icons -->

      </div>

    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>OUR GAMES</h2>
          <p>GAMES - <span>LEGACY ESPORTS</span> </p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <!-- <i class="ri-discuss-line icon"></i> -->
              <img src="assets/img/games/freefire.png" alt="FreeFire Image">
              <h3>FREE FIRE</h3>
              <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
              <a href="https://ff.garena.com/" target="_blank" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <!-- <i class="ri-discuss-line icon"></i> -->
              <img src="assets/img/games/valorant.png" alt="Valorant Image">
              <h3>VALORANT</h3>
              <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
              <a href="https://playvalorant.com/en-us/" target="_blank" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <!-- <i class="ri-discuss-line icon"></i> -->
              <img src="assets/img/games/BGMI.png" alt="Image">
              <h3>BATTLEGROUNDS MOBILE INDIA</h3>
              <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
              <a href="https://www.battlegroundsmobileindia.com/" target="_blank" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <!-- <i class="ri-discuss-line icon"></i> -->
              <img src="assets/img/games/fifa.png" alt="Image">
              <h3>FIFA</h3>
              <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
              <a href="https://www.ea.com/en-gb/games/fifa/fifa-22" target="_blank" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <!-- <i class="ri-discuss-line icon"></i> -->
              <img src="assets/img/games/csgo.png" alt="Image">
              <h3>CSGO</h3>
              <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
              <a href="https://blog.counter-strike.net/" target="_blank" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <!-- <i class="ri-discuss-line icon"></i> -->
              <img src="assets/img/games/minecraft.png" alt="Image">
              <h3>MINECRAFT</h3>
              <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
              <a href="https://www.minecraft.net/en-us" target="_blank" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Pricing</h2>
          <p>Check our Pricing</p>
        </header>

        <div class="row gy-4" data-aos="fade-left">

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <h3 style="color: #07d5c0;">Free Plan</h3>
              <div class="price"><sup>$</sup>0<span> / mo</span></div>
              <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <span class="featured">Featured</span>
              <h3 style="color: #65c600;">Starter Plan</h3>
              <div class="price"><sup>$</sup>19<span> / mo</span></div>
              <img src="assets/img/pricing-starter.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <h3 style="color: #ff901c;">Business Plan</h3>
              <div class="price"><sup>$</sup>29<span> / mo</span></div>
              <img src="assets/img/pricing-business.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="box">
              <h3 style="color: #ff0071;">Ultimate Plan</h3>
              <div class="price"><sup>$</sup>49<span> / mo</span></div>
              <img src="assets/img/pricing-ultimate.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

        </div>

      </div>

    </section> -->
    <!-- End Pricing Section -->

    <!-- ======= Scrims Section ======= -->
    <section id="hero" class="hero2 d-flex align-items-center">

      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">FREEFIRE JOIN WEEKLY SCRIMS</h1>
            <h2 data-aos="fade-up" data-aos-delay="400" style="
            color: rgb(255, 255, 255);">Play FREEFIRE Weekly Scrims in Legacy Esports .. Battle with other Top Tier Teams / Professionals and Underdogs To Keep Grinding Your Team . Participate and get exclusive rewards only on Legacy Esports.</h2>
            <div data-aos="fade-up" data-aos-delay="600">
              <div class="text-center text-lg-start">
                <a href="https://discord.gg/Fd6EwQv6kA" target="_blank" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Play Now</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="https://media.discordapp.net/attachments/847473868192743424/873305018244149289/20210807_020930.jpg" class="img-fluid" alt="">
          </div> -->
        </div>
      </div>

    </section><!-- End Hero -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>F.A.Q</h2>
          <p>FREQUENTLY <span> ASKED </span> QUESTIONS</p>
        </header>

        <div class="row">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    What is Team Legacy Esports?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Team Legacy Esports is an all new automated Esports platform for players & organizers both.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Who we are??
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Team Legacy Esports is a not-for-profit
                    national body established to promote esports in
                    India, increase its level of awareness,
                    improve standards and inspire future talent

                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    How to Join Team Legacy Esports?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    If want to be a pro esports athlete or the next big youtube/twitch streamer but don't know where to start.. you're in the right place.
                    Join the Legacy Esports discord now! for custom lobbies, community events, tournaments, scrims and leagues. Join in with your friends or come solo and make new ones.
                    Legacy Esports is built with the sole focus of providing a platform to the best in Esports & Content centered around Gaming. What are you waiting for? Come be a part of the journey!
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">

            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                    How to take part in the Tournaments Hosted by Legacy Esports?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Saw one of our many tournaments hosted on Youtube and wondered how to participate? Worry not - you're in the right place. Join the Legacy Esports discord now! All the tournaments hosted by us are featured - and Discord is the permanent means for communication for any Legacy Esports related events or tournaments.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    How to join Legacy Esports as a Professional Player?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    We regularly host tryouts and recruit for the games titles that we are involved in, to stay connected with our tryout schedules and the Legacy Esports performance team - join our discord group where you can interact directly with members from the Legacy Esports Guild.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    How can I join Legacy Esports as a Caster?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    We are always on the lookout for talented casters to strategize and build budding partnerships. The best practice and most likely to get you a response - is to send across an email with your portfolio and an outline of your journey so far and your plans for the future. If considered, we will work towards reverse engineering a lucrative plan of action centered around your growth & sustenance.
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- End F.A.Q Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>TOURNAMENT</h2>
          <p>CHECK OUT OUR PAST <span> TOURNAMENTS </span> </p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-tles">from TLes</li>
              <li data-filter=".filter-others">with Others</li>
              <!-- <li data-filter=".filter-web">Web</li> -->
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

        
          <div class="col-lg-4 col-md-6 portfolio-item filter-tles">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/champpionship-s2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>FREEFIRE CHAMPIONSHIP SEASON 2</h4>
                <p>By LEs</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/champpionship-s2.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="FREEFIRE CHAMPIONSHIP"><i class="bi bi-plus"></i></a>
                  <a href="championship-s2" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tles">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/logo-2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>FREEFIRE INFINITY SERIES</h4>
                <p>by TLes</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/logo-2.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="FREEFIRE INFINITY SERIES"><i class="bi bi-plus"></i></a>
                  <a href="infinity-series" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-others">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/logo-8.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>FM PRO LEAGUE</h4>
                <p>by TLes</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/logo-8.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="FREEFIRE INFINITY SERIES"><i class="bi bi-plus"></i></a>
                  <a href="fm-pro" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-others">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/logo-7.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>CLOUD ESPORTS FF WARZONE</h4>
                <p>by TLes</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/logo-7.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="FREEFIRE INFINITY SERIES"><i class="bi bi-plus"></i></a>
                  <a href="cloud-esports" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-others">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/logo-6.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>FREEFIRE MASTER CUP S1</h4>
                <p>TMR</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/logo-6.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="FREEFIRE MASTER CUP S1"><i class="bi bi-plus"></i></a>
                  <a href="master-cup" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-others">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/logo-5.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>GRAND WAR SEASON 1</h4>
                <p>SKULL ESPORTS</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/logo-5.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="GRAND WAR SEASON 1"><i class="bi bi-plus"></i></a>
                  <a href="grand-war" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div> -->

          <div class="col-lg-4 col-md-6 portfolio-item filter-tles">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/logo-3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>FREEFIRE CHAMPIONSHIP</h4>
                <p>by TLes</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/logo-3.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="FREEFIRE CHAMPIONSHIP"><i class="bi bi-plus"></i></a>
                  <a href="championship" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-others">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/logo-4.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>FREEFIRE DOMINATORS CUP SEASON 1</h4>
                <p>Esportswala</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/logo-4.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="FREEFIRE DOMINATORS CUP SEASON 1"><i class="bi bi-plus"></i></a>
                  <a href="dominators-cup" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tles">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/logo-1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>FREEFIRE CHAMPIONS LEAGUE</h4>
                <p>by TLes</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/logo-1.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="FREEFIRE CHAMPIONS LEAGUE"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div> -->

        </div>

      </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>reviews</h2>
          <p>WHAT THEY ARE SAYING ABOUT <span> LEGACY ESPORTS </span> </p>
        </header>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Well done, best management. Everything got in time, no delay in payment. 100% genuine.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/demo-pperson-image.jpg" class="testimonial-img" alt="">
                  <h3>Shock Wave</h3>
                  <!-- <h4>Ceo &amp; Founder</h4> -->
                  <h4> Participant</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Best management, no payment delay Love it!!
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/demo-pperson-image.jpg" class="testimonial-img" alt="">
                  <h3>PREM RAJ</h3>
                  <h4>FreeFire Player</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Daily scrims are very helpful, regular tournaments with mega prizeool are also exiting. Scrims are definately improving my skills and techniques.. Thank You Legacy.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/demo-pperson-image.jpg" class="testimonial-img" alt="">
                  <h3>LIMITL3SS</h3>
                  <h4>Player</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Good management, regular scrims, tournaments exiting prizemoney verymuch helpful anf friendly...
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>ØMEN</h3>
                  <h4>Discoder</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  I know managing all these is not an easy job to do, very well distributed management, production is also very well. Enjoying at its full.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/demo-pperson-image.jpg" class="testimonial-img" alt="">
                  <h3>Ishq Ka Raja</h3>
                  <h4>Player</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Team</h2>
          <p>OUR HARD WORKING <span> TEAM </span> </p>
        </header>

        <div class="row gy-4" style="justify-content: center; flex-wrap: wrap;">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/clutchgod.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://mobile.twitter.com/subhodip_mistri" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/rj_stylows_subho/"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/subhodip-mistri-2a89b9216" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Clutchgod</h4>
                <span>FOUNDER & CEO</span>
                <p>The person who laid the foundation of Team Legacy Esports. Do all the deals and important talks regarding events , tournaments , sponsorship and management .</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/sanjana.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="" target = "_blank"><i class="bi bi-twitter"></i></a>
                  <a href="" target = "_blank"><i class="bi bi-facebook"></i></a>
                  <a href=" https://instagram.com/sanjana_majumdar_?utm_medium=copy_link" target = "_blank"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/sanjana-majumdar-82032b218" target = "_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>SANJANA</h4>
                <span>Officials </span>
                <p>Manages the server & other team members , leads  the production team and management team during different tournaments, events , etc .</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/fireman.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="" target = "_blank"><i class="bi bi-twitter"></i></a>
                  <a href="" target = "_blank"><i class="bi bi-facebook"></i></a>
                  <a href="" target = "_blank"><i class="bi bi-instagram"></i></a>
                  <a href="" target = "_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>FIREMAN 🇮🇳</h4>
                <span>MANAGER </span>
                <p>Manages the server & other team members , leads  the production team and management team during different tournaments, events , etc .</p>
              </div>
            </div>
          </div>
          

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/soham-2.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://twitter.com/SOHAM_GORAI" target = "_blank"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/soham.gorai.395" target = "_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/soham_gorai21/" target = "_blank"><i class="bi bi-instagram"></i></a>
                  <a href="" target = "_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>SOHAM </h4>
                <span>MANAGER</span>
                <p>Manages the server & other team members , leads  the production team and management team during different tournaments, events , etc .</p>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
              </div>
            </div>
          </div> -->
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/profile.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="" target = "_blank"><i class="bi bi-twitter"></i></a>
                  <a href="https://m.facebook.com/100028541598143/" target = "_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/_roy_28_04" target = "_blank"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/royston-menezes-5a803b211" target = "_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>PAHADI 🏁</h4>
                <span>Admin</span>
                <p>We strengthen our team mainly with their technical support and also do their t best to handle serous issues related to our server and events.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/indrajit-image-web.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://twitter.com/Rockindra003" target = "_blank"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/profile?id=100033803686797" target = "_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/i_n_d_r_a_j_i_t_02/" target = "_blank"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/x%E1%B4%9B%E1%B4%A2-indrajit-a17975218/" target = "_blank"><i class="bi bi-linkedin"></i></a>
                  <a href="https://discord.gg/5eQhqZ4h" target = "_blank"><i class="bi bi-discord"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>INDRAJIT</h4>
                <span>Admin, Developer</span>
                <p>...</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Clients</h2>
          <p>PREVISOULY <span> WORKED </span> WITH</p>
        </header>

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide" style="filter: invert(100%);"><img src="assets/img/clients/image-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/image-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/image-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/iamge-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/image-5.png" style="border-radius: 76px;" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/image-6..png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/rooter-black.png" class="img-fluid" alt=""></div>
            <!-- <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div> -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Clients Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Blog</h2>
          <p>BLOG & <span> NEWS </span> </p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/freefire-4th_aniversary.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 20</span>
              <h3 class="post-title">Garena Free Fire 4th anniversary event: Check DATE, events details, rewards, giveaways, and more.</h3>
              <a href="construction" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/character.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Thru, August 19</span>
              <h3 class="post-title">Thiva character in Free Fire: Abilities, how to get, and best pet combinations.</h3>
              <a href="construction" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/reunion.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Thru, August 19</span>
              <h3 class="post-title">DJs Dimitri Vegas & Like Mike, Alok, and KSHMR invite players to join Free Fire’s 4th anniversary with the release of “Reunion”.</h3>
              <a href="construction" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>CONTACT <span> US </span> </p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>18/3 Kalikapur Purbapally,<br>West Bengal, WB 700099</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+91 9875546960<br>+91 9875546960</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>subhodipmistri@gmail.com<br>subho@teamlegacyesports.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 10:00PM</p>
                </div>
              </div>
            </div>

          </div>

           <?php

            if($message_sent):
              // header("location: index#contact")

          ?>
                <script>alert('Thanks, for Contacting us. We will be in touch.');</script>
            <h3> Thanks, for Contacting us. We will be in touch.</h3>

        <?php
             else:   
                
        ?> 
          <div class="col-lg-6">
            <form action="" method="POST" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>
          <?php

          endif;

          ?>


        </div>

      </div>

    </section><!-- End Contact Section -->


  </main><!-- End #main -->

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
              <span>LEGACY ESPORTS</span>
            </a>
            <p>Legacy Esports is an all new automated Esports platform for both Players and Organizers . Legacy esports provide the platform for the gamers to showcase their skills and nurture their talents. Gaming is still been criticised in India. We hope to change that and encourage youth to come and play with us</p>
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
              <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services">Our Games</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="tournaments">Tournaments</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#portfolio">Previous Tournaments</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#team">Team</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#faq">F.A.Q</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="admin_login">Admin Panel</a></li>
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
        &copy; Copyright 2021 <strong><span>legacyEsports</span></strong>. All Rights Reserved
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
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>

    var preloader  = document.getElementById('loading');

    function myFunction(){
      preloader.style.display = 'none';
    }

  </script>

</body>

</html>
