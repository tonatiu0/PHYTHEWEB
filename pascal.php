<?php
session_start();
require 'requirelanguage.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $fisica; ?> II</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php"><?php echo $fisica; ?>  <i class="fas fa-bolt"></i></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php"><?php echo $inicio; ?></a>
          </li>
          <li class="nav-item">
            <div class="dropdown closed">
              <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe"></i>
              <?php echo $cambiarIdioma; ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <a href="changelanguage.php?language=es">
            <button class="dropdown-item" type="button"><?php echo $spanish; ?></button> 
            </a>
            <a href="changelanguage.php?language=en">
            <button class="dropdown-item" type="button"><?php echo $english; ?></button>
            </a>
          </div>
          </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/pascal.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><?php echo $tema1 ?> <span class="badge badge-danger"><?php echo $new ?></span></h1>
         <!--   <h2 class="subheading">Problems look mighty small from 150 miles up</h2> -->
            <span class="meta"><?php echo $publicado ?>
              <a href="https://github.com/ErnestoRB/PHYTHEWEB">Admin</a> |
              7 Septiembre 2019</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <h2 class='display-4 text-center'><b><?php echo $tema1 ?></b></h2>
          <p><?php echo $p1Pascal ?></p>
          <hr class="w-75 bg-dark">
          <p><?php echo $p2Pascal ?></p>
          <hr class="w-75 bg-dark">
          <p><?php echo $p3Pascal ?></p>
          <div class="alert alert-light shadow-lg w-50" role="alert" style="margin: auto;">
            <img class="img-fluid" src="img/formulaPascal.png"/>
          </div>
          <hr class="w-75 bg-dark">
          <p><?php echo $p4Pascal ?></p>
          <hr class="w-75 bg-dark">
          <p><?php echo $p5Pascal ?></p>
          <hr class="w-75 bg-dark">
          <p><?php echo $p6Pascal ?></p>
          <hr class="w-75 bg-dark">
          <h3 class="text-center"><?php echo $appletP ?></h3><br>
          <iframe class="container-fluid" src="https://phet.colorado.edu/sims/html/under-pressure/latest/under-pressure_es.html" width="800" height="600" scrolling="no" allowfullscreen></iframe>  
          <span class="caption text-muted">Applet <?php echo $tomado ?> <a href='https://phet.colorado.edu/es/simulation/under-pressure'>PHET</a></span>
          <hr class="w-75 bg-dark">
          <h3 class="text-center">Multimedia</h3><br>
          <!-- Carousel -->
          <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/pascal1.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $imgP1 ?></h5>
                    <p><?php echo $imgP1D ?></p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/pascal2.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $imgP2 ?></h5>
                    <p><?php echo $imgP2D ?></p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/pascal3.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $imgP3 ?></h5>
                    <p><?php echo $imgP3D ?></p>
                  </div>
                </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

          <!--
          <a href="#">
            <img class="img-fluid" src="img/post-sample-image.jpg" alt="">
          </a>

          <p>Placeholder text by
            <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by
            <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>-->
        </div>
      </div>
    </div>
  </article>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          <p class="copyright text-muted">Copyright &copy; El combo 2019</p>
          <p class="copyright text-muted"> <?php echo $agradecimientos ?> </p>

        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
