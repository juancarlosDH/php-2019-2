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

        <?php require('header.php'); ?>

        <main>
            <h1>Mi Sitio con Productos</h1>

            <section class="productos">
                <?php /* for ($i=0; $i < count($productos) ; $i++) { ?>
                    <article class="producto">
                        <img src="<?php echo $productos[$i]['img'] ?>" alt="">
                        <h3><?php echo $productos[$i]['nombre'] ?></h3>
                        <p><?php echo $productos[$i]['precio'] ?></p>
                    </article>
                <?php } */ ?>

                <?php foreach ($productos as $producto) {
                    require('producto.php');
                 } ?>
            </section>

        </main>

    </body>







</html>
