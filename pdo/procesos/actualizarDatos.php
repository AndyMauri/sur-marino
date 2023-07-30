<?php

    require_once "../crud/Crud.php";

    $datos= array(                 
                  'nombre' => $_POST['nombreu'],
                  'usuario' => $_POST['usuariou'],
                  'email' => $_POST['emailu'],
                  'password' => $_POST['passwordu'],
                 'privilegio' => $_POST['privilegiou'],                 
                 'id' => $_POST['id']
    );

    echo Crud::actualizarDatos($datos);

?>