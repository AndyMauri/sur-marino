<?php

    require_once "../crud/crud.php";

    $datos= array(                 
                  'nombre' => $_POST['nombre'],
                  'contacto' => $_POST['telefono']
                  
                 
    );

    echo Crud::insertarDatos($datos);

?>