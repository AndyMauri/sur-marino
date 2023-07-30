<?php 
session_start();
error_reporting(0);
include 'conexion.php';
$consulta="SELECT contacto FROM contacto WHERE id_contacto=1";

    $resultado= $mysqli->query($consulta);
    $row =$resultado-> fetch_assoc();
  $llamada= $row['contacto'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style>
    #parrafo{
      color: White;
      font-size: 25px;
      
    }
    #titu{
      color: White;
      
    }
    </style>
    
  </head>
  <body>

  <div class="site-wrap">
  
    <header class="site-navbar" role="">
    <?php include("./layouts/header.php"); ?> 
       
     
    </header>

    <div class="site-blocks-cover" style="background-image: url(images/fondo.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2" id="titu">Piscicola Marino del Sur</h1>
            <div class="intro-text text-center text-md-left">
              <p id="parrafo" class="mb-4">Es una empresa dedicada a la produccion y suministro de alevinos de aguas continentales; con alta calidad genetica y asesorias en proyectos piscicolas </p>
              <p>
                <a href="index.php" class="btn btn-sm btn-primary">¡¡¡Compra YA!!!</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">ENVIO GRATIS</h2>
              <p>Debido a la terrible situacion por la que atravieza el pais y el mundo entero, los envios son completamente gratis.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-check-circle-o"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">EXELENTE SERVICIO</h2>
              <p>Somos la empresa mas acreditada en el huila, con un exelente servicio de asesoria y entregas a tiempo. </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">ATENCION AL CLIENTE</h2>
              <p>Si necesitas asesorarte, resolver una duda o inquietud, puedes contactarnos sin ningun problema, registrate y accede anuestro numero telefonicos..</p>
            </div>
          </div>
        </div>
      </div>
    </div>


   

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">PISCICOLA MARINO DEL SUR</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Registrate</a></li>
                  <li><a href="#">Compra</a></li>
                  <li><a href="#">Llamanos</a></li>
                  <li><a href="#">Quienes somos?</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                
              </div>
              <div class="col-md-6 col-lg-4">
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promociones</h3>
            <a href="#" class="block-6">
              <img src="images/sabalo.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Contactate con nuestros asesores</h3>
              <p>Promocion hasta mayo &mdash; 31, 2020</p>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contactos</h3>
              <ul class="list-unstyled">
                <li class="address">San Francisco, Pitalito Huila, COLOMBIA</li>
                <li class="phone"><a href="tel://<?php echo $llamada?>"><?php echo $llamada?></a></li>
                <li class="email">piscicolamarino@gmail.com</li>
              </ul>
            </div>

            
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">NCTECNOLOGIA</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>