<?php
require_once('autoload.php');

class Pyme extends Cliente implements Liquidable
{
    public function liquidarHaberes(Persona $per, float $dinero)
    {
        //primero cambio mi balance
        $balance = $this->getCuenta()->getBalance();
        $montoMio = $balance - $dinero;
        $this->getCuenta()->setBalance($montoMio);

        //luego cambio el balance de la persona que me pasaron
        $montoPer = $per->getCuenta()->getBalance() + $monto;
        $per->getCuenta()->setBalance($montoPer);

    }
}
