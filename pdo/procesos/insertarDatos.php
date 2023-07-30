<?php

    require_once "../crud/crud.php";

    $datos= array(                 
                  'nombre' => $_POST['nombre'],
                  'usuario' => $_POST['usuario'],
                  'email' => $_POST['email'],
                  'password' => $_POST['password'],
                 'privilegio' => $_POST['privilegio']
                 
    );

    echo Crud::insertarDatos($datos);

?>