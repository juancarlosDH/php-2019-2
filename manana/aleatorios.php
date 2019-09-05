<?php
    $valor = rand(4, 80);
    var_dump($valor);

    //con if normal
    if ($valor % 2 == 0 ) {
        echo 'El numero es par <br>';
    } else {
        echo  'El numero es impar<br>';
    }
    //con if ternario
    echo (($valor % 2 == 0) ? 'El numero es par' : 'El numero es impar') ;


 ?>
