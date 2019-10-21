<?php
abstract class Cuenta
{
    protected $cbu;
    protected $balance;
    protected $fechaUM;

    public function __construct(string $cbu)
    {
        $this->cbu = $cbu;
        $this->balance = 0;
        $this->fechaUM = date('Y-m-d');
    }

    abstract public function debitar(float $monto, string $origen);

    public function getBalance()
    {
        return $this->balance;
    }

    public function setBalance($monto)
    {
        $this->balance = $monto;
    }

    public function acreditar($monto)
    {
        $this->balance = $this->balance + $monto;
    }

}
