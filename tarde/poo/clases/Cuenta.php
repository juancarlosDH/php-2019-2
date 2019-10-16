<?php
abstract class Cuenta {
    private $balance;
    private $cbu;
    private $fechaUltimoMovimiento;

    public abstract function cosa();

    public function acreditar(int $monto)
    {
        $this->balance = $this->balance + $monto;
        $this->fechaUltimoMovimiento = date('Y-m-d');
    }

    public function getBalance(){
        return $this->balance;
    }
}
