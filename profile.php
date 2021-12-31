<?php
  include_once('nav.php');

  $con = mysqli_connect('localhost', 'root', '') or die(mysqli_error($con));
  mysqli_select_db($con,'registration');
  $username=$_SESSION['username'];
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
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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

  <!-- Profile Settings -->

  <section class="profile">
    
      <div class="wrapper">
      <h2>Profile Settings</h2>
          <form action="" method="post">
            <?php
            $username=$_SESSION['username'];

            $sql=" SELECT * FROM users WHERE username='$username'";
            $result = mysqli_query($con , $sql);
            
         $row =mysqli_fetch_array($result);
                ?>
                <div class="inputBox">
                  <input type="text" id="username" name="username" value="<?php echo $row['username'] ?> " disabled><br>
                </div>
                <div class="inputBox">
                  <input type="email" id="email" name="email" value="<?php echo $row['email'] ?>" placeholder="Email Address" required><br>
                </div>
                <div class="inputBox">
                  <input type="password" id="password" name="password" placeholder="Enter New Password"><br>
                </div>
              <div class="inputBox">
                  <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password"><br>
                </div>  

            <div>
              <button type="submit" name= "submit" class="button"> Update Profile</button>
            </div>
          </form>
      </div>
  </section>
  <?php
   //if (!isset($_SESSION['username'])) {
    //header('location: server.php');}
  if (isset($_POST["submit"])){
    // hethom manhbhomsh haw shnbdlhom HAHHAHAH TFATHEL almaout 
$emailA=$_POST['email'];
$mdp=$_POST['cpassword'];
$hash=$_POST['cpassword'];

if (!empty($_POST["password"])) {
                                $mdp = $_POST["password"];
                                $hash = md5($mdp);
                            }
  if ($emailA != "" ) {

                                $query = "SELECT * FROM users where email like '$emailA'";
                                $verif_username = mysqli_num_rows(mysqli_query($con, $query));
                            } else {
                                $verif_username = 0;
                            }
 if ($verif_username == 1 && $emailA == $row["email"]) {
                                echo ("<meta http-equiv='refresh' content='0;  URL =profile.php?Exist'/>");
                            } elseif ($emailA !="" || $hash!= "") {
                       
 //$email=$_SESSION['email'];
    $insert ="UPDATE users set email='$emailA', password='$hash' where username like '$username'";
    $update=mysqli_query($con,$insert);
  
}
if ($update) {
                                echo ("<meta http-equiv='refresh' content='0;  URL =profile.php?Updated'/>");
}else { 
  echo mysqli_error($con); }

  }
 
?>
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