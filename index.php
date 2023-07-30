<?php
// Inicio de sesión y configuración de informes de errores
session_start(); // Inicia una nueva sesión o reanuda la existente
error_reporting(0); // Desactiva la notificación de errores
?>
<!DOCTYPE html>
<html lang="es">
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
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
           <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Comprar</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Latest
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="#">Peces</a>
                      <a class="dropdown-item" href="#">Insumos</a>
                      <a class="dropdown-item" href="#">Alevinos</a>
                    </div>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5">
              <?php
                include('./php/conexion.php');
                $resultado = $conexion -> query("select * from producto order by id_producto DESC") or die ($conexion -> error);
                while($fila = mysqli_fetch_array($resultado)){
              ?>

              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="shop-single.php?id_producto=<?php echo $fila['id_producto']; ?>">
                    <img src="images/<?php echo $fila['imagen']; ?>" alt="<?php echo $fila['nombre']; ?>" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.php?id_producto=<?php echo $fila['id_producto']; ?>"><?php echo $fila['nombre']; ?></a></h3>
                    <p class="mb-0"><?php echo $fila['descripcion']; ?></p>
                    <p class="text-primary font-weight-bold"><?php echo $fila['precio']; ?></p>
                  </div>
                </div>
              </div>
            
                <?php    }?>

            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categorias</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="#" class="d-flex"><span>Peces</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Insumos</span> <span class="text-black ml-auto">(550)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Alevinos</span> <span class="text-black ml-auto">(10,124)</span></a></li>
              </ul>
            </div>

            <div class="border p-4 rounded mb-4">
            <img src="images/covid.jpg" alt="" width="200" height="70">
              <div class="mb-4">
               
              </div>
                    
              <div class="mb-4">
               
              </div>
                    
              <div class="mb-4">
                
                <h3 class="mb-3 h6 text-uppercase text-black d-block">PREVIENE</h3>
                <a class="d-flex color-item align-items-center" >
                  <span class=" ">1. QUÉDATE en casa lo máximo posible</span> 
                </a>
                <a class="d-flex color-item align-items-center" >
                  <span class="">2. MANTÉN el distanciamiento social</span>
                </a>
                <a class="d-flex color-item align-items-center" >
                  <span class="">3. LÁVATE las manos con frecuencia</span> 
                </a>
                <a class="d-flex color-item align-items-center" >
                  <span class="">4. TOSE cubriéndote con el codo</span> 
                </a>
                <a class="d-flex color-item align-items-center" >
                  <span class="">5. LLAMA si tienes síntomas</span> 
                </a><br>
                <a class="d-flex color-item align-items-center" >
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Sigue estas recomendaciones</h3>
                </a>
                <a class="d-flex color-item align-items-center" >
                <h3 class="mb-3 h6 text-uppercase text-black d-block">¡POR TI Y TU FAMILIA!</h3>
                </a>
                <a class="d-flex color-item align-items-center" >
                <img src="images/oms.png" alt="" width="100" height="50">
                </a>
              </div>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="site-section site-blocks-2">
                <div class="row justify-content-center text-center mb-5">
                  <div class="col-md-7 site-section-heading pt-4">
                    <h2>Categories</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                        <img src="images/koi2.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Collections</span>
                        <h3>Peces</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                        <img src="images/insu2.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Collections</span>
                        <h3>Insumos</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                        <img src="images/huevos2.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Collections</span>
                        <h3>Alevinos</h3>
                      </div>
                    </a>
                  </div>
                </div>
              
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