<?php 
session_start();
error_reporting(0);
include 'conexion.php';
$consulta="SELECT contacto FROM contacto WHERE id_contacto=1";

    $resultado= $mysqli->query($consulta);
    $row =$resultado-> fetch_assoc();
  $llamada= $row['contacto'];

$consulta2="SELECT contacto FROM contacto WHERE id_contacto=2";

    $resultado2= $mysqli->query($consulta2);
    $row =$resultado2-> fetch_assoc();
  $llamada2= $row['contacto'];
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
    
  </head>
  <body>
  
  <div class="site-wrap">
  <?php include("./layouts/header.php"); ?> 

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Ponerse en contacto</h2>
          </div>
          <div class="col-md-7">

            <form action="#" method="post">
              
              <div class="p-3 p-lg-5 border">
                <div>
                  <h3>Numero de telefono y WhatsApp </h3>
                  <span>Piscicola Marino del Sur</span><br>
                  <span>Dispone a usted de sus numeros de contacto</span><br>
                  <span>con los cuales podra hacer sus cotizaciones </span><br>
                  <span>sin costo alguno. </span><br><br>
                  <span>Contamos con el mejor personal, humano y eficiente.</span><br>
                  <span>Llamenos al <?php echo $llamada?></span><br>
                  <span>Escribanos al <?php echo $llamada2?> </span>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5 ml-auto">
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Pitalito</span>
              <p class="mb-0">Vereda San Francisco, via bruselas.</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Neiva</span>
              <p class="mb-0">cra10 No7-21, Barrio centro</p>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <?php include("./layouts/footer.php"); ?> 
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