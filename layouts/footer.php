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
                <?php 
                include 'conexion.php';
                $consulta="SELECT contacto FROM contacto WHERE id_contacto=1";
 
                    $resultado= $mysqli->query($consulta);
                    $row =$resultado-> fetch_assoc();
                  $llamada= $row['contacto'];
                ?>
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