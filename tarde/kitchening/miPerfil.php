<?php

require_once('funciones/autoload.php');

if(!estaElUsuarioLogeado()){
    header('location:login.php');
}

echo 'Bienvenido Usuario';
