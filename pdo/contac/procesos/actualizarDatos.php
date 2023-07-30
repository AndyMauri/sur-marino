<?php

    require_once "../crud/Crud.php";

    $datos= array(                 
                  'nombre' => $_POST['nombreu'],
                  'contacto' => $_POST['telefonou'],                                  
                    'id' => $_POST['id']
    );

    echo Crud::actualizarDatos($datos);

?>