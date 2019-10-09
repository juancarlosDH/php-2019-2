<?php
require_once('clases/Especie.php');
require_once('clases/Mascota.php');


// $miPerro = new Mascota("m", 10);
// echo 'Has comprado a: ' . $miPerro->getNombre() . ', de peso: ' . $miPerro->getPeso();
//
// $elSegundo = new Mascota('Firulais');
// echo '<br>Y tambien a: ' . $elSegundo->getNombre() . ', de peso: ' . $elSegundo->getPeso();

$especiePerro = new Especie('perro');

$elTercero = (new Mascota())
                            ->setNombre("Pepe")
                            ->setPeso(40)
                            ->setHumor(true);

$elTercero->setEspecie($especiePerro);

$especiePerro->setNombre('gavilan');

echo $elTercero->getDescripcion();








 ?>
