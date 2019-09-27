<?php
    session_start();

    function elUsuarioEstaLogeado() {
        if(isset($_SESSION['email'])) {
            return true;
        }
        return false;
    }

    function logearUsuario($email) {
        
    }

 ?>
