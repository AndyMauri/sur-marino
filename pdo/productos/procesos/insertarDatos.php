<?php

    require_once "../crud/crud.php";

    $datos= array(                 
                  'nombre' => $_POST['nombre'],
                  'imagen' => $_POST['imagen'], 
                  'descripcion' => $_POST['descripcion'],
                  'inventario' => $_POST['inventario'],
                  'precio' => $_POST['precio']
                 
    );

    echo Crud::insertarDatos($datos);

?>