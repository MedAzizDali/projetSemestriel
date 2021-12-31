<?php
  session_start();   
  $con = mysqli_connect('localhost', 'root', '') or die(mysqli_error($con));
  
  if (!isset($_SESSION['username'])) {
    header('location: profile.php');}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="stylessss.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <title></title>
</head>
<body>


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
            <li><a href="#services" data-after="Service">Services</a></li>
            <li><a href="#projects" data-after="Projects">Projects</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
            <li><a> Username: <?php echo $_SESSION["username"];?></a></li>
            <li><a href="logout.php">Logout </a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

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

  <!-- Profile Settings -->

  <section class="profile">
    
      <div class="wrapper">
      <h2>Profile Settings</h2>
          <form action="" method="post">
            <?php
            $id=$_SESSION['id'];
            $sql=" SELECT * FROM users WHERE id='$id'";
            $result = mysqli_query($con,$sql);
            if (mysqli_num_rows($result)>0){
              while($row =mysqli_fetch_assoc($result)){
                ?>
                <div class="inputBox">
                  <input type="text" id="username" name="username" value="<?php echo $row['username'] ?> " placeholder="Enter Username"><br>
                </div>
                <div class="inputBox">
                  <input type="email" id="email" name="email" value="<?php echo $row['email'] ?>" placeholder="Email Address" disabled><br>
                </div>
                <div class="inputBox">
                  <input type="password" id="password" name="password" value="<?php echo $row['password'] ?> placeholder="Enter Password"><br>
                </div>
                <div class="inputBox">
                  <input type="password" id="cpassword" name="cpassword" value="<?php echo $row['password'] ?> placeholder="Confirm Password"><br>
                </div>  
            <?php
              }
            }
            
            ?>
            
            <div>
              <button type="submit" class="button"> Update Profile</button>
            </div>
          </form>
      </div>
  </section>
  <style>
    .profile{
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #dc143c;

    }
    .wrapper{
      max-width: 500px;
      width: 100%;
      box-shadow: 0 0 5p rgba(0,0,0,.10);
      margin: auto;
      background-color: white;
      border-radius: 4px;
      min-height: 600px;
      padding: 2rem;
    }
    .wrapper h2{
      text-align: center;
      font-size: 4rem;
      margin-bottom: 5rem;
    }
    .wrapper .inputBox{
      width: 100%;
      height: 50px;
      margin-bottom: 1.3rem;
      position: relative;
    }
    .wrapper .inputBox input{
      width: 100%;
      height: 100%;
      border: 1px solid #eee;
      outline: none;
      border-radius: 4px;
      padding: 1rem;
      font: 2em sans-serif;

    }
    .wrapper .inputBox :last-child{
      margin-bottom: 0;
    }
    .wrapper button{
      display: block;
      width: 100%;
      margin-top: 5rem;
      padding: .7em .2rem;
    }
    .button {
      display: inline-block;
      border-radius: 4px;
      background-color: #dc143c;
      border: none;
      color: #FFFFFF;
      text-align: center;
      font-size: 20px;
      padding: 20px;
      width: 100%;
      cursor: pointer;
      margin-bottom: 0px;
    }
    .wrapper form{
      padding: 0;
    }


  </style>
 
  <!-- End Profile Settings -->

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