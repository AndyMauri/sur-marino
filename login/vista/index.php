<?php 
include 'partials/head.php';
include 'partials/menu.php';
include	'../../conexion.php';
$consulta="SELECT contacto FROM contacto WHERE id_contacto=1";
 
$resultado= $mysqli->query($consulta);
$row =$resultado-> fetch_assoc();

$consulta2="SELECT contacto FROM contacto WHERE id_contacto=2";
 
$resultado2= $mysqli->query($consulta2);
$row2 =$resultado2-> fetch_assoc();

$llamada= $row['contacto'];
$chat= $row2['contacto'];

 ?>

<div class="container">

	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="jumbotron">
			<div class="container">
				<h1>PISCICOLA MARINO DEL SUR</h1>
				<p>Es una empresa dedicada a laproduccion y suministro de 
					alevinos de aguas continentales; con alta calidad genentica,
					asesorias en proyectos Piscicolas.</p>
				<p>Registrate o inicia sesion para poder comprar</p>
				<p>
					<a href="login.php" class="btn btn-primary btn-lg">Login</a>
				</p>
			</div>
		</div>
	</div>
	<p><a href=""><img src="../../images/tel.png" height="40 px" width="40 px"> Llamanos al <?php echo $llamada?></a></p>
	<p><a href=""><img src="../../images/what.jpg" height="40 px" width="40 px"> Escribenos al Whatsapp <?php echo $chat?> </a></p>

</div><!-- /.container -->

<?php include 'partials/footer.php';?>