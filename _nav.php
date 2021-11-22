<?php
if(!defined('MYSITE')){
  echo ("<h1> You can't access this page</h1>");
  die();
}
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  $loggedin = true;
}
else{
  $loggedin = false;
}
echo'
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span>LEGACY ESPORTS</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index#hero" style="
          padding-right: 30px;
      ">HOME</a></li>
          <!-- <li><a class="nav-link scrollto" href="inner-page">TOURNAMENT</a></li> -->
          <li class="dropdown"><a href="#"><span>TOURNAMENT</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index#services">Our Games</a></li>
              <li><a href="tournaments">Running Tournaments</a></li>
              <li><a href="index#portfolio">Past Tournaments</a></li>
            </ul>
          </li> 
          <li><a class="nav-link scrollto" href="blog">BLOGS</a></li>
          <li><a class="nav-link scrollto" href="index#footer">SOCIALS</a></li>
          <li><a class="nav-link scrollto" href="index#team">TEAM</a></li>
          <li><a class="nav-link scrollto" href="index#about">ABOUT US</a></li>
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
          <li><a class="nav-link scrollto" href="index#contact">CONTACT US</a></li>';
          if(!$loggedin){
          echo'
          <li><a class="getstarted scrollto" href="login">LOGIN</a></li>
          <li><a class="signup" href="register">SIGNUP</a></li>';
          }
          if($loggedin){
            echo'
          <li><a class="getstarted" href="profile">';?> <?php echo $_SESSION['username']; ?> <?php echo'</a></li>
          <li><a class="signup" href="logout">LOGOUT</a></li>';
          }
          echo'
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>';

?>