<?php
session_start();

if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
        header("location:admin.php"); // Redireccionar al administrador si tiene privilegios de administrador
    }
} else {
    header("location:login/vista/login.php"); // Redireccionar al formulario de inicio de sesión si no hay sesión iniciada
    exit();
}

include './php/conexion.php';
if(!isset($_SESSION['carrito'])){header("Location: ./index.php");} // Redireccionar a la página principal si el carrito no está definido en la sesión
$arreglo = $_SESSION['carrito'];
$total= 0;
// Calcular el total de la compra sumando los precios de los productos en el carrito
for($i=0;$i<count($arreglo);$i++){
  $total= $total+($arreglo[$i]['Precio']* $arreglo[$i]['Cantidad']);
}
$user= $_SESSION["usuario"]["id"];






$fecha = date('d-m-y h:m:s');
// Insertar la factura en la base de datos
$conexion ->query("insert into ordenfactura(id_usuario, total,fecha)values('$user',$total,now())")or die($conexion ->error);
$id_factura = $conexion ->insert_id;

for($i=0;$i<count($arreglo);$i++){
  $conexion -> query("insert into detalleordenfactura(id_ordenfactura,id_producto,cantidad,precio,subtotal)
    values (
      $id_factura,
      ".$arreglo[$i]['Id'].",
      ".$arreglo[$i]['Cantidad'].",
      ".$arreglo[$i]['Precio'].",
      ".$arreglo[$i]['Cantidad']*$arreglo[$i]['Precio']."
      )")or die($conexion ->error);
}
unset($_SESSION['carrito']); // Limpiar el carrito de la sesión

?>

<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Tienda</title>
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
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Gracias!</h2>
            <p class="lead mb-5">Su pedido se completó con éxito.</p>
            <p><a href="index.php" class="btn btn-sm btn-primary">Regresar a la Tienda</a></p>
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