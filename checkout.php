<?php
session_start();
error_reporting(0);
if(!isset($_SESSION['carrito'])){
  header('location: ./index.php');
}
$arreglo = $_SESSION['carrito'];
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
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
           <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div>
    </br>
    
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">                         
             </div>
             </div>
              
           <div>
            </div>
          <div class="col-md-6">
            
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Su pedido</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody> 
                    <?php 
                    $total =0;
                    for($i=0; $i<count($arreglo);$i++){
                      $total=$total+ ($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])
                    
                    ?>
                      <tr>
                        <td><?php echo $arreglo[$i]['Nombre']?></td>
                        <td>$<?php echo number_format($arreglo[$i]['Precio'] ,'2','.','')?></td>
                      </tr>
                      
                      <?php
                      }
                      ?>
                      <tr>
                        <td>Order total</td>
                        <td>$<?php echo number_format($total,'2','.','')?></td>
                      </tr>

                    </tbody>
                  </table>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">¿Como Pagar?</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                        <p class="mb-0">Cuando oprima el boton ordenar en unos minutos sera contactado por uno de nuestros asesores donde acordaran la forma de pago.</p>
                        <p class="mb-0">Por eso es importante que la informacion suministrada sea veridica y precisa.</p>
                      </div>
                    </div>
                  </div>          
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='thankyou.php'">Ordenar</button>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- </form> -->
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