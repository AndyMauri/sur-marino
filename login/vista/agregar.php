<?php 
     include('../../php/conexion.php');

        if(isset($_POST['registrar'])){
                if(strlen($_POST['telefono']) >= 1 && 
                strlen($_POST['direccion']) >= 1 &&
                strlen($_POST['barrio']) >= 1 &&
                strlen($_POST['vereda']) >= 1  ){

               
                $Telefono=$_POST['telefono'];              
                $Direccion=$_POST['direccion'];
                $Barrio=$_POST['barrio'];
                $Vereda=$_POST['vereda'];
                
                $user= $_SESSION["usuario"]["id"];
                $insertar= "INSERT INTO residencia(id_usuario,telefono,ciudad, barrio, vereda) 
                            VALUES ('$user','$Telefono','$Direccion', '$Barrio', '$Vereda')";
                $resultado= mysqli_query($conexion,$insertar);

                if($resultado){
                    ?>
                    
                    <?php
                }else{
                    ?>
                    <script language="javascript">alert("Ocurrio un error")</script>
                    <?php
                }

            } else {
                ?>
                    <h3 name="completar">complete los campos</h3>
                    <?php
            }
        }
          
          ?>