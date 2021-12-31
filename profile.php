<?php
  session_start();   
  $con = mysqli_connect('localhost', 'root', '') or die(mysqli_error($con));
  
  if (!isset($_SESSION['username'])) {
    header('location: profile.php');}

    $username=$_SESSION['username'];
    mysqli_select_db($con, 'registration');
    $req = mysqli_query($con, "SELECT * FROM users where username like '$username' ");
    $row = mysqli_fetch_array($req);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="stylessss.css">
  <title></title>
</head>
<body>
    <!-- Hero Section  -->
    <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hello,  <span></span></h1>
        <h1>Welcome To Your  <span></span></h1>
        <h1>Profile Page <span></span></h1>
        <a href="index11.php" type="button" class="cta">Visit Home Page</a> 
      </div>
    </div>
  </section> 

  <!-- End Hero Section  -->

  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
      <div class="brand">
          <a href="#hero"><marquee><h1><span>w</span>eb <span>D</span>ev <span>p</span>roject </h1></marquee></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Form</a></li>
            <li><a href="#projects" data-after="Projects">Vidéo</a></li>
            <li><a href="#about" data-after="About">Nos Formateur</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
            <li><a> Username: <?php echo $_SESSION["username"]; ?></a></li>
            <li><a href="logout.php">Logout </a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<!-- End Header -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Contact <span>info</span></h1></div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png"/></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+216 54 235 326</h2>
            <h2>+216 23 568 123</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>azizdali248@gmail.com</h2>
            <h2>bananoumohamed30@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png"/></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>tunis,sousse</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>W</span>eb <span>D</span>evelopment</h1></div>
      <h2>Your Complete Web Solution</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png"/></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png"/></a>
        </div>
      </div>
      <p>Copyright © 2020 yassine baananou / aziz dali. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  
  <script type="text/javascript" src="ja3vascripte.js"></script>
</body>
</html> 