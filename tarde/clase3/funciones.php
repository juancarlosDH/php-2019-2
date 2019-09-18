<?php

function mayor(int $n1,int $n2,int $n3 = 100){

}

$apellido = 'Gonzalez';

$var = saludar('Juan', $apellido);

echo $var;

echo saludar('Gaston');

echo saludar('Estevez');

function saludar ($nombre, $apellido = '') {
    $miVar = '';
    return 'Hola ' . $nombre . ' ' . $apellido;
}

function sumar (int $num1, int $num2 = 100) {
    return $num1 + $num2;
}
echo ' ' . sumar(1,2);









/**/
