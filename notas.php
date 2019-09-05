<?php

$nota = 'D';

if ($nota == 'A' || $nota == 'XX') {
    echo 'Te ganaste el premio mayor';
} else if ($nota == 'B' ) {
    echo 'Te ganaste el segundo premio';
} else if ($nota == 'C' ) {
    echo 'Te ganaste el tercer premio';
} else{
    echo 'no te ganaste nada';
}

switch ($nota) {
    case 'A':
    case 'XX':
        echo 'te ganaste el primero';
        break;
    case 'B':
        echo 'te ganaste el segundo';
        break;
    case 'C':
        echo 'te ganaste el tercero';
        break;

    default:
        echo 'no te ganaste nada';
        break;
}

 ?>
