<?php
require_once ("clases/autoload.php");

//$producto = new Producto('Adidas Tr9', 15.6, $categoria);
$producto = new Producto('Adidas Tr9', 15.6);
$bd = new BaseDatos;
$producto->guardar($bd);
 exit;

$categoria = new Categoria('Zapatillas');
$producto->setCategoria($categoria);

echo $producto->getCategoria()->getNombre();
echo '<br>';
echo $producto->dameElNombreDeLaCategoria();




//echo 'El nombre es:' . $producto->getNombre();
//var_dump($producto);
//echo $producto->darTotal(3);
