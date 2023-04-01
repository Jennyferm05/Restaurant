<?php
include('../modelo/conexionlogin.php');
session_start();

if(isset($_SESSION['nombredelusuario']))
{
	$usuarioingresado = $_SESSION['nombredelusuario'];

}
else
{
	header('location: login/index.html');
}
?>

<!Doctype html>
<html lang="es">
<head>
<link rel="shortcut icon" href="img/logo.png">
  <link href="../css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
  <script src="../js/rscript.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/31a11c3e1f.js" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		
		<!-- Poper Bootstrap --> 
	    
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
  <body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://lh3.googleusercontent.com/a/AGNmyxapCerw3uJFVn6KGhB9s4iKyGbMYnukU5hXtl5hc-8=s360" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
        <div class="nav_list"> <a href="inicio.php" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">El Quetzal</span> </a>
                <div class="nav_list"> <a href="inicio.php" class="nav_link active"> <i class="fa-solid fa-house-user"></i> <span class="nav_name">Inicio</span> </a> 
                <a href="menu.php" class="nav_link"> <i class="fa-solid fa-bowl-food"></i> <span class="nav_name"> Menu</span> </a> 
                <a href="domicilio.php" class="nav_link"> <i class="fa-solid fa-cart-shopping"></i> <span class="nav_name">Domicilio</span> </a> 
                <a href="pedidos.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Pedidos</span> </a> 
                <a href="contactos.php" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Contactos</span> </a>  </div>
            </div> <a href="login/index.html" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://64.media.tumblr.com/691f6583d54417627340987fe7ce0b59/tumblr_inline_nrhgjwxYHU1sminkw_1280.jpg" class="d-block w-100" alt="..." width="600" height="800">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.haciendaresidences.com/images/restaurants/gz-rest-losdeseos.jpg" class="d-block w-100" class="d-block w-100" alt="..."  width="600" height="800">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://revistadiners.com.co/wp-content/uploads/2020/07/portada_rutaazteca_1200x800.webp" class="d-block w-100" alt="..."  width="600" height="800">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
    <br>
<!--Footer-->

<footer>
        <div id="contactos" class="footer_main">

            <div class="footer_tag">
                <h2>Locacion</h2>
                <p>USA</p>
                <p>Colombia</p>
                <p>Japon</p>
                <p>Venezuela</p>
            </div>

            <div class="footer_tag">
                <h2>Enlace Rapido</h2>
                <p>Inicio</p>
                <p>Menu</p>
                <p>Domicilio</p>
                <p>Contactos</p>
            </div>

            <div class="footer_tag">
                <h2>Contacto</h2>
                <p>+57 313 3573388</p>
                <p>+57 320 4074867</p>
                <p>Mayerlicastaneda2004@gmail.com</p>
                <p>guevarax72@gmail.com</p>
            </div>

            <div class="footer_tag">
                <h2>Nuestro servicio</h2>
                <p>Entrega rapida</p>
                <p>Pagos Faciles</p>
                <p>24 x 7 Servicio</p>
            </div>

            <div class="footer_tag">
                <h2>Follows</h2>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>

        </div>

    </footer>
</body>
</html>