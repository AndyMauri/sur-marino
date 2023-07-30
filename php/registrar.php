<?php 
     include('conexion.php');

        if(isset($_POST['registrar'])){
                if(strlen($_POST['cedula']) >= 1 && 
                strlen($_POST['nombre']) >= 1 && 
                strlen($_POST['apellido']) >= 1 && 
                strlen($_POST['telefono']) >= 1 && 
                strlen($_POST['correo']) >= 1 &&
                strlen($_POST['direccion']) >= 1 &&
                strlen($_POST['barrio']) >= 1 &&
                strlen($_POST['vereda']) >= 1  ){

                $Cedula=$_POST['cedula'];
                $Nombre=$_POST['nombre'];
                $Apellido=$_POST['apellido'];
                $Telefono=$_POST['telefono'];
                $Correo=$_POST['correo'];
                $Direccion=$_POST['direccion'];
                $Barrio=$_POST['barrio'];
                $Vereda=$_POST['vereda'];
                
                $insertar= "INSERT INTO usuario(cedula, nombre, apellido, telefono, correo,id_rol) 
                            VALUES ('$Cedula', '$Nombre', '$Apellido','$Telefono','$Correo', 3)";                         
                $insertar2= "INSERT INTO residencia(id_usuario,ciudad, barrio, vereda) 
                            VALUES ('','$Direccion', '$Barrio', '$Vereda')";
                $resultado= mysqli_query($conexion,$insertar);
                $resultado2=mysqli_query($conexion,$insertar2);
                if($resultado && $resultado2){
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