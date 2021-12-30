

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
          <a href="index"><h1><span>w</span>eb <span>D</span>ev <span>p</span>roject </h1></a>
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
        <a href="#" type="button" class="cta">See Projects</a>
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
        <fieldset style="color:black;" > </fieldset>
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


  <!-- Formulaire d'inscription -->

<style>
  @import url(https://fonts.googleapis.com/css?family=Raleway:200,500,700,800);

*,
*:after,
*:before {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

/* body {
  background: #111;
  font-weight: 500;
  font-size: 1.05em;
  font-family: 'Raleway', Arial, sans-serif;
} */

#container {
  position: absolute;
  width: 710px;
  height: 5em;
  left: 50%;
  top: 50%;
  margin-left: -355px;
  margin-top: -2.5em;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-content: center;
}

.input {
  position: relative;
  margin: 1em;
  width: calc(50% - 2em);
  height: 80px;
}

.message {
  width: calc(100% - 2em);
  height: 200px;
}

textarea {
  border: none;
  resize: none;
}

.input__field {
  position: absolute;
  margin: 0.8em 0;
  padding: 0.4em;
  width: 100%;
  height: calc(100% - 1.6em);
  border: none;
  border-radius: 0;
  background: transparent;
  color: #ffcc00;
  font-size: 1.55em;
  font-weight: bold;
  -webkit-appearance: none;/* for box shadows to show on iOS */
}

.input__field:focus {
  outline: none;
}

.input__label {
  position: absolute;
  padding: 0 1em;
  margin: 1.2em 0;
  width: 100%;
  height: calc(100% - 2.4em);
  color: #6a7989;
  font-weight: bold;
  font-size: 70.25%;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.input__label-content {
  position: relative;
  display: block;
  padding: 1.5em 0;
  width: 100%;
  -webkit-transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
}

.input__label::before,
.input__label:after {
  content: '';
  position: absolute;
  left: 0;
  width: 100%;
  height: 2px;
  background: #6a7989;
  -webkit-transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
}

.input__label::before {
  top: 0;
}

.input__label::after {
  bottom: 0;
}

.input__field:focus + .input__label .input__label-content,
.input--filled .input__label-content {
  -webkit-transform: translate3d(0, -90%, 0);
  transform: translate3d(0, -90%, 0);
}

.input__field:focus + .input__label::before,
.input--filled .input__label::before {
  -webkit-transform: translate3d(0, -0.5em, 0);
  transform: translate3d(0, -0.5em, 0);
}

.input__field:focus + .input__label::after,
.input--filled .input__label::after {
  -webkit-transform: translate3d(0, 0.5em, 0);
  transform: translate3d(0, 0.5em, 0);
}

#send-button {
  width: 200px;
  height: 60px;
  background-color: #6a7989;
  color: #000;
  border: 0;
  font-weight: bold;
  font-size: 70.25%;
  text-transform: uppercase;
  letter-spacing: 4px;
  -webkit-transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
}

#send-button:hover,
#send-button:focus {
  outline: 0;
  background-color: #ffcc00;
  color: #000;
  -webkit-transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
}

</style>

<script>
  var $input;

function onInputFocus(event) {
  var $target = $(event.target);
  var $parent = $target.parent();
  $parent.addClass('input--filled');
};

function onInputBlur(event) {
  var $target = $(event.target);
  var $parent = $target.parent();

  if (event.target.value.trim() === '') {
    $parent.removeClass('input--filled');
  }
};

$(document).ready(function() {
  $input = $('.input__field');
  
  // in case there is any value already
  $input.each(function(){
    if ($input.val().trim() !== '') {
      var $parent = $input.parent();
      $parent.addClass('input--filled');
    }
  });
  
  $input.on('focus', onInputFocus);
  $input.on('blur', onInputBlur);
});
</script>

  <!-- End Formulaire d'inscription -->


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