<?php
    require_once('funciones/autoload.php');

    $productos = dameProductos();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Mi sitio</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>

        <h2>Los productos para comprar</h2>

        <section class="productos">
            <?php foreach ($productos as $producto) {
                require('producto.php');
             } ?>
        </section>

    </body>
</html>
