<?php
include 'conexion.php';

$ORDEN= $_GET["orden"];
$consulta1= "SELECT ordenfactura.id_ordenfactura, usuarios.nombre, usuarios.telefono, usuarios.direccion, producto.nombre, detalleordenfactura.cantidad, detalleordenfactura.precio, detalleordenfactura.subtotal, ordenfactura.fecha 
                FROM usuarios, ordenfactura, detalleordenfactura, producto 
                    WHERE detalleordenfactura.id_producto = producto.id_producto 
                        AND ordenfactura.id_usuario= usuarios.id 
                            AND detalleordenfactura.id_ordenfactura= $ORDEN";

$resultado1= $mysqli->query($consulta1);
$row1 =$resultado1-> fetch_assoc();

$consulta2="SELECT ordenfactura.id_ordenfactura, usuarios.nombre, usuarios.telefono, usuarios.direccion 
                FROM detalleordenfactura, ordenfactura, usuarios 
                    WHERE ordenfactura.id_usuario = usuarios.id 
                        AND	ordenfactura.id_ordenfactura= detalleordenfactura.id_ordenfactura  
                            AND detalleordenfactura.id_ordenfactura= $ORDEN ";

$resultado2= $mysqli->query($consulta2);
$row2 =$resultado2-> fetch_assoc();

$consulta3="SELECT ordenfactura.total
                FROM ordenfactura, usuarios, detalleordenfactura 
                    WHERE ordenfactura.id_usuario= usuarios.id 
                        AND ordenfactura.id_ordenfactura= $ORDEN ";
 
$resultado3= $mysqli->query($consulta3);
$row3 =$resultado3-> fetch_assoc();
 
$fecha1= date (' h:m:s  / d-m-y');

$fechapedido= $row1['fecha'];
$usename= $row2['nombre'];
$telefono= $row2['telefono'];
$direccion= $row2['direccion']; 
$subtotal= $row3['total']; 
?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="color">
        <div class="fac-t">
        
            <div class="fac-c">
            <img src="img/civo.png" alt=""  class="logo">			
			<input type="text" disabled="disabled" class="no-border" id="cb-color" placeholder="<?php echo $fechapedido?>"><br>
            <span class="pos">Nombre</span>
			<input type="text" disabled="disabled" class="no-border" id="cb-color" placeholder="<?php echo $usename ?>"> 
            <span class="pos">Telefono</span>		
			<input type="text" disabled="disabled" class="no-border" id="cb-color" placeholder="<?php echo $telefono ?>">
            <span class="pos">Direccion</span>		
			<input type="text" disabled="disabled" class="no-border" id="cb-color" placeholder="<?php echo $direccion ?>"><br>
        
             </div>
        <div><br>
            <div>
                 <span class="titulo">--Pisicola Marino del Sur--</span>
                 <input type="text" disabled="disabled" class="date" placeholder="<?php echo $fecha1 ?>">
            </div>
            
            <table class="tab-1">
                <tr>
                  <td width="130px">--Descripcion--</td>
                  <td width="40px">Cantidad</td>
                  <td width="100px">PrecioUnidad</td>   
                  <td width="50px">subtotal</td>
                </tr>   
            </table><br>
            <?php
                 $consulta1= $mysqli->query( "SELECT producto.nombre, detalleordenfactura.cantidad, detalleordenfactura.precio, detalleordenfactura.subtotal, ordenfactura.fecha 
                 FROM usuarios, ordenfactura, detalleordenfactura, producto 
                     WHERE detalleordenfactura.id_producto = producto.id_producto 
                         AND ordenfactura.id_ordenfactura= detalleordenfactura.id_ordenfactura 
                           AND ordenfactura.id_usuario= usuarios.id 
                             AND detalleordenfactura.id_ordenfactura= $ORDEN");
            while($fila = mysqli_fetch_array($consulta1)){
                ?>
            <div> 
            <table class="tab-2">
                <tr>
                    <td width="140px">--<?php echo $fila['nombre']; ?>--</td>
                    <td width="50px"><?php echo $fila['cantidad']; ?></td>
                    <td width="80px">$<?php echo $fila['precio']; ?></td>
                    <td width="50px">$<?php echo $fila['subtotal']; ?></td>
                </tr>
            </table>
            </div>
            <?php     }  ?>
        </div>

        <div class="sub">
            <table class="tab-3">
            <tr>
                  <td width="130px">--Total--</td>
                  <td width="40px"></td>
                  <td width="100px"></td>   
                  <td width="50px">$<?php echo $subtotal ?></td>
                </tr> 
            </table>
        </div>    
        
        <div class="btn-imp" onclick="imprime()">
            <tr>
            <input type=image src="img/imp.png" width="40" height="40">
            </tr>
         </div>
        
        <div class="info">
        <span> --Pisciola Marino del Sur-- </span><br>
        <span> --Contactos al 322 4840685 / whatsApp 322 4840685--</span>
        </div>
    
    </div>

    <script type="text/javascript">
		function imprime(){
		
			window.print();
		
		 
		}
    </script>
</body>
</html>