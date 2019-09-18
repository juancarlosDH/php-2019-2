<?php
    require_once('funciones/productos.php');

    //var_dump($_GET);

    $producto = obtenerProductoPorId($_GET['id']);

    if (empty($producto)) {
        echo 'El Producto no existe';
        exit;
    }

    var_dump($producto);

 ?>
