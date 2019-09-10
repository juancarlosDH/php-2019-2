<?php
    $usuario = 'Gaston';

    $li1 = 'Primer Elemento';
    $li2 = 'Segundo elemento';

    $productos = [
        [ 'nombre' => 'Zapatillas Voladoras', 'precio' => 1000, 'categoria' => 'Calzado'],
        [ 'nombre' => 'Remera Posta', 'precio' => 500, 'categoria' => 'Remera'],
    ];


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>Bienvenido Usuario <?= $usuario ?></h1>
        <?php
            echo "<ul>
                <li>$li1</li>
                <li>$li2</li>
            </ul>";
            exit;
         ?>
         <ol>
            <li><?php echo $li1 ?></li>
            <li><?= $li2 ?></li>
         </ol>
         <?php
         for ($i=0; $i < count($productos); $i++): ?>
             <div class="">
                 <h4>Producto: <?= $productos[$i]['nombre'] ?></h4>
                 <p>Precio: <?= $productos[$i]['precio'] ?></p>
                 <div class="">
                     Categoria: <?= $productos[$i]['categoria'] ?>
                 </div>
             </div>
         <?php endfor; ?>
    </body>
</html>
