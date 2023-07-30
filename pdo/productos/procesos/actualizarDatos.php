<?php

    require_once "../crud/Crud.php";

    $datos= array(                 
                  'nombre' => $_POST['nombreu'],
                  'imagen' => $_POST['imagenu'],
                  'descripcion' => $_POST['descripcionu'],
                  'inventario' => $_POST['inventariou'],
                 'precio' => $_POST['preciou'],                 
                 'id' => $_POST['id']
    );

    echo Crud::actualizarDatos($datos);

?>