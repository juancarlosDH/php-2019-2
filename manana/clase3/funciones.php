<?php

function mayor(float $num1, float $num2, float $num3 = 100){
    if ($num1 > $num2) {
        return $num1;
    } else {
        return $num2;
    }
}

function tabla (int $base, int $limite) {
    $cosas = [];
    for ($i=$base; $i <= $limite ; $i++) {
        $cosas[] = $i;
    }

    return $cosas;
}

function descripcionLarga(array $articulo) {
    return $articulo['descripcion'] . ' ' . $articulo['precio'];
}












?>
