<?php

require_once('clases/autoload.php');

$usu1 = new Usuario('Tato@tato.com', 'qwerty');

echo $usu1->guardar();
exit;


//echo $usu->saludar();
$celu1 = new Celular('samg', 'S1', 'claro', '1234567890');
$usu1->setCelular($celu1);

$usu2 = new Usuario('juanca@tato.com', '123456');
//echo $usu->saludar();
$celu2 = new Celular('Huawei', 'P7', 'claro', '33445454');
$usu2->setCelular($celu2);

//echo($usu->mostrarTelefono());

echo $usu1->llamar($usu2, 10);



/**/
