<?php

include '../datos/UsuarioDao.php';

class UsuarioControlador
{
/**
     * Realiza el inicio de sesión de un usuario.
     *
     * @param string $usuario El nombre de usuario.
     * @param string $password La contraseña del usuario.
     * @return bool Retorna true si el inicio de sesión es exitoso, de lo contrario retorna false.
     */
    public static function login($usuario, $password)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setPassword($password);

        return UsuarioDao::login($obj_usuario);
    }
/**
     * Obtiene los datos de un usuario específico.
     *
     * @param string $usuario El nombre de usuario.
     * @param string $password La contraseña del usuario.
     * @return Usuario|null Retorna un objeto Usuario si se encuentra el usuario, de lo contrario retorna null.
     */
    public static function getUsuario($usuario, $password)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setPassword($password);

        return UsuarioDao::getUsuario($obj_usuario);
    }
 /**
     * Registra un nuevo usuario en el sistema.
     *
     * @param string $nombre El nombre del usuario.
     * @param string $email El correo electrónico del usuario.
     * @param string $usuario El nombre de usuario.
     * @param string $password La contraseña del usuario.
     * @param string $privilegio El nivel de privilegio del usuario.
     * @param string $telefono El número de teléfono del usuario.
     * @param string $direccion La dirección del usuario.
     * @return bool Retorna true si el registro es exitoso, de lo contrario retorna false.
     */
    public static function registrar($nombre, $email, $usuario, $password, $privilegio, $telefono, $direccion)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setNombre($nombre);
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setEmail($email);
        $obj_usuario->setPrivilegio($privilegio);
        $obj_usuario->setPassword($password);
        $obj_usuario->setTelefono($telefono);
        $obj_usuario->setDireccion($direccion);

        return UsuarioDao::registrar($obj_usuario);
    }

}
