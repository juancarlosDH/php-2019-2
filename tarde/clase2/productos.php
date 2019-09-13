<?php
    $productos = [
        ['nombre' => 'Remera1',
         'precio' => 1000,
         'categorias' => ['deportiva', 'casual']
        ],
        ['nombre' => 'Remera2', 'precio' => 2000, 'categorias' => [] ],
        ['nombre' => 'Remera3', 'precio' => 3000, 'categorias' => ['deportiva']],
    ];

    foreach ($productos as $key => $producto) {
        echo '<p>Nombre:' . $producto['nombre'] . ', precio:' . $producto['precio'] ;
        for ($i=0; $i < count($producto['categorias']) ; $i++) {
            echo '<li>' . $producto['categorias'][$i] . '</li>';
        }
        echo '</p>';
    }







 ?>
