<?php
    require_once('clases/Autenticador.php');

    $miAuth = new Autenticador;

    var_dump($miAuth);

    $miAuth->setCosa('lo que yo quiera');

    var_dump($miAuth);
