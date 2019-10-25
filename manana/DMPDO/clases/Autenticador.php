<?php
session_start();
class Autenticador {

    public function estaLogeadoElUsuario(): bool
    {
        return isset($_SESSION['email']);
    }

    public function logear(Usuario $usuario)
    {
        $_SESSION['id'] = $usuario->getId();
        $_SESSION['email'] = $usuario->getEmail();
        $_SESSION['avatar'] = $usuario->getAvatar();
    }

    public function deslogear()
    {
        session_destroy();
    }
}
