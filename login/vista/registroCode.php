<?php

include '../controlador/UsuarioControlador.php';
include '../helps/helps.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["txtNombre"]) && isset($_POST["txtEmail"]) && isset($_POST["txtUsuario"]) && isset($_POST["txtPassword"])
                                    && isset($_POST["txtTelefono"]) && isset($_POST["txtDireccion"])) {

        $txtNombre     = validar_campo($_POST["txtNombre"]);
        $txtEmail      = validar_campo($_POST["txtEmail"]);
        $txtUsuario    = validar_campo($_POST["txtUsuario"]);
        $txtPassword   = validar_campo($_POST["txtPassword"]);
        $txtTelefono   = validar_campo($_POST["txtTelefono"]);
        $txtDireccion  = validar_campo($_POST["txtDireccion"]);
        $txtPrivilegio = 2;

        if (UsuarioControlador::registrar($txtNombre, $txtEmail, $txtUsuario, $txtPassword, $txtPrivilegio, $txtTelefono, $txtDireccion)) {
            $usuario             = UsuarioControlador::getUsuario($txtUsuario, $txtPassword);
            $_SESSION["usuario"] = array(
                "id"         => $usuario->getId(),
                "nombre"     => $usuario->getNombre(),
                "usuario"    => $usuario->getUsuario(),
                "email"      => $usuario->getEmail(),
                "privilegio" => $usuario->getPrivilegio(),
                "telefono"   => $usuario->getTelefono(),
                "direccion"  => $usuario->getDireccion(),
            );

            header("location:admin.php");
        }

    }
} else {
    header("location:registro.php?error=1");
}


