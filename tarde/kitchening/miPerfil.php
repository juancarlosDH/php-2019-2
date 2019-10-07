<?php

require_once('funciones/autoload.php');

if (isset($_COOKIE['recuerdame'])) {
    logear($_COOKIE['recuerdame']);
}

if(!estaElUsuarioLogeado()){
    header('location:login.php');
}

echo 'Bienvenido ' . $_SESSION['email'];
