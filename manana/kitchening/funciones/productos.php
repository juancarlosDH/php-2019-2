<?php

function dameProductos () {

    $productos = [
        0 => [
                "id" => 1,
                "titulo" => "Lorem Ipsum",
                "descripcion" => "Lorem Ipsum",
                "precio" => 300,
                "imagen" => "img-pdto-1.jpg",
                "enOferta" => true
        ],
        1 => [
                "id" => 2,
                "titulo" => "Lorem Ipsum",
                "descripcion" => "Lorem Ipsum",
                "precio" => 500,
                "imagen" => "img-pdto-2.jpg",
                "enOferta" => false
        ],
        2 => [
                "id" => 3,
                "titulo" => "Lorem Ipsum",
                "descripcion" => "Lorem Ipsum",
                "precio" => 500,
                "imagen" => "img-pdto-3.jpg",
                "enOferta" => false
        ]
    ];

    return $productos;
}

function imprimirProductos () {
    $productos = dameProductos();

    foreach ($productos as $producto) { ?>
        <article class="product">
            <div class="photo-container">
                <img class="photo" src="images/<?= $producto['imagen'] ?>" alt="pdto 01">
                <?php if ($producto['enOferta'] === true) { ?>
                    <img class="special" src="images/img-descuento.png" alt="plato nuevo">
                <?php } ?>
                <a class="zoom" href="#">Ampliar foto</a>
            </div>
            <h2><?= $producto['titulo'] ?></h2>
            <p><?= $producto['descripcion'] ?></p>
            <a class="more" href="#">ver más</a>
        </article>
    <?php }
}








//
