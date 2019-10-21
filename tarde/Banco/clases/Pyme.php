<?php
require_once('autoload.php');

class Pyme extends Cliente implements Liquidable
{
    private $razonSocial;
    private $cuit;

    public function __construct(string $razonSocial, string $cuit, string $email, string $pass, Cuenta $cuenta)
    {
        $this->razonSocial = $razonSocial;
        $this->cuit = $cuit;
        parent::__construct($email, $pass, $cuenta);
    }

    public function liquidarHaberes(Persona $per, float $dinero)
    {
        //primero cambio mi balance
        $balance = $this->getCuenta()->getBalance();
        $montoMio = $balance - $dinero;
        $this->getCuenta()->setBalance($montoMio);

        //luego cambio el balance de la persona que me pasaron
        $montoPer = $per->getCuenta()->getBalance() + $dinero;
        $per->getCuenta()->setBalance($montoPer);

    }
}
