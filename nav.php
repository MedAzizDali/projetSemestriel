<?php session_start();
$con = mysqli_connect('localhost', 'root', '') or die(mysqli_error($con));
mysqli_select_db($con,'registration');

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');}

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
  <link rel="stylesheet" href="fontawesome.min.css">

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
            <li><a> Username: <?php echo $row["username"];?></a></li>
            <li><a href="logout.php">Logout </a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->