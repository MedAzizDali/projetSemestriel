<!-- Main Page -->

<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');}
    $email = $_SESSION['email'];
    $con = mysqli_connect('localhost', 'root', '') or die(mysqli_error($con));
    mysqli_select_db($con, 'project1');
    $req = mysqli_query($con, "SELECT * FROM users where email='$email' ");
    $row = mysqli_fetch_array($req);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylessss.css">
  <title>My Project</title>
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
            <li><a> Username: <?php echo $row["username"]; ?></a></li>
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
        <h1>Welcome To Our  <span></span></h1>
        <h1>Website <span></span></h1>
        <a href="tablebootstrap.php" type="button" class="cta">Register Now</a> 
      </div>
    </div>
  </section> 

  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Serv<span>i</span>ces</h1>
        <p>We provide multiple services to help anyone who wants to start web development and learn the first steps to build his website.</p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Web Design</h2>
          <p>Web design is a profession where a person designs a web page or a web site. The web page can have graphics, music, animations, and many other things on it. Some web design is done for businesses, and some is done for individual people.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>HTML</h2>
          <p> HTML is a markup language for creating a webpage.Webpages are usually viewed in a web browser. They can include writing, links, pictures, and even sound and video. HTML is used to mark and describe each of these kinds of content .</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>CSS</h2>
          <p>Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>JavaScript</h2>
          <p>JavaScript (JS) is a lightweight, interpreted, or just-in-time compiled programming language with first-class functions . It is most well-known as the scripting language for Web pages.JavaScript is high-level.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Recent <span>Projects</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Project 1</h1>
            <h2>Coding is Love</h2>
            <p>We make sure that, first of all, our clients fall in love and be passionate with web development by presenting all different skills they can aquire from it and guide them through it step by step .</p>
          </div>
          <div class="project-img">
            <img src="codingis.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 2</h1>
            <h2>Mastering HTML</h2>
            <p>the second step is making sure our clients learn html with the easiest and the most convenient way possible by offering them a mixture of free tutorials that covers all different aspects of html.</p>
          </div>
          <div class="project-img">
            <img src="logooo.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 3</h1>
            <h2>Learning css</h2>
            <p>It is also very important that our clients learn how to use "c.s.s" in order to add their touch of style to the website</p>
          </div>
          <div class="project-img">
            <img src="hero.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 4</h1>
            <h2>Discovering JavaScript</h2>
            <p>this step is very important to set the final touches for your website.it is vital for learning valuable skills such as object-oriented, functional, and imperative styles of programming. Beginner developers, in turn, can apply these skills to any new language they want to learn, like Python, Java, or C++.</p>
          </div>
          <div class="project-img">
            <img src="js.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 5</h1>
            <h2>first web page</h2>
            <p>Here we are,its the final step. Our clients will put all their skills together to biuld their first web page.</p>
          </div>
          <div class="project-img">
            <img src="hello.png" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="about.jpg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>US</span></h1>
        <h2>Med Aziz Dali and Med Yassine Baananou</h2>
        <p>we are polytec sousse students of computer science and engeneering and we want to help other people learn and succeed by sharing our love for coding and programming.</p>
        <a href="#" class="cta">Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->
<center><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12939.707614474493!2d10.5888804!3d35.8262691!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4418fc1f1a3cb73f!2sPolytechnique%20Sousse!5e0!3m2!1sen!2stn!4v1640879523830!5m2!1sen!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>
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
<?php  ?> 