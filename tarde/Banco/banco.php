<?php

require_once('clases/autoload.php');

$cuenta = new Classic('1234574345654');
$person = new Persona('tato', 'alguien', 1234567890, '2000-10-11', 'tato@tato.com', '12345', $cuenta);

$cuenta = new Gold('12323423423');
$pyme = new Pyme('Mi Pyme', '20-12345678-0', 'pyme@pyme.com', '1234567890', $cuenta);
$pyme->getCuenta()->acreditar(2000);

echo 'Antes de la transaccion:<br>';
echo 'Persona tiene: ' . $person->getCuenta()->getBalance(). '<br>';
echo 'Pyme tiene: ' . $pyme->getCuenta()->getBalance(). '<br>';

$pyme->liquidarHaberes($person, 1000);

echo 'Despues de la transaccion:<br>';
echo 'Persona ahora tiene: ' . $person->getCuenta()->getBalance(). '<br>';
echo 'Pyme ahora tiene: ' . $pyme->getCuenta()->getBalance(). '<br>';





/**/
