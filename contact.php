<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- SCRIPT FONTAWESOME -->
  <script src="https://kit.fontawesome.com/bd97dcac3b.js" crossorigin="anonymous"></script>
  <script src=""></script>
  <!-- SCRIPT BOOTSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- script librairie bootstrap -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu+2:400,500,600,700,800|Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap"rel="stylesheet">
  
  <title>Simplon-VOD</title>
  <link rel="stylesheet" href="assets/css/style_steven.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <headear>
  <!--NAV BAR-->
<?php
    include 'navfoot.php';
?> 
  </headear>


<h2 class="entete"> Titre Film</h2>

  <section class="info_film">
    <div class="row">
      <div class="col-6">
        <figure>
          <img class="ipman_steven" src="assets/img/003.jpg" alt="temp">
        </figure>
      </div>
      <div class="col-6">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore fugit minus earum magnam voluptatum quos deserunt ut ratione consequuntur aperiam repudiandae natus veniam facere, nam quis expedita molestiae, perspiciatis? Possimus?</p>
      </div>
    </div>
  </section>

  <section class="">
    <div class="row">
      <div class="col-4">
        <p id="time_steven">4/5</p>
      </div>
      <div class="col-4">
        <p id="time_steven">2h30</p>
      </div>
      <div class="col-4">
        <p id="time_steven">03/20</p>
      </div>
    </div>
  </section>


  <section class="actors">
  <div class="container">
  <h1>Listes Des Acteurs</h1>
  <div class="row">
    <div class="col-6 col-lg-3">
      <figure>
        <img src="assets/img/001.jpg" alt="">
      </figure>
    </div>
    <div class="col-6 col-lg-3">
      <figure>
        <img src="assets/img/001.jpg" alt="">
      </figure>
    </div>
    <div class="col-6 col-lg-3">
      <figure>
        <img src="assets/img/001.jpg" alt="">
      </figure>
    </div>
    <div class="col-6 col-lg-3">
      <figure>
        <img src="assets/img/001.jpg" alt="">
      </figure>
    </div>
  </div>
  <div class="row">
    <div class="col-6 col-lg-3">
      <figure>
        <img src="assets/img/001.jpg" alt="">
      </figure>
    </div>
    <div class="col-6 col-lg-3">
      <figure>
        <img src="assets/img/001.jpg" alt="">
      </figure>
    </div>
    <div class="col-6 col-lg-3">
      <figure>
        <img src="assets/img/001.jpg" alt="">
      </figure>
    </div>
    <div class="col-6 col-lg-3">
      <figure>
        <img src="assets/img/001.jpg" alt="">
      </figure>
    </div>
  </div>
</div>
</section>

<section class="">
  <div class="row">
    <div class="col-6">
      <div class="row">
        <div class="col-6">
          <figure>
            <img src="assets/img/003.jpg" alt="t">
          </figure>
        </div>
        <div class="col-6">
          <h5>Nom Réal</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo explicabo ullam delectus, saepe, aspernatur rem libero accusamus assumenda quod alias labore laudantium sed qui enim aliquam id nam. Minima, veniam!</p>
        </div>
      </div>
    </div>
    <div class="col-6">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/i-ovqRinwVs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</section>

<!-- FOOTER-->
<?php
    include 'footer.php';
?> 

</body>
</html>
