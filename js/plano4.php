<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Aeropuerto Sevilla</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
  <link href="css/transporte.css" rel="stylesheet">
  <link rel="icon" type="image/jpg" href="img/favicon.jpg">
  <link href="css/hotspot.css" rel="stylesheet">
  <link href="css/agency.min.css" rel="stylesheet">
  <link href="css/transporte.css" rel="stylesheet">
  <link rel="icon" type="image/jpg" href="img/favicon.jpg">
  <script src="js/jquery-3.3.1.min.js"></script>
  <!--<script type="text/javascript" src="js/jquery.maphilight.min.js"></script>-->
  <script type="text/javascript" src="js/jquery.maphilight.js"></script>
  <script type="text/javascript" src="js/plano.js"></script>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
    <div style="margin-left: 1%" class="container">
      <a href="#page-top">
        <img class="navbar-brand js-scroll-trigger logoaena" src="img/logo.jpg" alt="">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse barra" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#servicios">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#destinos">Destinos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="informacion.php">Información</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="plano4.php">Plano</a>
          </li>
          <?php  
            #RESERVA DE COCHE MOSTRADO SOLO CUANDO UN USUARIO SE HA LOGEADO
          session_start();
          if (isset($_SESSION['login'])) {
            echo "<li class='nav-item'>
            <a class='nav-link js-scroll-trigger' href='parking.php'>Parking</a>
            </li>

            <li class='nav-item'>
            <a class='nav-link js-scroll-trigger nombre'>". $_SESSION["login"] . "</a>
            </li>

            <li class='nav-item'>
            <a class='nav-link js-scroll-trigger salir' href='salir.php'>SALIR</a>
            </li>";
          }
          else {
            echo "<li class='nav-item'>
            <a class='nav-link js-scroll-trigger' href='registro.php'>Registro</a>
            </li>";
          }
          ?>
        </ul>
      </div>
    </div>

  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Bienvenido!</div>
        <div class="intro-heading text-uppercase">Aeropuerto de Sevilla</div>
        <?php  
        if (!isset($_SESSION['login'] )) {
          echo "<a class='btn btn-primary btn-xl text-uppercase js-scroll-trigger' href='login.php'>Inicio de Sesión</a>"; 
        }  
        ?>
      </div>
    </div>
  </header>
  <section class="bg-light page-section" id="planta0_1">
    <div class="col-md-12 text-center">
      <button id="p_0" class="btn btn-primary text-uppercase plantas" type="submit" value='planta_0'>PLANTA 0</button>
      <button id="p_1" class="btn btn-primary text-uppercase plantas" type="submit" value='planta_1'>PLANTA 1</button>
    </div>
  </section>
  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Aeropuerto Sevilla 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fas fa-phone"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://twitter.com/aena"target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://es-es.facebook.com/aena.es/" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Politicas de Privacidad</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terminos de uso</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- destinos Modals -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- contacto form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contacto_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>
  <script src="js/audio.js"></script>
</body>
</html>
</head>
