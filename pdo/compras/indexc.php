<?php
    header('Content-Type: text/html; charset=UTF-8');
    //Iniciar una nueva sesión o reanudar la existente.
    session_start();
    //Si existe la sesión "cliente"..., la guardamos en una variable.
    if (isset($_SESSION['usuario'])){
        $cliente = $_SESSION['usuario'];
    }else{
 header('Location: ../login/vista/login.php');//Aqui lo redireccionas al lugar que quieras.
     die() ;

    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>PDO</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<style>
#salir{
	
	position: relative;
	right: -600px;
}

#pos{
	position: relative;
	right: -10px;

}

</style>
<body>




	<div class="container">
		<div class="row">
			<h2>Administrador Sur Marino-</strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></h2>
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						<ul class="nav nav-tabs card-header-tabs">
							<li class="nav-item" >
								<a class="nav-link active" href="../index.php">Usuarios</a>
							</li>
							
							<li class="nav-item" id="pos">
								<a class="nav-link active" href="../productos/indexp.php"> Productos</a>
							</li>

							<li class="nav-item" id="pos">
								<a class="nav-link active" href="#"> Compras</a>
							</li>
							<li class="nav-item" id="pos">
								<a class="nav-link active" href="../contac/indexcon.php"> Contactos</a>
							</li>

							<li class="nav-item" id="salir">
							<a class="nav-link active" href="../../login/vista/cerrar-sesion.php" >Salir</a>
							</li>

							</li>
						</ul>
						<ul>
						</ul>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
								<span class="btn btn-primary" data-toggle="modal" data-target="#insertarModal">
									<i class="fas fa-plus-circle"></i> Nuevo registro
								</span>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-12">
								<div id="tablaDatos"></div>																				
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<?php require_once "modalInsert.php" ?>
	<?php require_once "modalUpdate.php" ?>

	<script src="librerias/bootstrap4/jquery-3.4.1.min.js"></script>
	<script src="librerias/bootstrap4/popper.min.js"></script>
	<script src="librerias/bootstrap4/bootstrap.min.js"></script>
	<script src="librerias/sweetalert.min.js"></script>
	<script src="js/crud.js"></script>


	<script type="text/javascript">
		mostrar();
	</script>

</body>
</html>