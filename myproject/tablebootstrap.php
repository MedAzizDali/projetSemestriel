

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="tablecss.css">
  <title>Cours Complet Bootstrap 4</title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1><span>w</span>eb <span>D</span>ev <span>p</span>roject </h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Form</a></li>
            <li><a href="#projects" data-after="Projects">Vidéo</a></li>
            <li><a href="#about" data-after="About">Nos Formateur</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
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
        <a href="112233.html#projects" type="button" class="cta">See Projects</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Formulaire <span>d'inscription</span></h1>

      </div>
      <div class="service-bottom ">
        <fieldset style="color:black;>
  <legend align= "center">Inscription</legend>
        <form>
  <table>
    <tr>
      <td>
        E-mail
      </td>  

      <td>
        <input type="text" name="Mail" placeholder="Tapez Votre Mail">
      </td>
    </tr>
    <tr>
      <td>
        Numéro Carte d'identité National
      </td>
      <td>
        <input type="text" name="CIN" placeholder="Tapez Votre CIN">
      </td>
    </tr>
    <tr>
      <td>
        Nom
      </td>
      <td>
        <input type="text" name="Nom" placeholder="Tapez Votre Nom">
      </td>
      
    </tr>
    <tr>
      <td>
        Prenom
      </td>
      <td>
        <input type="text" name="Prénom" placeholder="Tapez Votre Prénom">
      </td>
      
    </tr>
    <tr>
      <td>
        Sexe
      </td>
      <td>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
      </td>
    </tr>
    <tr>
      <td>
        Votre niveau en Web-Dev
      </td>
      <td>
          
          <input type="checkbox" id="pro" name="Niveau en web-dev" value=pro">
            <label for="pro">pro</label><br>
            <input type="checkbox" id="amateur" name="Niveau en web-dev" value="amateur">
            <label for="amateur">Amateur</label><br>
      </td>
      
    </tr>
  </table>

</form>
</fieldset>      

<div>
  
        <div class="text-center">
<button  type="submit" class="btn btn-primary">Submit</button> </div> 
  </section>

  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Vid<span>éo</span></h1>
      </div>
      <div class="all-projects">
  <iframe  style='display: block; margin: 0 auto;' src="https://www.youtube.com/embed/eow125xV5-c" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="560" height="315" frameborder="0">
  </iframe>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
   <section id="about">
    <div class="about container">

      <div >
        <h1 class="section-title">Nos liste <span>des formateurs: </span></h1>
<table class="table table-bordered table-dark-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">specialite</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>css</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>java</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>html</td>
    </tr>
  </tbody>
</table>
      </div>
    </div>
  </section>

  <!-- End About Section -->

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