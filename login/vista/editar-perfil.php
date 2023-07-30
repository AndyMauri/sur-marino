<?php include 'partials/head.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
        header("location:admin.php");
    }
} else {
    header("location:login.php");
}
?>
<?php include 'partials/menu.php';?>
<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="jumbotron">
			<div class="container text-center">
            <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Direccion y Contacto</h2></br>
             <div class="p-3 p-lg-5 border">
             <form method="post">
              <div class="form-group row">
                
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Telefono<span class="text-danger">*</span></label>
                  <input type="number" class="form-control" id="telefono" name="telefono">
                </div>         
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Direccion<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ciudad y Direccion">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"id="barrio" name= "barrio"placeholder="Barrio (optional) ">
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Vereda<span class="text-danger"></span></label>
                  <input type="text" class="form-control" id="vereda" name="vereda" placeholder="">
                </div>
              </div>          

              <div class="form-group">
                    <input type="submit" name="registrar" value="añadir" class="btn btn-primary btn-lg py-3 btn-block">
                  </div>

              </div>
             </div>
              </form>
              <?php include("agregar.php"); ?>
           <div>
			</div>
		</div>
	</div>
</div><!-- /.container -->
<?php include 'partials/footer.php';?> 