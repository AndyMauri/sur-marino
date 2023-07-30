<?php 

$servidor="localhost";
$nombrebd="peces";
$user="root";
$pass="";

$conexion= new mysqli($servidor,$user,$pass,$nombrebd);
    if(!$conexion){
        die("no se pudo conectar");
    }
?>