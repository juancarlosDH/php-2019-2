<?php
require_once('clases/Usuario.php');

$usu = new Usuario;
$usu->setEmail('coso@alguien.com');

var_dump($usu);
